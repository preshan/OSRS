<?php

session_start();

include('DBconnection.php');


if (!isset($_SESSION["BasicDetails"])) {
    $connection = db_connect();
    $query1     = 'insert into studentmaster( NameWithInitials, Name, DateOfBirth, NIC, Gender) VALUES (?,?,?,?,?)';
    
    $query2 = 'insert into studentdistrictmap (StudentKey,DistrictKey) values (?,?)';
    
    $query3 = 'insert into studentcoursemap (StudentKey,CourseKey) values (?,?)';
    
    $query4 = 'insert into studentatimap (StudentKey,ATIKey) values (?,?)';
    
    $query5 = 'Update studentatimap set ApplicationID = ? where StudentKey = ? and ATIKey = ?';
    
    $StudentKey = '';
    
    $stmt1 = $connection->stmt_init();
    if (!$stmt1->prepare($query1)) {
        print "Failed to prepare statement1\n";
    } else {
        $stmt1->bind_param("sssss", $param1, $param2, $param3, $param4, $param5);
        
        $param1 = $_POST['name_with_ini'];
        $param2 = $_POST['name'];
        $param3 = $_POST['dob'];
        $param4 = $_POST['nic'];
        $param5 = $_POST['gender'];
        
        $stmt1->execute();
        $StudentKey             = $connection->insert_id;
        $_SESSION["StudentKey"] = $StudentKey;
        
    }
    
    $stmt2 = $connection->stmt_init();
    if (!$stmt2->prepare($query2)) {
        print "Failed to prepare statement2\n";
    } else {
        $stmt2->bind_param("ss", $param6, $param7);
        $param6 = $StudentKey;
        $param7 = $_POST['district'];
        
        $stmt2->execute();
        
    }
    
    $stmt3 = $connection->stmt_init();
    if (!$stmt3->prepare($query3)) {
        print "Failed to prepare statement3\n";
    } else {
        $stmt3->bind_param("ss", $param8, $param9);
        $param8 = $StudentKey;
        $param9 = $_POST['course'];
        
        $stmt3->execute();
        
    }
    
    $stmt4 = $connection->stmt_init();
    if (!$stmt4->prepare($query4)) {
        print "Failed to prepare statement4\n";
    } else {
        $stmt4->bind_param("ss", $param10, $param11);
        $param10 = $StudentKey;
        $param11 = $_POST['institute'];
        
        $stmt4->execute();
        
    }
    
    $ApplicationID = 'A' . date("y") . $_POST['institute'] . $StudentKey;
    
    $stmt5 = $connection->stmt_init();
    if (!$stmt5->prepare($query5)) {
        print "Failed to prepare statement5\n";
    } else {
        $stmt5->bind_param("sss", $param12, $param13, $param14);
        $param12 = $ApplicationID;
        $param13 = $StudentKey;
        $param14 = $_POST['institute'];
        
        $stmt5->execute();
        
    }
    
    $query1                   = 'select * from studentmaster where StudentKey = ' . $_SESSION["StudentKey"];
    $result                   = $connection->query($query1);
    $row                      = $result->fetch_assoc();
    $_SESSION["BasicDetails"] = $row;
    
    $query2                        = 'select * from studentatimap where StudentKey = ' . $_SESSION["StudentKey"] . ' and ApplicationID ="' . $_SESSION["ApplicationID"] . '"';
    $result2                       = $connection->query($query2);
    $row2                          = $result2->fetch_assoc();
    $_SESSION["StudentATIDetails"] = $row2;
    
    $query3                      = 'select * from studentdistrictmap where StudentKey = ' . $_SESSION["StudentKey"];
    $result3                     = $connection->query($query3);
    $row3                        = $result3->fetch_assoc();
    $_SESSION["StudentDistrict"] = $row3;
    
    $query4                    = "SELECT ApplicationID FROM studentatimap where StudentKey = " . $StudentKey . " and ATIKey = " . $_POST['institute'];
    $result                    = $connection->query($query4);
    $row                       = $result->fetch_assoc();
    $_SESSION["ApplicationID"] = $row['ApplicationID'];
} else {
    //***************************************update***************************************************************
    $connection = db_connect();
    $query1     = 'UPDATE studentmaster SET NameWithInitials=?,Name=?,DateOfBirth=?,NIC=?,Gender=? WHERE StudentKey=' . $_SESSION["StudentKey"];
    $query2     = 'UPDATE studentdistrictmap SET DistrictKey=? WHERE StudentKey=' . $_SESSION["StudentKey"];
    $query4     = 'UPDATE studentatimap SET ATIKey=? WHERE StudentKey=' . $_SESSION["StudentKey"];
    
    $stmt1 = $connection->stmt_init();
    if (!$stmt1->prepare($query1)) {
        print "Failed to prepare update statement1\n";
    } else {
        $row = $_SESSION["BasicDetails"];
        if ($_POST['name_with_ini'] != $row['NameWithInitials'] or $_POST['name'] != $row['Name'] or $_POST['dob'] != $row['DateOfBirth'] or $_POST['nic'] != $row['NIC'] or $_POST['gender'] != $row['Gender']) {
            $stmt1->bind_param("sssss", $param1, $param2, $param3, $param4, $param5);
            
            $param1 = $_POST['name_with_ini'];
            $param2 = $_POST['name'];
            $param3 = $_POST['dob'];
            $param4 = $_POST['nic'];
            $param5 = $_POST['gender'];
            
            $stmt1->execute();
            
            $query1                   = 'select * from studentmaster where StudentKey = ' . $_SESSION["StudentKey"];
            $result                   = $connection->query($query1);
            $row                      = $result->fetch_assoc();
            $_SESSION["BasicDetails"] = $row;
        }
        
    }
    //**********************************************************************************
    $stmt2 = $connection->stmt_init();
    if (!$stmt2->prepare($query2)) {
        print "Failed to prepare statement2\n";
    } else {
        $row = $_SESSION["StudentDistrict"];
        if ($_POST['district'] != $row['DistrictKey']) {
            $stmt2->bind_param("s", $param7);
            $param7 = $_POST['district'];
            
            $stmt2->execute();
            
            $query3                      = 'select * from studentdistrictmap where StudentKey = ' . $_SESSION["StudentKey"];
            $result3                     = $connection->query($query3);
            $row3                        = $result3->fetch_assoc();
            $_SESSION["StudentDistrict"] = $row3;
        }
        
    }
    
    //******************************************************************************
    
    $stmt4 = $connection->stmt_init();
    if (!$stmt4->prepare($query4)) {
        print "Failed to prepare statement4\n";
    } else {
        $row = $_SESSION["StudentATIDetails"];
        if ($_POST['institute'] != $row['ATIKey']) {
            $stmt4->bind_param("s", $param11);
            $param11 = $_POST['institute'];
            
            $stmt4->execute();
            
            $query2                        = 'select * from studentatimap where StudentKey = ' . $_SESSION["StudentKey"] . ' and ApplicationID ="' . $_SESSION["ApplicationID"] . '"';
            $result2                       = $connection->query($query2);
            $row2                          = $result2->fetch_assoc();
            $_SESSION["StudentATIDetails"] = $row2;
        }
        
    }
    
}




?>