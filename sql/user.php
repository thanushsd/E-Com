<?php include 'conn.php'; ?>
<?php

//REGISTER PROCESS
if(isset($_REQUEST["register_form"]))
{
	//form data getting
	$name=$_REQUEST["name"];
	$email=$_REQUEST["email"];
	$tel=$_REQUEST["tel"];
	$pw=$_REQUEST["pw"];
	$date=date("Y-m-d H:i:s");

	//INSERT QUERY
	$sql=" INSERT INTO user(name,email,pw,tel,date) 
	VALUES('$name','$email','$pw','$tel','$date') ";

	//Execute command 2
	if ($conn->query($sql) === TRUE) {
	  echo "<script>alert('Your Account Successfully Created!'); window.location.href='../login.php' ;</script>";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}


//LOGIN PROCESS
if(isset($_REQUEST["login_form"]))
{
	$email=$_REQUEST["email"];
	$pw=$_REQUEST["pw"];

	$login_check=0;
	
	$sql=" SELECT * FROM user WHERE email='$email' AND pw='$pw' ";
	$result=$conn->query($sql);
	while($row=$result->fetch_assoc())
	{
		$login_check=1;
		$uid=$row["uid"];
	}

	if($login_check==1)
	{
		$_SESSION["user"]=$uid;
		header('Location: ../pages/index.php'); exit;
	}
	else
	{
		echo "<script>alert('Invalid login!'); window.location.href='../pages/login.php' ;</script>";
	}
}


?>