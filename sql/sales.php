<?php include '../sql/conn.php'; ?>

<?php

	//form data getting
	 $uid=$_REQUEST["uid"];
	 $sid=$_REQUEST["sid"];
	 $aid=$_REQUEST["aid"];
	 $title=$_REQUEST["title"];
	 $fname=$_REQUEST["fname"];
	 $lname=$_REQUEST["lname"];
	 $email=$_REQUEST["email"];
	 $tel=$_REQUEST["tel"];
	 $add1=$_REQUEST["add1"];
	 $add2=$_REQUEST["add2"];
	 $country=$_REQUEST["country"];
	 $state=$_REQUEST["state"];
	 $zip=$_REQUEST["zip"];
	 $total=$_REQUEST["total"];


	$sql=" INSERT INTO sales(sid,aid,uid,title,fname,lname,email,tel,add1,add2,country,state,zip,total,status) 
    VALUES('$sid','$aid','$uid','$title','$fname','$lname','$email','$tel','$add1','$add2','$country','$state','$zip','$total',0) ";

	//Execute command 2
	if ($conn->query($sql) === TRUE) {
	$_SESSION["addid"]=$aid;
	header('Location: ../pages/order_suc.php '); exit;
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

    ?>