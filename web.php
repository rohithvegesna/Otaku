<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Otaku ~ webdesigning</title>
<?php $_SESSION['page'] = '';include 'header.php';?>
<body>
	<div id="webdesign" class="pricing-plans">
		<div class="container">
			<div class="price-head">
				<h3>OUR WEBDESIGNING PRICING</h3>
			</div>
				<div class="pricing-grids">
						<div class="pricing-grid1">
							<div class="price-value">
									<h4><a href="#"> BASIC</a></h4>
									<h5><span>Rs.5000</span><lable> / website</lable></h5>
							</div>
							<div class="price-bg">
							<ul>
								<li class="whyt"><a href="#">Responsive Design</a></li>
								<li><a href="#">0 - Domain Maintanance</a></li>
								<li class="whyt"><a href="#">0 - Email Addresses</a></li>
								<li><a href="#">Single Page Basic Website</a></li>
								<li class="whyt lost"><a href="#">24/7 Support</a></li>
							</ul>
							<div class="cart1">
								<a class="popup-with-zoom-anim" href="ca/order.php">ORDER</a>
							</div>
							</div>
						</div>
						<div class="pricing-grid2">
							<div class="price-value two">
								<h4><a href="#">STANDARD</a></h4>
								<h5><span>Rs.13000</span><lable> / website</lable></h5>
							</div>
							<div class="price-bg">
							<ul>
								<li class="whyt"><a href="#">Fully Responsive Design</a></li>
								<li><a href="#">1 - Domain Maintanance</a></li>
								<li class="whyt"><a href="#">10 - E-Mail Addresses</a></li>
								<li><a href="#">Multi Page Medium Website</a></li>
								<li class="whyt lost"><a href="#">24/7 Support</a></li>
							</ul>
							<div class="cart2">
								<a class="popup-with-zoom-anim" href="ca/order.php">ORDER</a>
							</div>
							</div>
						</div>
						<div class="pricing-grid3">
							<div class="price-value three">
								<h4><a href="#">PREMIUM</a></h4>
								<h5><span>Contact</span><lable> For Price</lable></h5>
							</div>
							<div class="price-bg">
							<ul>
								<li class="whyt"><a href="#">Fully Responsive Design</a></li>
								<li><a href="#">&infin; - Domain Names</a></li>
								<li class="whyt"><a href="#">&infin; - E-Mail Address </a></li>
								<li><a href="#">Website Designed As Per Client Defines</a></li>
								<li class="whyt lost"><a href="#">24/7 Support</a></li>
							</ul>
							<div class="cart3">
								<a class="popup-with-zoom-anim" href="ca/order.php">ORDER</a>
							</div>
							</div>
						</div>
							<div class="clearfix"> </div>
							</div>
						<div class="clearfix"> </div>
					</div>
	</div>
				<!-- Add fancyBox main JS and CSS files -->
				<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
				<link href="css/popup.css" rel="stylesheet" type="text/css">
	<!--//End-pricing-plans-->
<?php include 'footer.php';?>
</body>
</html>