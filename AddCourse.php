<?php
   session_start();
include('DBconnection.php');


    $connection = db_connect();

    $query = 'insert into studentcoursemap (StudentKey,CourseKey,Priority) values (?,?,?)';

    $stmt = $connection->stmt_init();
    if (!$stmt->prepare($query)) {
        print "Failed to prepare statement\n";
    } else {
        $stmt->bind_param("sss", $param1, $param2, $param3);
        $param1 = $_SESSION['StudentKey'];
        $param2 = $_POST['coursekey'];
        $param3 = $_POST['priority'];
        
        $stmt->execute();
        echo 'successful';
        
    }



?>