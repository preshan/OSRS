<?php

session_start();

include('DBconnection.php');
$subjects = '';
    
   
$connection = db_connect();

if (!isset($_SESSION["ALExamDetails"])) {
    
    $query1     = 'INSERT INTO studentalexamdetailsmap(StudentKey, Year, IndexNo, Medium,Zscore,EnglishQulification) VALUES ('.$_SESSION["StudentKey"].',?,?,?,?,?)';


    
    $stmt1 = $connection->stmt_init();
    if (!$stmt1->prepare($query1)) {
        print "Failed to prepare statement1\n";
    } else {
        $stmt1->bind_param("sssss", $param1, $param2, $param3, $param4, $param5);
        
        $param1 = $_POST['al_year'];
        $param2 = $_POST['al_index_no'];
        $param3 = $_POST['al_medium'];
        $param4 = $_POST['zscore'];
        $param5 = $_POST['highestenglish'];

        $stmt1->execute();
        
    }


    
    $query1                   = 'select * from studentalexamdetailsmap where StudentKey = ' . $_SESSION["StudentKey"];
    $result                   = $connection->query($query1);
    $row                      = $result->fetch_assoc();
    $_SESSION["ALExamDetails"] = $row;
    
   
    
} else {
 
    
    $query1     = 'UPDATE studentalexamdetailsmap SET Year=?,IndexNo=?,Medium=?,Zscore=?,EnglishQulification=? WHERE StudentKey=' . $_SESSION["StudentKey"];
  
    $stmt1 = $connection->stmt_init();
    if (!$stmt1->prepare($query1)) {
        print "Failed to prepare update statement1\n";
    } else {
        $row = $_SESSION["ALExamDetails"];
        if ($_POST['al_year'] != $row['Year'] or $_POST['al_index_no'] != $row['IndexNo'] or $_POST['al_medium'] != $row['Medium'] or $_POST['zscore'] != $row['Zscore'] or $_POST['highestenglish'] != $row['EnglishQulification']) {
            $stmt1->bind_param("sssss", $param1, $param2, $param3, $param4, $param5);
            
            $param1 = $_POST['al_year'];
            $param2 = $_POST['al_index_no'];
            $param3 = $_POST['al_medium'];
            $param4 = $_POST['zscore'];
            $param5 = $_POST['highestenglish'];
            
            $stmt1->execute();

            echo 'successful';
            
            $query2                   = 'select * from studentalexamdetailsmap where StudentKey = ' . $_SESSION["StudentKey"];
            $result                   = $connection->query($query2);
            $row2                      = $result->fetch_assoc();
            $_SESSION["ALExamDetails"] = $row2;
        }
        
    }
    
    
}

?>