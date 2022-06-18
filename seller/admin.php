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
  <div class="container-fluid"  >
  <div class="row">

  <div class="container animate__animated animate__fadeIn" align="center" style=" margin-top: 20px; " >
  <div class="card mb-3 w-75" >
  <img style=" object-fit: cover; height: 300px; " class="card-img-top" src="../images/cover.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" style=" font-weight: bolder; " ><i class="fas fa-store"></i> <?php echo  $sname ?></h5>
    <p class="card-text card ">
        <div align="left" >        
        <form>
  <fieldset disabled>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Email</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo  $email ?>">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Telelphone</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo  $tel ?>">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Description</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo  $des ?>">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">NIC Number</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo  $nic ?>">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Category</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo  $cat ?>">
    </div>
    
    </p>
  </div>
</div>
</div>
                </div>
            </div>
        </div>
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

















