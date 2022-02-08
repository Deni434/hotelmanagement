<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Hotel Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
	<body style = "background-image: url('images/bcg.png'); 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
">
<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
  <div class="container">
		<div class="navbar-header"> 
		<a href="./" class="navbar-brand">Hotel PALAZO</a>
		</div>
		<nav class="collapse-navbar" role="navigation">
		<ul class="nav navbar-nav navbar-right">
		<li><a href = "index.html">Home</a></li> 
		<li><a href = "aboutus.html">About Us</a></li> 
		<li><a href = "gallery.html">Gallery</a></li>
		<li><a href = "dineandlounge2.html">Dine and Lounge</a></li> 			
		<li class="active"><a href = "reservation.php">Reservation</a></li> 
		<li><a href = "rulesandregulation2.html">Rules and Regulation</a></li>
        <li class="active">
          <a href="contactus2.html">Contact</a>
        </li>
			<li style="margin-right: -80px; margin-left: 45px;border:0.5px  solid black;border-radius: 8px; font-size: 13px; font-weight: 600;"> <a href="admin/index.php"><img src="images/user-solid.png" />  Admin</a></li>
      </ul>
		</nav>
	</div>
	</header>

	<div style = "margin-left:0;" class = "container">
		
			<div class = "panel-body">
			<br>
				<br>
				<strong><h3 style = "color:#003300;">MAKE A RESERVATION</h3></strong>
				<hr >
				<br />
				<?php 
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysql_error());
					$fetch = $query->fetch_array();
				?>
				<div >
					<div style = "float:left; height:300px; width:40%;">
						<img src = "photo/<?php echo $fetch['photo']?>" height = "300px" width = "400px" style="border: 1px solid #ddd; border-radius: 4px; padding: 5px; border-radius: 8px;background-color:white;">
					</div>
					<div style = "float:left; margin-left:10px;color:#003300;background-color:white; padding:7px; border-radius: 5px; 	border: 1px solid rgb(190, 190, 190);">
						<h3><?php echo $fetch['room_type']?></h3>
						<h3 style = "color:#e49852;"><?php echo $fetch['price']." Euro(€)"?></h3>
					</div>
			
				<div class = "well col-md-4" style = "float:right; width:35%" >
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>Firstname</label>
							<input type = "text" class = "form-control" name = "firstname" required = "required" />
						</div>
						<div class = "form-group">
							<label>Middlename</label>
							<input type = "text" class = "form-control" name = "middlename"  />
						</div>
						<div class = "form-group">
							<label>Lastname</label>
							<input type = "text" class = "form-control" name = "lastname" required = "required" />
						</div>
						<div class = "form-group">
							<label>Address</label>
							<input type = "text" class = "form-control" name = "address" required = "required" />
						</div>
						<div class = "form-group">
							<label>Contact No</label>
							<input type = "text" class = "form-control" name = "contactno" required = "required" />
						</div>
						<div class = "form-group">
							<label>Check in</label>
							<input type = "date" class = "form-control" name = "date" required = "required" />
						</div>
						<br />
						<div class = "form-group">
							<button class = "btn btn-info form-control" name = "add_guest"><i class = "glyphicon glyphicon-save"></i> Submit</button>
						<br/>
						</div>
					</form>
					
				</div>
			</div>
				<br style = "clear:both;" />
				<div class = "col-md-4"></div>
				<?php require_once 'add_query_reserve.php'?>
			</div>
		</div>
	</div>
	<br />
	<br />
	<footer>
			<div style = "text-align:right; " class = "footer">
		<label style="color:white;  margin: 12px; margin-right: 20px; ">&copy; Copyright: DEFSA </label>
	</div>
	</footer>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>

