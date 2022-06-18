<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../main/nav.php'; ?>
        <!-- fontawesome -->

<!-- Database Connection -->
<?php include '../sql/conn.php'; ?>



        <meta charset="utf-8" />
       
        <title>Cart</title>

    </head>
    <body>
<br>
  <div class="container animate__animated animate__fadeIn" >
  <?php
	$uid=$_SESSION["user"];
    $n=1;
	$sql=" SELECT * FROM cart WHERE uid='$uid' ";
	$result=$conn->query($sql);
	while($row=$result->fetch_assoc())
	{
        $aid=$row["aid"];
        $title=$row["title"];
        $price=$row["price"];
        $qty=$row["qty"];
        $sid=$row["sid"]; ?>

        <div class="card" style="  border-radius: 10px; border-color: #febe68; " >
  <div class="card-header" style="  font-weight: bold;" >
   <?php echo $title ?>
  </div>
  <div class="card-body">
    <h5 class="card-title">Rs.<?php echo $price ?></h5>
    <p class="card-text"><?php echo $qty ?> Available</p>
    <a href="advert.php?aid=<?php echo $aid ?>" class="btn btn-warning" style="  background-color: #febe68;" >View Product</a>
  </div>
  </div>
<br>
 <?php   } 
    
    ?>

</div>
</body>
</html>

















