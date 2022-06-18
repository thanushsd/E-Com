<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <?php include 'head.php'; ?>

</head>

<body class="p-0" >
<!-- ************************************************************************** -->
<!-- Large Screens View  -->
<div class="d-none d-lg-block" >
<nav class="navbar navbar-expand-lg navbar-light"style=" background-color: #39ace5
; ">
  <div class="container-fluid">
    <a class="navbar-brand" href="../pages/index.php" style=" font-weight: bold; color: white; font-size: 25px; " >UrBrand</a>
    <div>
      <form class="d-flex">
      <input style=" width: 220px; " class="form-control me-2 " type="search" placeholder="Search..." aria-label="Search">
      <a href="">
        <i class="fas fa-search" style="color: #febe68; margin-top: 10px;  " ></i>
      </a>
    </form>

    </div>
      </ul>
      <div style="  background-color: #febe68; border-radius: 10px; padding: 10px;" >
      <?php if(isset($_SESSION["user"])) { ?>
                             <a href="../pages/cart.php" ><i  style="color: black;" class="fas fa-shopping-cart"></i></a>
                            <?php } ?>  </div></div>
  </div>
</div>
</nav>
</div>
  </div>
  </div>
</nav>

<div class="d-none d-lg-block" >
<div style=" background-color: #2596ce; " >
  <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link secnav" aria-current="page" href="#">SAVE MORE IN APP</a>
  </li>
  
  <?php 
  if(!isset($_SESSION["user"])) 
  { ?>
    <li class="nav-item">
    <a style=" color: white;  " class="nav-link secnav" href="../pages/sellonecom.php">SELL ON UrBrand</a>
  </li>
<?php } ?>

  <li class="nav-item">
    <a class="nav-link secnav" href="#">CUSTOMER CARE</a>
  </li>

  <li class="nav-item">
    <a class="nav-link secnav" href="../pages/my_orders.php">MY ORDERS</a>
  </li>

  <li class="nav-item">
    <?php if(isset($_SESSION["user"])) { ?>
                            <a class="nav-link secnav"href="?logout=1">LOG OUT</a>
                            <?php } else { ?>
                            <a class="nav-link secnav"href="../pages/login.php">LOG IN</a>
                            <?php } ?>
  </li>

  <li class="nav-item">
    <?php if(isset($_SESSION["user"])) { ?>
                            <a class="nav-link secnav" href="../pages/account.php">MY ACCOUNT</a>
                            <?php } else { ?>
                            <a class="nav-link secnav" href="../pages/register.php">SIGN UP</a>
                            <?php } ?>
  </li>

  
  </ul>
</div>
</div>
<!-- Large Screens End -->

<!-- ************************************************************************* -->
<!-- Mobile View -->

<div class="d-lg-none" >
<nav class="navbar navbar-expand-lg navbar-light"style=" background-color: #39ace5
; ">
  <div class="container-fluid">
    <div>
      <form class="d-flex">
      <input style=" width: 220px; " class="form-control me-2 " type="search" placeholder="Search..." aria-label="Search">
      <a href="">
        <i class="fas fa-search" style="color: #febe68; margin-top: 10px;  " ></i>
      </a>
    </form>

    </div>
      </ul>
     <div style="  background-color: #febe68; border-radius: 10px; padding: 10px;" >
      <?php if(isset($_SESSION["user"])) { ?>
                             <a href="../pages/cart.php" ><i  style="color: black;" class="fas fa-shopping-cart"></i></a>
                            <?php } ?>  </div>
</div>
</nav>
</div>

<div class="d-lg-none" >
<nav class="navbar navbar-expand-lg navbar-light " style=" background-color: #2596ce; " >
  <div class="container-fluid"style=" color: white; ">
    <a style=" color: white; font-weight: bold; " class="navbar-brand" href="#">UrBrand</a>
    <button style=" color: white; "class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span style=" color: white; " class="navbar-toggler-icon"></span>
    </button>
    <div style=" color: white; "  class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
    <a style=" color: white; " class="nav-link secnav" aria-current="page" href="#">SAVE MORE IN APP</a>
  </li>

  <?php 
  if(!isset($_SESSION["user"])) 
  { ?>
    <li class="nav-item">
    <a style=" color: white; " class="nav-link secnav" href="../pages/sellonecom.php">SELL ON UrBrand</a>
  </li>
<?php } ?>
  
  <li class="nav-item">
    <a style=" color: white; " class="nav-link secnav" href="../pages/my_orders.php">MY ORDERS</a>
  </li>

  <li class="nav-item">
    <a style=" color: white; "class="nav-link secnav" href="#">TRACK MY ORDER</a>
  </li>

  <li style=" margin-bottom: 5px; " class="nav-item">
    <?php if(isset($_SESSION["user"])) { ?>
                            <a style=" color: black; background-color: #febe68; border-radius: 5px; " class="nav-link secnav"href="?logout=1">LOG OUT</a>
                            <?php } else { ?>
                            <a style=" color: black; border-radius: 5px; background-color: #febe68; " class="nav-link secnav"href="login.php">LOG IN</a>
                            <?php } ?>
  </li>
  <li class="nav-item">
    <?php if(isset($_SESSION["user"])) { ?>
                            <a style=" color: black; border-radius: 5px; background-color: #febe68; " class="nav-link secnav" href="account.php">MY ACCOUNT</a>
                            <?php } else { ?>
                            <a style=" color: black; border-radius: 5px; background-color: #febe68; " class="nav-link secnav" href="register.php">SIGN UP</a>
                            <?php } ?>
  </li>
      </ul>
    </div>
  </div>
</nav>
</div>
<!-- Mobile View End -->

<!-- logout -->
<?php


if(isset($_REQUEST["logout"]))
{
  session_destroy();
  echo "<script>alert('You are loged out!'); window.location.href='../pages/index.php' ;</script>";
}

?>

</body>
</html>

<style type="text/css">
  
  .secnav{
    color: white;

  }

</style>







