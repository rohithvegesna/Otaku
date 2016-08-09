<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Otaku ~ SSL</title>
	<?php
	$_SESSION['page'] = ''; include 'header.php';?>
<body>
	<div id="webdesign" class="pricing-plans">
		<div class="container">
			<div class="price-head">
				<h3>Our SSL Pricing</h3>
			</div>
			
			<style>
				td
				{
				text-align: center;
				vertical-align: middle;
				}
				thead > tr > td
				{
				padding: 1.3em;
				font-weight: 700;
				border-bottom: 1px black dotted;
				}
			</style>
			<table class="table-standard small-table">
				<thead>
					<tr>
						<td>SSL Type</td>
						<td>Price /year (INR)</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<?php
						require 'ca/db.php';
						$sql = "SELECT * FROM plans where ServiceType='SSL'";
						$res = mysqli_query( $db, $sql );
						//$array = mysqli_fetch_array($res);
						while( ($array = mysqli_fetch_array($res)) && (!is_bool($array)) )
						{
							echo '<tr><td>'.$array['Plan'].'</td>'.
							'<td>'.$array['Price'].'</td>'.
							'<td><a class="btn btn-success" href="ca/order.php">Order</a></td></tr>';							
						}
					?>
				</tbody>
			</table>
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