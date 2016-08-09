<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Otaku ~ how to</title>
<?php $_SESSION['page'] = 'howto';include 'header.php';?>
<body>
	<div id="webdesign" class="pricing-plans">
		<div class="container">
			<div class="row">
				<div class="col-sm-6"><iframe width="100%" height="300" src="http://adhikruth.in" frameborder="1px" style="padding:15px;"></iframe></div>
				<div class="col-sm-6"><iframe width="100%" height="300" src="http://aakanksha.org" frameborder="1px" style="padding:15px;"></iframe></div>
				<div class="col-sm-6"><iframe width="100%" height="300" src="http://ieiscgitam.in" frameborder="1px" style="padding:15px;"></iframe></div>
				<div class="col-sm-6"><iframe width="100%" height="300" src="http://adhikruth.in" frameborder="1px" style="padding:15px;"></iframe></div>
			</div>
		</div>
	</div>
<?php include 'footer.php';?>
</body>
</html>