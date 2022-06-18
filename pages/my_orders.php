<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My Orders</title>
	<?php include '../main/nav.php'; ?>
</head>
<body>

	<?php
	$uid=$_SESSION["user"];
	$sql=" SELECT * FROM sales WHERE uid='$uid' ";
	$result=$conn->query($sql);
	while($row=$result->fetch_assoc())
	{
		$aid=$row["aid"];
		$sid=$row["sid"];
		$title=$row["title"];
		$add1=$row["add1"];
		$total=$row["total"];
		$tel=$row["tel"];
		$add1=$row["add1"];
		$country=$row["country"];
		$state=$row["state"];
		$zip=$row["zip"];

	
?>
    <div><br>
    	<div class=" container card w-75" style="  border-radius: 10px;">
  <h5 class="card-header" style="  background-color: #febe68; border-radius : 10px" ><?php echo $title ?></h5>
  <div class="card-body">
    <h5 class="card-title">Total Price : Rs.<?php echo $total ?></h5>
    <p class="card-text">Shipping Between 5-10 Days</p>
    <a style="  background-color: #febe68;" href="advert.php?aid=<?php echo $aid ?>" class="btn btn-warning">View Item</a>
  </div>
</div>
    </div>
<?php } ?>
<br>
	<?php include '../main/footer.php'; ?>

</body>
</html>


















