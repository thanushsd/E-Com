<?php

include 'conn.php';
$aid=$_REQUEST["aid"];
$status=2;

$sql = "UPDATE advertise SET status='$status' WHERE aid='$aid' ";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
?>