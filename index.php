<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width , initial-scale= 1.0">
	<title>URcart | Ecommerce Website</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="header">
	<div class="container">
		<div class="navbar">
			<div class="logo">
			<a href="index.html"><img src="images/logo.png" width="125px"></a>
			</div>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="products.php">Products</a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="signup.php">Signup</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</nav>
			<a href="cart.html"><img src="images/cart.png" width="30px" height="30px"></a>
			<img src="images/menu.png" class="menu-icon">
		</div>
		
		<div>
			<?php if (isset($_SESSION['success'])): ?>
			<div>
				<p><?php echo $_SESSION['success']; ?></p>
                <p><?php unset($_SESSION['success']); ?></p>
			</div>
			<?php endif ?>

			<?php if (isset($_SESSION["name"])): ?>
				<p><strong><?php echo $_SESSION['name']; ?></strong></p>
			    <p><a href="index.php?logout='1'">Logout</a></p>
			<?php endif ?>
		</div>
		<div class="row">
			<div class="col-2">
				<h1>Give Your Workout<br> A New Style!</h1>
				<p>Success isn't always about greatness. It's about
				 consistency. Consistent<br> hardwork gains success. Greatness
				  will come.</p>
				<a href="products.php" class="btn">Explore Now &#8594;</a>
			</div>
			<div class="col-2">
				<img src="images/image1.png">
			</div>
		</div>
	</div>
	</div>
	<!-----featured categories---->
	<div class="categories">
		<div class="small-container">
<div class="row">
			<div class="col-3">
				<img src="images/category-1.jpg">
			</div>
			<div class="col-3">
				<img src="images/category-2.jpg">
			</div>
			<div class="col-3">
				<img src="images/category-3.jpg">
			</div>
		</div>
		</div>
	</div>
	<!-----featured products---->
	<div class="small-container">
		<h2 class="title">Featured Products</h2>
		<div class="row">
			<div class="col-4">
				<img src="images/product-1.jpg">
				<h4>Red Printed T-Shirt</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$50.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-2.jpg">
				<h4>Red Printed T-Shirt</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$50.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-3.jpg">
				<h4>Red Printed T-Shirt</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
				</div>
				<p>$50.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-4.jpg">
				<h4>Red Printed T-Shirt</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$50.00</p>
			</div>
		</div>
		<h2 class="title">Latest Products</h2>
		<div class="row">
			<div class="col-4">
				<img src="images/product-5.jpg">
				<h4>Red Printed T-Shirt</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$50.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-6.jpg">
				<h4>Red Printed T-Shirt</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$50.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-7.jpg">
				<h4>Red Printed T-Shirt</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
				</div>
				<p>$50.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-8.jpg">
				<h4>Red Printed T-Shirt</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$50.00</p>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<img src="images/product-9.jpg">
				<h4>Red Printed T-Shirt</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$50.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-10.jpg">
				<h4>Red Printed T-Shirt</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$50.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-11.jpg">
				<h4>Red Printed T-Shirt</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
				</div>
				<p>$50.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-12.jpg">
				<h4>Red Printed T-Shirt</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$50.00</p>
			</div>
		</div>
	</div>
<!-----offer---->
<div class="offer">
	<div class="small-container">
		<div class="row">
			<div class="col-2">
				<img src="images/exclusive.png" class="offer-img">
			</div>
			<div class="col-2">
				<p>Exclusively available on Urcart</p>
				<h1>Smart band 4</h1>
				<small>The band features 40% larger(than band 3) AMOLED color full-touch display with adjustable brightness, so everything is clear as can be.<small>
				<a href="" class="btn">Buy Now &#8594;</a>
			</div>
		</div>
	</div>
</div>
<!-----testimonial---->
<div class="testimonial">
	<div class="small-container">
		<div class="row">
			<div class="col-3">
				<i class="fa fa-quote-left" aria-hidden="true"></i>
				<p>The number of lines in a paragraph depends on the size of the browser window. If you resize the browser window, the number of lines in this paragraph will change.</p>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
				</div>
				<img src="images/user-1.png">
				<h3>Bella Phillip</h3>
			</div>
			<div class="col-3">
				<i class="fa fa-quote-left" aria-hidden="true"></i>
				<p>The number of lines in a paragraph depends on the size of the browser window. If you resize the browser window, the number of lines in this paragraph will change.</p>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
				</div>
				<img src="images/user-2.png">
				<h3>Brendon Urie</h3>
			</div>
			<div class="col-3">
				<i class="fa fa-quote-left" aria-hidden="true"></i>
				<p>The number of lines in a paragraph depends on the size of the browser window. If you resize the browser window, the number of lines in this paragraph will change.</p>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
				</div>
				<img src="images/user-3.png">
				<h3>Mabel Smith</h3>
			</div>
		</div>
	</div>
</div>
<!-----brands---->
<div class="brands">
	<div class="small-container">
		<div class="row">
			<div class="col-5">
				<img src="images/logo-godrej.png">
			</div>
			<div class="col-5">
				<img src="images/logo-oppo.png">
			</div>
			<div class="col-5">
				<img src="images/logo-coca-cola.png">
			</div>
			<div class="col-5">
				<img src="images/logo-paypal.png">
			</div>
			<div class="col-5">
				<img src="images/logo-philips.png">
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