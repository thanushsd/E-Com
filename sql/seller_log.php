<?php include 'conn.php'; ?>


<?php
//SELLER LOGIN PROCESS
if(isset($_REQUEST["login_form"]))
{
	$uname=$_REQUEST["uname"];
	$pw=$_REQUEST["pw"];

	$login_check=0;
	
	$sql=" SELECT * FROM shop WHERE uname='$uname' AND pw='$pw' AND status=1 ";
	$result=$conn->query($sql);
	while($row=$result->fetch_assoc())
	{
		$login_check=1;
		$shopid=$row["shopid"];
	}

	if($login_check==1)
	{
		$_SESSION["seller"]=$shopid;
		header('Location: ../seller/admin.php'); exit;
	}
	else
	{
		echo "<script>alert('Invalid login!'); window.location.href='../pages/sellonecom.php' ;</script>";
	}
}


?>