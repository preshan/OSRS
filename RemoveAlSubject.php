<?php
   session_start();
include('DBconnection.php');


    $connection = db_connect();
    $query = 'delete from studentalsubjectmap where StudentKey=\''.$_SESSION["StudentKey"].'\'and SubjectKey=\''.$_POST["subject"].'\'';
    echo $query;

  $connection->query($query);



?>