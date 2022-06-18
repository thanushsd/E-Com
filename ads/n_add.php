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
        <div class="border-end " id="sidebar-wrapper" style=" background-color: #39ace5;">
                <div class="sidebar-heading border-bottom " style=" background-color: #febe68;" >Welcome <b>
                    <?php echo  $oname ?></b></div>
                <div class="list-group list-group-flush border-bottom">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 d_btn " href="../seller/dashboard.php"><i class="fas fa-book"></i> Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 d_btn" href="#!"><i class="fas fa-chart-line"></i> Sales </a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 d_btn" href="#!"><i class="fas fa-box-open"></i> Manage Products</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 d_btn" href="#!"><i class="fas fa-store"></i> Manage Account</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 d_btn" href="#!"><i class="fas fa-comment-dollar"></i> Payments</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 d_btn" href="index.php"><i class="fas fa-home"></i> Back To Home </a>

                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav style=" background-color: #39ace5; " class="navbar navbar-expand-lg navbar-light border-bottom">
                    <div class="container-fluid ">
                        <button style=" background-color: #febe68; color: white; " class="btn btn-primary" id="sidebarToggle"><i class="fas fa-sliders-h"></i></button>

                        <h3 style=" color: white; " class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span>E-COM.LK</span>
                        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <br>
                <div class="card container animate__animated animate__fadeInDown " >
                	<h2 class="container" style="background-color: #febe68; border-radius: 5px; height: 30px; " >Add New Product</h2>
                	<div class="card-body d-flex justify-content-between" >
                <form class="row g-3" action="add_d.php" >

                	<div class="col-12">
    <label for="inputAddress" class="form-label">Title</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Product Title" name="title"  >
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Sub Title</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Product Sub Title" name="stitle" >
  </div>

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label" >Brand</label>
    <input type="text" class="form-control" id="inputEmail4" placeholder="Item Brand" name="brand" >
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Model</label>
    <input type="text" class="form-control" id="inputPassword4" placeholder="Item Model" name="model" >
  </div>
  
  <div class="col-md-4">
    <label for="inputState" class="form-label">Condition</label>
    <select id="inputState" class="form-select" name="cond" >
      <option selected>Select Item Condition</option>
      <option value="Brand New" >Brand New</option>
      <option value="Open Box" >Open Box</option>
      <option value="Used" >Used</option>
      <option value="For Parts" >For Parts</option>
    </select>
  </div>

  <div class="col-md-4">
    <label for="inputState" class="form-label">Category</label>
    <select id="inputState" class="form-select" name="cat" >
      <option selected>Select Item Category</option>
      <option value="Electronic Devices" >Electronic Devices</option>
      <option value="Electronic Accessories">Electronic Accessories</option>
      <option value="TV & Home Appliances" >TV & Home Appliances</option>
      <option value="Health & Beauty" >Health & Beauty</option>
      <option value="Babies & Toys" >Babies & Toys</option>
      <option value="Groceries & Pets" >Groceries & Pets</option>
      <option value="Home & Lifestyle" >Home & Lifestyle</option>
      <option value="Women Fashion" >Women's Fashion</option>
      <option value="Men Fashion" >Men's Fashion</option>
      <option value="Watches & Accessories" >Watches & Accessories</option>
      <option value="Sports & Outdoor" >Sports & Outdoor</option>
      <option value="Automotive & Motorbike" >Automotive & Motorbike</option>
    </select>
  </div>

  <div class="col-md-4">
    <label for="inputState" class="form-label">Quantity</label>
    <input type="text" class="form-control" id="inputPassword4" placeholder="Enter Quantity" name="qty" >
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Description</label>
    <textarea style=" height: 100px; " type="text" class="form-control" id="inputAddress" placeholder="Tell Something About Your Item" name="desc" ></textarea>
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Price</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Product Price" name="price" >
  </div>
<center>
  <div class="col-12">
    <input type="submit" class="btn btn-primary w-50 mt-3" style=" background-color: #39ace5;" value="Next >>" >
  </div>
</center>
</form>
</div>
</div>
<br>
<br>

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

label{
	font-weight: bold;
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

















