<?php
session_start();

if (isset($_POST['getApplicationID'])) {
        echo getApplicationID();
}

if (isset($_POST['getStudentKey'])) {
        echo getStudentKey();
}

function getApplicationID(){

  if(isset($_SESSION["ApplicationID"])){
   echo $_SESSION["ApplicationID"];
  }
  else{
   echo 'Error: Not set';
  }
}

function getStudentKey(){

  if(isset($_SESSION["StudentKey"])){
   echo $_SESSION["StudentKey"];
  }
  else{
   echo 'Error: Not set';
  }
}
?>