<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>REGISTER | E-COM</title>
	<?php include '../main/nav.php'; ?><br><br><br>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>


<div class="container animate__animated animate__fadeInDown" style=" border-radius: 5px; " >
  <form action="../sql/user.php" >
    <div class="row">
      <h4 style=" font-weight: bold; " >LOGIN TO YOUR ACCOUNT</h4>
      
      <div class="input-group input-group-icon">
        <input type="email" placeholder="Email Adress"style=" border-radius: 5px; " name="email" >
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      
      <div class="input-group input-group-icon">
        <input type="password" placeholder="Password"style=" border-radius: 5px; " name="pw" >
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
  
    </div>
    <input style="background-color: #febe68; border-radius: 5px; " type="submit" value="Log In" name="login_form"  ><br><br>

    <center>
    <a href="register.php">Create An Account</a>
    </center>

  </form>
</div>	

  <?php include '../main/footer.php'; ?>

</body>


</html>