    <?php include('app_logic.php'); ?>
<!DOCTYPE html>
<?php require_once "connect.php"?>
<html lang = "en">
	<head>
		<title>Hotel PALAZZO</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
	</head>
	<body style = "background-image: url('../images/bc2.png'); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; ">
<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
  <div class="container">
		<div class="navbar-header">
		<a href="./" class="navbar-brand">Hotel PALAZZO</a>
		</div>
</header>
<br><br><br><br><br>
<div class= "mainB">
	<div class = "container">
    <form class="login-form" action="index.php" method="post" style="text-align: center;">
		<p>
			We sent an email to  <b><?php echo $_GET['email'] ?></b> to help you recover your account. 
		</p>
	    <p>Please login into your email account and click on the link we sent to reset your password</p>
	</form>
	</div>
</div>
	<br />
	<br />
	<div style = "text-align:right;height: 40px; background-color: #003300;" class = "navbar navbar-default navbar-fixed-bottom">
	<label style="color:white;  margin: 12px; margin-right: 20px; ">&copy; Copyright: DEFSA </label>
	</div>
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>	
</html>