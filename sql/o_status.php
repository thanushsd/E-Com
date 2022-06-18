<?php include '../main/nav.php'; ?>


<?php

//Ready To Ship
if(isset($_REQUEST["ready"]))
{
	echo $saleid=$_REQUEST["saleid"];
	$status=1;
	$sql=" UPDATE sales SET status='$status' WHERE saleid='$saleid' ";
if ($conn->query($sql) === TRUE) {
	echo "success";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}}

?>

<?php 
//Ready To Ship
if(isset($_REQUEST["ship"]))
{
	echo $saleid=$_REQUEST["saleid"];
	$status=2;
	$sql=" UPDATE sales SET status='$status' WHERE saleid='$saleid' ";
if ($conn->query($sql) === TRUE) {
	echo "success";
	header('Location: ../pages/manage_order.php'); exit;
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}}

?>

<?php 
//Ready To Ship
if(isset($_REQUEST["deliver"]))
{
	echo $saleid=$_REQUEST["saleid"];
	$status=3;
	$sql=" UPDATE sales SET status='$status' WHERE saleid='$saleid' ";
if ($conn->query($sql) === TRUE) {
	echo "success";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}}

?>

<?php 
//Ready To Ship
if(isset($_REQUEST["cancel"]))
{
	echo $saleid=$_REQUEST["saleid"];
	$status=4;
	$sql=" UPDATE sales SET status='$status' WHERE saleid='$saleid' ";
if ($conn->query($sql) === TRUE) {
	echo "success";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}}

?>





