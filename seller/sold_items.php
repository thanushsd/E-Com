<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- fontawesome -->
<script src="https://kit.fontawesome.com/8e10583dfd.js" crossorigin="anonymous"></script>

<!-- Animations Import -->
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />



<!-- Database Connection -->
<?php include '../sql/conn.php'; ?>


        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Seller Dashboard</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
    <body>

<?php 
$shopid=$_SESSION["seller"];
$sql=" SELECT * FROM shop WHERE shopid='$shopid' ";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc())
    {
        $oname=$row["oname"];
        $email=$row["email"];
        $tel=$row["tel"];
        $nic=$row["nic"];
        $sname=$row["sname"];
        $des=$row["des"];
        $cat=$row["cat"];
    }

?>

        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
        <div class="border-end" id="sidebar-wrapper" style=" background-color: #39ace5;">
                <div class="sidebar-heading border-bottom " style=" background-color: #febe68;" >Welcome <b>
                    <?php echo  $oname ?></b></div>
                <div class="list-group list-group-flush border-bottom">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 d_btn " href="dashboard.php"><i class="fas fa-book"></i> Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 d_btn" href="sold_items.php"><i class="fas fa-chart-line"></i> Sales </a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 d_btn" href="m_product.php"><i class="fas fa-box-open"></i> Manage Products</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 d_btn" href="admin.php"><i class="fas fa-store"></i> Manage Account</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 d_btn" href="payments.php"><i class="fas fa-comment-dollar"></i> Payments</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 d_btn" href="../pages/index.php"><i class="fas fa-home"></i> Back To Home </a>

                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav style=" background-color: #39ace5; " class="navbar navbar-expand-lg navbar-light border-bottom">
                    <div class="container-fluid ">
                        <button style=" background-color: #febe68; color: white; " class="btn btn-primary" id="sidebarToggle"><i class="fas fa-sliders-h"></i></button>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container animate__animated animate__fadeIn" >
  <?php
	$sid=$_SESSION["seller"];
	$sql=" SELECT * FROM sales WHERE sid='$sid' ";
	$result=$conn->query($sql);
	while($row=$result->fetch_assoc())
	{
		$aid=$row["aid"];
		$saleid=$row["saleid"];
		$title=$row["title"];
		$add1=$row["add1"];
		$total=$row["total"];
		$tel=$row["tel"];
		$country=$row["country"];
		$state=$row["state"];
		$zip=$row["zip"];
		$status=$row["status"];

	
?>
    <div><br>
    	<div class=" container card w-75" style="  border-radius: 10px;">
  <h5 class="card-header" style="  background-color: #febe68; border-radius : 10px" ><?php echo $title ?></h5>
  <div class="card-body">
    <h5 class="card-title">Total Price : Rs.<?php echo $total ?></h5>
    <div>
    

    <?php if ($status==0) { ?>
    	<div>
    		<span style="  background-color: red; padding: 3px; color: white; border-radius: 5px; " >Pending</span>
    	</div>
    <?php } elseif ($status==1) { ?>
    	<div>
    		<span style="  background-color: yellow; padding: 3px; color: white; border-radius: 5px; " >Ready To Ship</span>
    	</div>
   <?php } elseif ($status==2) { ?>
    	<div>
    		<span style="  background-color: blue; padding: 3px; color: white; border-radius: 5px; " >Shipped</span>
    	</div>
   <?php }elseif ($status==3) { ?>
    	<div>
    		<span style="  background-color: green; padding: 3px; color: white; border-radius: 5px; " >Delivered</span>
    	</div>
   <?php } elseif ($status==4) { ?>
    	<div>
    		<span style="  background-color: red; padding: 3px; color: white; border-radius: 5px; " >Cancelled</span>
    	</div>
   <?php } ?>

    </div><br>
    <a style="  background-color: #febe68;" href="../pages/manage_order.php?saleid=<?php echo $saleid ?>" class="btn btn-warning">Manage Order</a>
  </div>
</div>
    </div>
<?php } ?>
<br>
</div>
    </body>


    <style type="text/css">
        .d_btn{
            font-weight: bold;
            background-color: #39ace5;
            color: white;
        }

        body {
  font-family: "lato", sans-serif;
}

.container {
  max-width: 1000px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 10px;
  padding-right: 10px;
}

h2 {
  font-size: 26px;
  margin: 20px 0;
  text-align: center;
}
h2 small {
  font-size: 0.5em;
}

.responsive-table li {
  border-radius: 3px;
  padding: 25px 30px;
  display: flex;
  justify-content: space-between;
  margin-bottom: 25px;
}
.responsive-table .table-header {
  background-color: #95A5A6;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 0.03em;
}
.responsive-table .table-row {
  background-color: #ffffff;
  box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1);
}
.responsive-table .col-1 {
  flex-basis: 10%;
}
.responsive-table .col-2 {
  flex-basis: 40%;
}
.responsive-table .col-3 {
  flex-basis: 25%;
}
.responsive-table .col-4 {
  flex-basis: 25%;
}
@media all and (max-width: 767px) {
  .responsive-table .table-header {
    display: none;
  }
  .responsive-table li {
    display: block;
  }
  .responsive-table .col {
    flex-basis: 100%;
  }
  .responsive-table .col {
    display: flex;
    padding: 10px 0;
  }
  .responsive-table .col:before {
    color: #6C7A89;
    padding-right: 10px;
    content: attr(data-label);
    flex-basis: 50%;
    text-align: right;
  }
}
    </style>


</html>

















