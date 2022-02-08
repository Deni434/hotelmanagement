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
	
		<div class = "col-md-4"></div>
		<div class = "col-md-4">
		
			<div class = "panel panel-danger">
				<div class = "panel-heading">
					
					<h4>Administrator</h4>
				</div>
				<div class = "panel-body">
                <form class="login-form" action="new_pass.php" method="post">
                    <h2 class="form-title">New password</h2>
                    <!-- form validation messages -->
                    <?php include('messages.php'); ?>
                    <div class="form-group">
                        <label>New password</label>
                        <input type="password" name="new_pass" class = "form-control">
                    </div>
                    <div class="form-group">
                        <label>Confirm new password</label>
                        <input type="password" name="new_pass_c" class = "form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="new_password" class = "form-control btn btn-primary"><i class = "glyphicon glyphicon-log-in"> Submit</i></button>
                    </div>
                </form>
				</div>
			</div>
		</div>
		<div class = "col-md-4"></div>
	</div>	
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