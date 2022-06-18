<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My Orders</title>
	<?php include '../main/nav.php'; ?>
</head>
<body>

	<?php
	$saleid=$_REQUEST["saleid"];
	$sql=" SELECT * FROM sales WHERE saleid='$saleid' ";
	$result=$conn->query($sql);
	while($row=$result->fetch_assoc())
	{
		$aid=$row["aid"];
		$title=$row["title"];
		$add1=$row["add1"];
		$total=$row["total"];
		$tel=$row["tel"];
		$country=$row["country"];
		$state=$row["state"];
		$zip=$row["zip"];
		$status=$row["status"];
		$fname=$row["fname"];
		$lname=$row["lname"];

	
?>
    <div><br>
    	<div class=" container card w-75" style="  border-radius: 10px;">
  <h5 class="card-header" style="  background-color: #febe68; border-radius : 10px" ><?php echo $title ?></h5>
  <div class="card-body">
    <h5 class="card-title">Total Price : Rs.<?php echo $total ?></h5>
    <div>

    	<p class="card-text"><span style="  font-weight: bold;" >Reciever :</span> <br>
    	<?php echo $fname ?>
    	<?php echo $lname ?><br>
    	
    </p>

    <p class="card-text"><span style="  font-weight: bold;" >Shipping Adress :</span> <br>
    	<?php echo $add1 ?><br>
    	<?php echo $state ?>,<br>
    	<?php echo $zip ?>,<br>
    	<?php echo $country ?>.
    </p>

    <p class="card-text"><span style="  font-weight: bold;" >Telephone :</span> <br>
    	<?php echo $tel ?><br>
    	
    </p>

    <?php if ($status==0) { ?>
    	<div>
    		<span style="  background-color: red; padding: 3px; color: white; border-radius: 10px; " >Pending</span>
    	</div>
    <?php } ?>

    </div><br>
    <form action="../sql/o_status.php" >
    	<input type="hidden" name="saleid" value="<?php echo $saleid ?>" >
    <input value="Ready To Ship" name="ready" type="submit" href="../pages/manage_order.php?saleid=<?php echo $saleid ?>" class="btn btn-warning" >
    
    <input value="Shipped" name="ship" type="submit" href="../pages/manage_order.php?saleid=<?php echo $saleid ?>" class="btn btn-info">
    
    <input value="Delivered" name="deliver" type="submit"  href="../pages/manage_order.php?saleid=<?php echo $saleid ?>" class="btn btn-success">
    
    <input value="Cancel Order" name="cancel" type="submit"  href="../pages/manage_order.php?saleid=<?php echo $saleid ?>" class="btn btn-danger">
    </form>
  </div>
</div>
    </div>
<?php } ?>
<br>
	<?php include '../main/footer.php'; ?>

</body>
</html>