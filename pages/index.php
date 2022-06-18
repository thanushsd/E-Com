<!DOCTYPE html>
<html>
<head>
  <!-- Animations Import -->
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
	<title>HOME | E-COM SITE</title>
	<div>
  <div class="animate__animated animate__fadeInDown">
	<?php include '../main/nav.php'; ?>
  <?php include '../sql/conn.php'; ?>
  </div>
    <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body style=" background-color: #f2f7ff; " >

<!-- Image Carousal -->
<div class="animate__animated animate__bounceInRight" >
<div class="contain" >
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 3"></button>
  </div>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/img3.jpeg" class="d-block w-100" alt="..." style=" object-fit: cover;height: 400px; " >
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p> -->
      </div>
    </div>
    
    <div class="carousel-item">
      <img src="../images/img2.jpeg" class="d-block w-100" alt="..." style=" object-fit: cover; height: 400px;  ">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p> -->
      </div>
    </div>
    
    <div class="carousel-item">
      <img src="../images/img1.jpg" class="d-block w-100" alt="..." style=" object-fit: cover;height: 400px; ">
      <div class="carousel-caption d-none d-md-block">
       <!--  <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p> -->
      </div>
    </div>

    <div class="carousel-item">
      <img src="../images/img4.jpeg" class="d-block w-100" alt="..." style=" object-fit: cover;height: 400px; ">
      <div class="carousel-caption d-none d-md-block">
       <!--  <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p> -->
      </div>
    </div>

    <div class="carousel-item">
      <img src="../images/img5.jpeg" class="d-block w-100" alt="..." style=" object-fit: cover;height: 400px; ">
      <div class="carousel-caption d-none d-md-block">
       <!--  <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p> -->
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>

<div style=" margin: 20px; background-color: #ffffff; border-radius: 10px; " ><br>
    <h4 style=" margin-left: 10px; color: black;">- New Arrivals</h4>
<div class="row " style=" padding: 20px; " >

  <?php  

  $sql=" SELECT * FROM advertise WHERE status=1 LIMIT 1,5; ";
  $result=$conn->query($sql);
  while($row=$result->fetch_assoc()) { 
    $aid=$row["aid"];
    $title=$row["title"];
    $price=$row["price"];
  ?>
 
    <!-- Carousel -->
    <?php  
    $sql1=" SELECT * FROM images WHERE aid='$aid'  ";
    $result1=$conn->query($sql1);
    while($row1=$result1->fetch_assoc()) { ?>

 
  <div class="card col-lg-2 " style=" margin-bottom: 10px; " >
  <img style=" border-radius: 10px; " src="../ads/images/<?php echo $row1["pic1"] ?>  " alt="Denim Jeans" style="width:100%">
  <h6 style="display:block; text-overflow: ellipsis;width: 200px; overflow: hidden; white-space: nowrap; color: black; " ><?php echo $title ?></h6>
  <p class="price">Rs.<?php echo $price ?></p>
  <p> <form action="advert.php" method="Post">
          <input type="hidden" name="aid" value="<?php echo $aid ?>">
          <input type="submit" value=" View" class="btn btn-warning" style=" background-color: #39ace5;"></a>
        </form> </p>
</div>


    
    <?php }} ?>

</div>
</div>

<!-- ELECTRONIC ITEMS -->
<div style=" margin: 20px; background-color: #ffffff; border-radius: 10px; " ><br>
    <h4 style=" margin-left: 10px; color: black;">- Electronic Items</h4>
