<?php include '../sql/conn.php'; ?>

<?php

    $shopid=$_SESSION["seller"];
    $aid=$shopid."_".rand(1,100000);

	//form data getting
	 $title=$_REQUEST["title"];
	 $stitle=$_REQUEST["stitle"];
	 echo $brand=$_REQUEST["brand"];
	 $model=$_REQUEST["model"];
	 $cond=$_REQUEST["cond"];
	 $cat=$_REQUEST["cat"];
	 $qty=$_REQUEST["qty"];
	 $desc=$_REQUEST["desc"];
	 $price=$_REQUEST["price"];

	$sql=" INSERT INTO advertise(aid,shopid,title,stitle,cat,cond,qty,brand,model,description,price,status) 
    VALUES('$aid','$shopid','$title','$stitle','$cat','$cond','$qty','$brand','$model','$desc','$price',0) ";

	//Execute command 2
	if ($conn->query($sql) === TRUE) {
	$_SESSION["addid"]=$aid;
	header('Location: images.php '); exit;
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

    ?>
