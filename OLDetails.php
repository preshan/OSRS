<?php

session_start();

include('DBconnection.php');
$subjects = '';
    
   
$connection = db_connect();

if (!isset($_SESSION["OLExamDetails"])) {
    
    $query1     = 'INSERT INTO studentolexamdetailsmap(StudentKey, Year, IndexNo, Medium) VALUES ('.$_SESSION["StudentKey"].',?,?,?)';


    
    $stmt1 = $connection->stmt_init();
    if (!$stmt1->prepare($query1)) {
        print "Failed to prepare statement1\n";
    } else {
        $stmt1->bind_param("sss", $param1, $param2, $param3);
        
        $param1 = $_POST['ol_year'];
        $param2 = $_POST['ol_index_no'];
        $param3 = $_POST['ol_medium'];

        $stmt1->execute();
        
    }


    $query1                   = 'select * from studentolexamdetailsmap where StudentKey = ' . $_SESSION["StudentKey"];
    $result                   = $connection->query($query1);
    $row                      = $result->fetch_assoc();
    $_SESSION["OLExamDetails"] = $row;
    
   
    
} else {
 
    
    $query1     = 'UPDATE studentolexamdetailsmap SET Year=?,IndexNo=?,Medium=? WHERE StudentKey=' . $_SESSION["StudentKey"];
  
    $stmt1 = $connection->stmt_init();
    if (!$stmt1->prepare($query1)) {
        print "Failed to prepare update statement1\n";
    } else {
        $row = $_SESSION["OLExamDetails"];
        if ($_POST['ol_year'] != $row['Year'] or $_POST['ol_index_no'] != $row['IndexNo'] or $_POST['ol_medium'] != $row['Medium'] ) {
            $stmt1->bind_param("sss", $param1, $param2, $param3);
            
            $param1 = $_POST['ol_year'];
            $param2 = $_POST['ol_index_no'];
            $param3 = $_POST['ol_medium'];
            
            $stmt1->execute();

            echo 'successful';
            
            $query2                   = 'select * from studentolexamdetailsmap where StudentKey = ' . $_SESSION["StudentKey"];
            $result                   = $connection->query($query2);
            $row2                      = $result->fetch_assoc();
            $_SESSION["OLExamDetails"] = $row2;
        }
        
    }
    
    
}

?>