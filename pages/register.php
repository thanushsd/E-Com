<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>REGISTER | E-COM</title>
	<?php include '../main/nav.php'; ?><br><br><br>
</head>
<body>


<div  class="container animate__animated animate__fadeInDown" style=" border-radius: 5px; " >
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <form action="../sql/user.php" method="post" >
    <div class="row">
      <h4 style=" font-weight: bold; " >BUILD YOUR PROFILE</h4>
     
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Full Name" style=" border-radius: 5px; " name="name" id="name" required >
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      
      <div class="input-group input-group-icon">
        <input type="email" placeholder="Email Adress"style=" border-radius: 5px; " name="email" id="email" required >
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>

      <div class="input-group input-group-icon">
        <input type="text" placeholder="Telephone Number"style=" border-radius: 5px; " name="tel" id="tel" required >
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
    </div>
      
      <div class="input-group input-group-icon">
        <input type="password" placeholder="Password"style=" border-radius: 5px; " name="pw" id="pw" required >
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>

      <div class="row">
      <h6>TERMS AND CONDITIONS</h6>
      <div class="input-group">
        <label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
      </div>

    </div>

    <input style="background-color: #febe68; border-radius: 5px;" type="submit" 
    name="register_form" value="Register"  >
  </form>
</div>

  <?php include '../main/footer.php'; ?>

</body>
</html>