<div class="row " style=" padding: 20px; " >

  <?php  

  $ed="Electronic Devices";

  $sql=" SELECT * FROM advertise WHERE cat='$ed'&&status=1 LIMIT 1,6; ";
  $result=$conn->query($sql);
  while($row=$result->fetch_assoc()) { 
    $aid=$row["aid"];
    $title=$row["title"];
    $price=$row["price"];
  ?>
 
    <!-- Carousel -->
    <?php  
    $sql1=" SELECT * FROM images WHERE aid='$aid'  ";
    $result1=$conn->query($sql1);
    while($row1=$result1->fetch_assoc()) { ?>

 
  <div class="card col-lg-2 " style=" margin-bottom: 10px; " >
  <img style=" border-radius: 10px; " src="../ads/images/<?php echo $row1["pic1"] ?>  " alt="Denim Jeans" style="width:100%">
  <h6 style="display:block;text-overflow: ellipsis;width: 200px; overflow: hidden; white-space: nowrap; color: black; " ><?php echo $title ?></h6>
  <p class="price">Rs.<?php echo $price ?></p>
  <p> <form action="advert.php" method="Post">
          <input type="hidden" name="aid" value="<?php echo $aid ?>">
          <input type="submit" value=" View" class="btn btn-warning" style=" background-color: #39ace5; "></a>
        </form> </p>
</div>


    
    <?php }} ?>

</div>
</div>

<!-- FASHION -->
<div style=" margin: 20px; background-color: #ffffff; border-radius: 10px; " ><br>
    <h4 style=" margin-left: 10px; color: black;">- Women's Fashion</h4>
<div class="row " style=" padding: 20px; " >

  <?php  

  $wf="Women Fashion";

  $sql=" SELECT * FROM advertise WHERE cat='$wf'&&status=1  ";
  $result=$conn->query($sql);
  while($row=$result->fetch_assoc()) { 
    $aid=$row["aid"];
    $title=$row["title"];
    $price=$row["price"];
  ?>
 
    <!-- Carousel -->
    <?php  
    $sql1=" SELECT * FROM images WHERE aid='$aid'  ";
    $result1=$conn->query($sql1);
    while($row1=$result1->fetch_assoc()) { ?>

 
  <div class="card col-lg-2 " style=" margin-bottom: 10px; " >
  <img style=" border-radius: 10px; " src="../ads/images/<?php echo $row1["pic1"] ?>  " alt="Denim Jeans" style="width:100%">
  <h6 style="display:block;text-overflow: ellipsis;width: 200px; overflow: hidden; white-space: nowrap; color: black; " ><?php echo $title ?></h6>
  <p class="price">Rs.<?php echo $price ?></p>
  <p> <form action="advert.php" method="Post">
          <input type="hidden" name="aid" value="<?php echo $aid ?>">
          <input type="submit" value=" View" class="btn btn-warning"></a>
        </form> </p>
</div>


    
    <?php }} ?>

</div>
</div>


<!-- HOME & GARDEN -->
<div style=" margin: 20px; background-color: #ffffff; border-radius: 10px; " ><br>
    <h4 style=" margin-left: 10px; color: black;">- Home & Garden</h4>
<div class="row " style=" padding: 20px; " >

  <?php  

  $hl="Home & Lifestyle";

  $sql=" SELECT * FROM advertise WHERE cat='$hl' ";
  $result=$conn->query($sql);
  while($row=$result->fetch_assoc()) { 
    $aid=$row["aid"];
    $title=$row["title"];
    $price=$row["price"];
  ?>
 
    <!-- Carousel -->
    <?php  
    $sql1=" SELECT * FROM images WHERE aid='$aid'  ";
    $result1=$conn->query($sql1);
    while($row1=$result1->fetch_assoc()) { ?>

 
  <div class="card col-lg-2 " style=" margin-bottom: 10px; " >
  <img style=" border-radius: 10px; " src="../ads/images/<?php echo $row1["pic1"] ?>  " alt="Denim Jeans" style="width:100%">
  <h6 style="display:block;text-overflow: ellipsis;width: 200px; overflow: hidden; white-space: nowrap; color: black; " ><?php echo $title ?></h6>
  <p class="price">Rs.<?php echo $price ?></p>
  <p> <form action="advert.php" method="Post">
          <input type="hidden" name="aid" value="<?php echo $aid ?>">
          <input type="submit" value=" View" class="btn btn-warning" style=" background-color: #39ace5; color: white;"></a>
        </form> </p>
</div>


    
    <?php }} ?>

</div>
</div>

<!-- .................................. -->

<style type="text/css">

.card {
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

</style>
<?php include '../main/footer.php'; ?>


</body>
</html>



















