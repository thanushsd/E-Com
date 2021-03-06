<!DOCTYPE html>
<html>
	<!doctype html>
<html lang="en">
  <head>
  	<meta charset="utf-8">
	<title></title>
	<?php include '../main/nav.php'; ?>
	<?php include '../sql/conn.php'; ?>
    <br>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Checkout example · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">

  	<?php 
	if(!isset($_SESSION["user"])) 
	{
		echo "<script>alert('You are not logged in!'); window.location.href='login.php' ;</script>";
	}
?>

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
    $total=$price+250;
 } ?>

    <div class="container">

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span style="  font-weight: bolder;" class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
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

      <form class="card p-2" action="buy_con.php" >
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary" style="  background-color:#febe68;" >Redeem</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing address</h4>
      <form class="needs-validation" novalidate action="buy_con.php" >
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" name="fname" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input name="lname" type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input name="add1" type="text" class="form-control" id="address" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input name="add2" type="text" class="form-control" id="address2" placeholder="Apartment or suite">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country</label>
            <select name="country" class="custom-select d-block w-100 form-control" id="country" required>
              <option value="">Choose...</option>
              <option value="Sri Lanka" >Sri Lanka</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <select name="state" class="custom-select d-block w-100 form-control " id="state" required>
              <option value="">Choose...</option>
              <option value="Colombo 1" >Colombo 1</option>
              <option value="Colombo 2" >Colombo 2</option>
              <option value="Colombo 3" >Colombo 3</option>
              <option value="Colombo 4" >Colombo 4</option>
              <option value="Colombo 5" >Colombo 5</option>
              <option value="Colombo 6" >Colombo 6</option>
              <option value="Colombo 7" >Colombo 7</option>
              <option value="Colombo 8" >Colombo 8</option>
              <option value="Colombo 10" >Colombo 10</option>
              <option value="Colombo 11" >Colombo 11</option>
              <option value="Colombo 12" >Colombo 12</option>
              <option value="Kandy" >Kandy</option>
              <option value="Matara" >Matara</option>
              <option value="Kurunagala" >Kurunagala</option>
              <option value="Ampara" >Ampara</option>
              <option value="Walipanna" >Walipanna</option>
              <option value="Negambo" >Negambo</option>
              <option value="Gampaha" >Gampaha</option>
              <option value="Trincomalee" >Trincomalee</option>
              <option value="Akuressa" >Akuressa</option>
              <option value="Nuwara Eliya" >Nuwara Eliya</option>
              <option value="Galle" >Galle</option>
              <option value="Hambanthota" >Hambanthota</option>
              <option value="Mannar" >Mannar</option>
              
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input name="zip" type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Save this information for next time</label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="pay" type="radio" class="custom-control-input" value="card" checked required>
            <label class="custom-control-label" for="credit"  >Credit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="pay" type="radio" class="custom-control-input" value="cash" required>
            <label class="custom-control-label" for="debit">Cash On Delivery</label>
          </div>
        </div>
        <input type="hidden" name="total" value="<?php echo $total ?>" >
        <input type="hidden" name="title" value="<?php echo $title ?>" >
        <input type="hidden" name="price" value="<?php echo $price ?>" >
        <input type="hidden" name="aid" value="<?php echo $aid ?>" >
        <input class="btn btn-warning btn-lg btn-block" type="submit" style="  background-color: #febe68; color: black; " value="Continue to checkout" >

         </div> 
      </form>
    </div>
  </div>
  <br>
  <br>
</form>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://getbootstrap.com/docs/4.3/examples/checkout/form-validation.js"></script></body>
</html>

<style type="text/css">
	
</style>


<?php include '../main/footer.php'; ?>
</body>
</html>