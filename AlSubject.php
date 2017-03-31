<?php
include('DBconnection.php');

function getAlSubjects($searchtext){
    $connection = db_connect();
    $statement = $connection->prepare('select * from alsubjectmaster where (ifnull("?","")="" or SubjectID like "?%" or SubjectID like "% ?%" ) ORDER BY SubjectID');

    $statement->bind_param(1,$searchtext);
    $statement->bind_param(2,$searchtext);
    $statement->bind_param(3,$searchtext);
    
    $result=$statement.execute();
    $connection.close();
    $statement.close();
    return $result;
}

?>