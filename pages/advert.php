<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Advert</title>
      <?php include '../main/nav.php'; ?>

</head>
<body>
  <?php $aid=$_REQUEST["aid"]; ?>

  <?php  

  $sql=" SELECT * FROM advertise WHERE aid='$aid'";
  $result=$conn->query($sql);
  while($row=$result->fetch_assoc()) { 
    $aid=$row["aid"];
    $title=$row["title"];
    $price=$row["price"];
    $brand=$row["brand"];
    $desc=$row["description"];
    $qty=$row["qty"];
    $cat=$row["cat"];
    $sid=$row["shopid"];
  ?>
 
    <!-- Carousel -->
    <?php  
    $sql1=" SELECT * FROM images WHERE aid='$aid'  ";
    $result1=$conn->query($sql1);
    while($row1=$result1->fetch_assoc()) { ?>

 
  <!-- <div class="card col-lg-2 " style=" margin-bottom: 10px; " >
  <img style=" border-radius: 10px; " src="../ads/images/<?php echo $row1["pic1"] ?>  " alt="Denim Jeans" style="width:100%">
  <h6 style="display:block;text-overflow: ellipsis;width: 200px; overflow: hidden; white-space: nowrap; color: black; " ><?php echo $title ?></h6>
  <p class="price">Rs.<?php echo $price ?></p>
  <p> <form action="advert.php" method="Post">
          <input type="hidden" name="aid" value="<?php echo $aid ?>">
          <input type="submit" value=" View" class="btn btn-warning"></a>
        </form> </p>
</div> -->


<!-- </div>
</div>
 -->
 <br>
<div class="container" >
<div class="row g-0 ">
  <div class="col-sm-6 col-md-4 card"style="  border-color: #febe68; border-radius: 10px; " >
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="  border-radius: 10px; " src="../ads/images/<?php echo $row1["pic1"] ?> " class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img style="  border-radius: 10px;" src="../ads/images/<?php echo $row1["pic2"] ?> " class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img style="  border-radius: 10px;" src="../ads/images/<?php echo $row1["pic3"] ?> " class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img style="  border-radius: 10px;" src="../ads/images/<?php echo $row1["pic4"] ?> " class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img style="  border-radius: 10px;" src="../ads/images/<?php echo $row1["pic5"] ?> " class="d-block w-100" >
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </div>

  <div class="col-6 col-md-8 p-4 animate__animated animate__fadeInRight ">
    <h3><?php echo $title ?></h3>
    <p>Brand : <?php echo $brand  ?></p>
    <span style="  background-color: #febe68; padding: 1px; border-radius: 10px; " ><?php echo $qty  ?> Available</span>
    <br>
    <h2>Rs.<?php echo $price ?></h2>
    <br>
    <a style=" display: inline-block; background-color: #39ace5; color: white; " href="buy_now.php?aid=<?php echo $aid ?>" class="btn btn-info">Buy Now</a>

    <a style=" display: inline-block; background-color: #febe68; " class="btn btn-warning"
    href="../sql/cart_add.php?
    sid=<?php echo $sid?>
    &aid=<?php echo $aid ?>
    &title=<?php echo $title ?>
    &price=<?php echo $price ?>
    &qty=<?php echo $qty ?>
    " 
    >Add To Cart</a>
  </div>
</div>
<br>
<div class="container card" >
  <p style=" font-weight: bold;">
    Description :
  </p>
  <p>
    <?php echo $desc ?>
  </p>
</div>

<?php }} ?>

  </div>
</div>



<div class="container" >
<div style=" margin: 20px; background-color: #ffffff; border-radius: 10px; " ><br>
    <h4 style=" margin-left: 10px; color: black;">- Related Items</h4>
<div class="row " style=" padding: 20px; " >

  <?php  


  $sql=" SELECT * FROM advertise WHERE cat='$cat'&&status=1 LIMIT 1,5; ";
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

 
  <div class="card col-lg-3 " style=" margin-bottom: 10px; " >
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
</div>

<style type="text/css">


</style>
<?php include '../main/footer.php'; ?>


</body>
</html>



























