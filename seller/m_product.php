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
                          <a href="../ads/n_add.php" class="btn btn-info" style="  background-color: white; color: black; margin-left: 5px; " >Add New Product</a>
                        
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container animate__animated animate__fadeIn" >
                <br><h3 align="center" class="container" style="background-color: #febe68; border-radius: 5px; height: 30px; ">Manage Your Products</h3>

  <?php


	$shopid=$_SESSION["seller"];


	$sql=" SELECT * FROM advertise WHERE shopid='$shopid'  ";
	$result=$conn->query($sql);
	while($row=$result->fetch_assoc()) { 
		$aid=$row["aid"];
		$title=$row["title"];
		$price=$row["price"];
		$qty=$row["qty"];
		$cat=$row["cat"];
		$status=$row["status"];
	?>

		<!-- Carousel -->
		<?php  
		$sql1=" SELECT * FROM images WHERE aid='$aid'";
		$result1=$conn->query($sql1);
		while($row1=$result1->fetch_assoc()) { ?>

      <table class="table container table-hover table-responsive">
  <thead style="  background-color: #39ace5;" >
    <tr>
      <th style="  color: white;" scope="col">Title</th>
      <th style="  color: white;" scope="col">Product ID</th>
      <th style="  color: white;" scope="col">Quantity</th>
      <th style="  color: white;" scope="col">Status</th>
      <th style="  color: white;" scope="col">Actions</th>
    </tr>
  </thead>


  <tbody>
    <tr>
      <th scope="row" style="display:block;text-overflow: ellipsis;width: 200px; overflow: hidden; white-space: nowrap; color: black; "><?php echo $title ?></th>
      <td><?php echo $aid ?></td>
      <td><?php echo $qty ?></td>
      <td><?php
    if ($status==1) { ?>
      <span style="  height: 30px; background-color: green;  border-radius: 10px; color: white; padding-right: 10px; padding-left: 10px; padding-bottom: 2px; " >Approved</span> <?php
     } elseif ($status==2) { ?>
     <span style="  height: 30px; background-color: purple; border-radius: 10px; color: white; padding-right: 10px; padding-left: 10px; padding-bottom: 2px;  " >Unlisted</span> <?php
     } else { ?>
         <span style="  height: 30px; background-color: red;border-radius: 10px; color: white; padding-right: 10px; padding-left: 10px; padding-bottom: 2px;  " >Pending</span>       
     <?php }
     ?></td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
         <a style=" background-color: purple;" href="../sql/delete_add.php?aid=<?php echo $aid ?>" type="button" class="btn btn-danger" >Unlist</a>
         <a style=" background-color: orange; " type="button" class="btn btn-warning">Relist</a>
         <a href="../pages/advert.php?aid=<?php echo $aid ?>" type="button" class="btn btn-success">Preview</a>
         </div>
      </td>
    </tr>
  </tbody>
</table>
		<?php } ?>

<!-- ............................................... -->
<style type="text/css">
	/* generic */

a{
	border-radius: 5px;
	color: white;
	border: 3px;
  padding: 5px;
}

body {
  background-color:#eee;
  color:#444;
  font-family:sans-serif;
}

.list ul:nth-child(odd) {
  background-color:#ddd;
}

.list ul:nth-child(even) {
  background-color:#fff;
}

/* big */
@media screen and (min-width:600px) {
  
  .list {
    display:table;
    margin:1em;
  }
 
  .list ul {
    display:table-row;
  }
  
  .list ul:first-child li {
    background-color:#39ace5;
    color:#fff;
  }
  
  .list ul > li {
    display:table-cell;
    padding:.5em 1em;
  }
  
}

/* small */
@media screen and (max-width:599px) {
  
  .list ul {
    border:solid 1px #ccc;
    display:block;
    list-style:none;
    margin:1em;
    padding:.5em 1em;
  }
  
  .list ul:first-child {
    display:none;
  }
  
  .list ul > li {
    display:block;
    padding:.25em 0;
  }
  
  .list ul:nth-child(odd) > li + li {
    border-top:solid 1px #ccc;
  }
  
  .list ul:nth-child(even) > li + li {
    border-top:solid 1px #eee;
  }
  
  .list ul > li:before {
    color:#000;
    content:attr(data-label);
    display:inline-block;
    font-size:75%;
    font-weight:bold;
    text-transform:capitalize;
    vertical-align:top;
    width:50%;
  }
  
  .list p {
    margin:-1em 0 0 50%;
  }
  
}

/* tiny */
@media screen and (max-width:349px) {
    
  .list ul > li:before {
    display:block;
  }
  
  .list p {
    margin:0;
  }
  
}

</style>


	<?php } ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
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

