<?php
   session_start();
include('DBconnection.php');


    $connection = db_connect();
    $query = 'delete from studentcoursemap where StudentKey=\''.$_SESSION["StudentKey"].'\'and CourseKey=\''.$_POST["coursekey"].'\'';
    echo $query;

  $connection->query($query);



?>