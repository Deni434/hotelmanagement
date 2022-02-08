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
				<div class = "col-md-4"></div>
				<div class = "well col-md-4">
					<center><h3>Please visit our Hotel for verification</h3></center>
					<br />
					<center><h4>THANK YOU!</h4></center>

					<br />
				
					<center><div class="paypal"">
						<h5><b>You can pay with Cash or PayPal<b></h5>
						<form class="paypal" action="payments.php" method="post" id="paypal_form">
							<input type="hidden" name="cmd" value="_xclick" />
							<input type="hidden" name="no_note" value="1" />
							<input type="hidden" name="lc" value="UK" />
							<input
								type="hidden"
								name="bn"
								value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest"
							/>
							<input type="hidden" name="first_name" value="Customer's First Name" />
							<input type="hidden" name="last_name" value="Customer's Last Name" />
							<input type="hidden" name="payer_email" value="customer@example.com" />
							<input type="hidden" name="item_number" value="123456" />
							<button  style ="background-color: #FFC439;border-radius: 5px;	border: none;cursor: pointer;width: 190px; padding: 10px 20px 7px 20px;" type="submit" name="paypal"><img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-100px.png" border="0" alt="PayPal Logo"></button>
							</form>	
						
						</div></center>
						<br>
					<center><a href = "reservation.php" class = "btn btn-success"><i class = "glphyicon glyphicon-check"></i> Back to reservation</a></center>
				</div>
				<div class = "col-md-4"></div>
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