<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Summary</title>
	<?php include '../main/nav.php'; ?>
	<?php include '../sql/conn.php'; ?>
</head>
<body>
	<?php 
	if(!isset($_SESSION["user"])) 
	{
		echo "<script>alert('You are not logged in!'); window.location.href='login.php' ;</script>";
	}
?>

	<?php

	 $uid=$_SESSION["user"]; 

	 $fname=$_REQUEST["fname"]; 
	$lname=$_REQUEST["lname"]; 
	 $email=$_REQUEST["email"]; 
	 $add1=$_REQUEST["add1"]; 
	 $add2=$_REQUEST["add2"]; 
	 $country=$_REQUEST["country"]; 
	 $state=$_REQUEST["state"]; 
	 $zip=$_REQUEST["zip"]; 
	 $pay=$_REQUEST["pay"]; 
	 $total=$_REQUEST["total"]; 
	 $title=$_REQUEST["title"]; 
	 $price=$_REQUEST["price"]; 
   $aid=$_REQUEST["aid"]; 

	?>

  <?php $sql=" SELECT * FROM advertise WHERE aid='$aid'";
  $result=$conn->query($sql);
  while($row=$result->fetch_assoc()) { 
    $sid=$row["shopid"];
    $title=$row["title"];
   }
    
?>

	<div class="container">
	<br>
	<div class="row justify-content-center">
    <div class="col-6">
     
     <div class="container card" style=" border-radius: 10px; " >

	<h3 style="  background-color: #febe68; border-radius: 10px; padding: 5px; " >Order Summary</h3>
	<span class="card w-100"  >
		<div style=" " >
	
		<ul class="list-group ">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Product :</h6>
            <small class="text-muted"><?php echo $title ?></small>
          </div>
          <span class="text-muted">Rs.<?php echo $price ?></span>
        </li>
  
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Shiiping Cost :</h6>
          </div>
          <span class="text-muted">Rs.250</span>
        </li>
        
        <li class="list-group-item d-flex justify-content-between">
          <span>Total :</span>
          <strong>Rs.<?php echo $total ?></strong>
        </li>
      </ul>

	    </div>
	</span><br>

    </div>

    </div>

    <?php $sql=" SELECT * FROM user WHERE uid='$uid'";
  $result=$conn->query($sql);
  while($row=$result->fetch_assoc()) { 
    $name=$row["name"];
    $tel=$row["tel"]; }
    
?>

    <div class="col-6 card " style="  border-radius: 10px;" >
      <div>
      	<h4>Shipping & Billing</h4>
      	<p>
      		<span style="  font-weight: bold;" ><?php echo $fname ?> <?php echo $lname ?></span><br>
      		<?php echo $add1 ?><br>
      		<?php echo $tel ?><br>
      		<?php echo $email ?><br><br>
          <i class="far fa-check-circle"></i>
          Shipping Adress Is Same To Billing Adress
      	</p>
      </div>
    </div>
  </div>
  <br>


	<?php
	if ($pay=="card") { ?>
		<div class="container card" align="" style="  border-radius: 10px;" >
    <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <h3 class="text-center">Payment Details</h3>
                        <img class="img-responsive cc-img" src="http://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png">
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>CARD NUMBER</label>
                                    <div class="input-group">
                                        <input type="tel" class="form-control" placeholder="Valid Card Number" />
                                        <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input type="tel" class="form-control" placeholder="MM / YY" />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label>CV CODE</label>
                                    <input type="tel" class="form-control" placeholder="CVC" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>CARD OWNER</label>
                                    <input type="text" class="form-control" placeholder="Card Owner Names" />
                                </div>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<style>
    .cc-img {
        margin: 0 auto;
    }
</style>
	<?php  } else{ ?>
    <div class="card" style="  border-color: lightgreen;">
      <h4 align="center" >Pay When The Item Delivered To Your Doorstep</h4>
    </div>

 <?php }
	?>



  <form action="../sql/sales.php">
    <input type="hidden" name="sid" value="<?php echo $sid ?>">
    <input type="hidden" name="aid" value="<?php echo $aid ?>">
    <input type="hidden" name="uid" value="<?php echo $uid ?>">
    <input type="hidden" name="fname" value="<?php echo $fname ?>">
    <input type="hidden" name="lname" value="<?php echo $lname ?>">
    <input type="hidden" name="email" value="<?php echo $email ?>">
    <input type="hidden" name="tel" value="<?php echo $tel ?>"> 
    <input type="hidden" name="add1" value="<?php echo $add1 ?>">
    <input type="hidden" name="add2" value="<?php echo $add2 ?>">
    <input type="hidden" name="country" value="<?php echo $country ?>">
    <input type="hidden" name="state" value="<?php echo $state ?>">
    <input type="hidden" name="zip" value="<?php echo $zip ?>">
    <input type="hidden" name="total" value="<?php echo $total ?>">
    <input type="hidden" name="title" value="<?php echo $title ?>">

  <center>
  <br>
  <input type="submit" href="" class="btn btn-warning" style="  background-color: #febe68; width: 50%; " value="Confirm & Pay" >
  </center>
  </form>
</div>

<?php include '../main/footer.php'; ?>

</body>
</html>













