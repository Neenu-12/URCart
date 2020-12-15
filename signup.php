<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width , initial-scale= 1.0">
	<title> All Products -URcart </title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="navbar">
			<div class="logo">
			<img src="images/logo.png" width="125px">
			</div>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Products</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Account</a></li>
				</ul>
			</nav>
			<img src="images/cart.png" width="30px" height="30px">
			<img src="images/menu.png" class="menu-icon">
		</div>
	</div>
	
	<!-----account page---->
	<div class="account-page">
		<div class="container">
			<div class="row">
				<div class="col-2">
					<img src="images/image1.png" width="100%">
				</div>
				<div class="col-2">
					<div class="form-container">
						<div class="form-btn">
							<span>Sign Up</span>
							<hr id="indicator">
						</div>
						<form id="Signform" action="signup.php" method="post">
							<?php include('errors.php'); ?>
							<input type="text" placeholder="Username" name="name">
							<input type="text" placeholder="E-mail" name="email">
							<input type="password" placeholder="Password" name="pwd">
							<button type="submit" class="btn" name="signup">Sign Up</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	

<!-----footer---->
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col-1">
				<h3>Download our app</h3>
				<p>Download app for android and ios device</p>
			</div>
			<div class="footer-col-2">
				<img src="images/logo-white.png">
				<p>Our purpose is to sustainabily make the pleasure and benefits and lifestyle products accessible to the many.</p>
			</div>
			<div class="footer-col-3">
				<h3>Useful Links</h3>
				<ul>
					<li>Coupons</li>
					<li>Blog Post</li>
					<li>Retuen Policy</li>
					<li>Join Affiliate</li>
				</ul>
			</div>
			<div class="footer-col-3">
				<h3>Follow Us</h3>
				<ul>
					<li>Facebook</li>
					<li>Twitter</li>
					<li>Instagram</li>
					<li>YouTube</li>
				</ul>
			</div>
		</div>
		<hr>
		<p class="copyright">Copyright 2020 Urcart</p>
	</div>
</div>
</body>
</html>