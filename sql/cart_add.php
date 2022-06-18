<?php include '../sql/conn.php'; ?>

<?php

$uid=$_SESSION["user"];
    $aid=$_REQUEST["aid"];
    $sid=$_REQUEST["sid"];
    $title=$_REQUEST["title"];
    $price=$_REQUEST["price"];
    $qty=$_REQUEST["qty"];

$sql=" INSERT INTO cart(aid,sid,uid,title,price,qty) 
    VALUES('$aid','$sid','$uid','$title','$price','$qty') ";

	//Execute command 2
	if ($conn->query($sql) === TRUE) {
	header('Location: ../pages/cart.php '); exit;
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

    ?>