<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Hotel PALAZZO</title>
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
		<a href="index.html" class="navbar-brand">Hotel PALAZZO</a>
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
	<div style = "margin-left:30px;" class = "container">
		
			<div class = "panel-body">
</br>
</br>
				<strong><h3 style = "color:#003300;">MAKE A RESERVATION</h3></strong>
				<hr >
				<?php
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());
					while($fetch = $query->fetch_array()){
				?>
					<div class = "well" style = "height:300px; width:100%;border: 2px solid #DAA520;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 8px 20px 0 rgba(0, 0, 0, 0.19);">
						<div  style = "float:left;border: 1px solid #ddd; border-radius: 4px; padding: 5px; border-radius: 8px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
							<img src = "photo/<?php echo $fetch['photo']?>" height = "250" width = "350"  />
						</div>
						<div style = "float:left; margin-left:20px;">
							<h3 style = "color:#003300;  font-weight: bold;"><?php echo $fetch['room_type']?></h3>
							<h4 style = "color:#DAA520;"><?php echo "Price: ".$fetch['price']." Euro(€)" ?></h4>
							<br /><br /><br /><br /><br /><br />
							<a style = "margin-left:580px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 4px 15px 0 rgba(0, 0, 0, 0.19);" href = "add_reserve.php?room_id=<?php echo $fetch['room_id']?>" class = "btn btn-info"><i class = "glyphicon glyphicon-list"></i> Reserve</a>
						</div>
					</div>
				<?php
					}
				?>
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
