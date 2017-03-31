<?php

session_start();

include('DBconnection.php');

$connection = db_connect();
$query1     = 'UPDATE studentmaster SET AddressL1=?, AddressL2=?, AddressL3=?, Email=?, ContactNo=? WHERE StudentKey=' . $_SESSION["StudentKey"];

$stmt1 = $connection->stmt_init();
if (!$stmt1->prepare($query1)) {
    print "Failed to prepare update statement1\n";
} else {
    $row = $_SESSION["BasicDetails"];
    if ($_POST['address_line1'] != $row['AddressL1'] or $_POST['address_line2'] != $row['AddressL2'] or $_POST['address_line3'] != $row['AddressL3'] or $_POST['email'] != $row['Email'] or $_POST['contact_no'] != $row['ContactNo']) {
        $stmt1->bind_param("sssss", $param1, $param2, $param3, $param4, $param5);
        
        $param1 = $_POST['address_line1'];
        $param2 = $_POST['address_line2'];
        $param3 = $_POST['address_line3'];
        $param4 = $_POST['email'];
        $param5 = $_POST['contact_no'];
        
        $stmt1->execute();
        
        $query1                   = 'select * from studentmaster where StudentKey = ' . $_SESSION["StudentKey"];
        $result                   = $connection->query($query1);
        $row                      = $result->fetch_assoc();
        $_SESSION["BasicDetails"] = $row;
    }
  }
  ?>
