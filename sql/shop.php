<?php include 'conn.php'; ?>
<?php

	//form data getting
	 $oname=$_REQUEST["oname"];
	 $email=$_REQUEST["email"];
	 $nic=$_REQUEST["nic"];
	 $tel=$_REQUEST["tel"];
	 $sname=$_REQUEST["sname"];
	 $des=$_REQUEST["des"];
	 $uname=$_REQUEST["uname"];
	 $pw=$_REQUEST["pw"];
	 $cat=$_REQUEST["cat"];
	 $status=0;

	$sql=" INSERT INTO shop(oname,email,nic,tel,sname,des,uname,pw,cat,status) 
    VALUES('$oname','$email','$nic','$tel','$sname','$des','$uname','$pw','$cat','$status') ";

	//Execute command 2
	if ($conn->query($sql) === TRUE) {
		header('Location: ../pages/sellonecom.php'); exit;
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

    ?>




















