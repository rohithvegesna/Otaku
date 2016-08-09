<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php
	session_start();
	if(!isset($_SESSION['userName'])) { ?>
<!DOCTYPE html>
<html>
	
<head>
<title>Otaku ~ support</title>
<link rel="icon" type="image/x-icon" href="http://otakud.in/css/favicon.ico" />
<link rel="shortcut icon" href="http://otakud.in/css/favicon.ico" type="image/x-icon" />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,700,800' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>
	
 <!--start-main-->
 	<div class="login-05">
		<div class="fifth-login">
			<h2>LOGIN TO OPEN TICKET</h2>
			<p><a href="http://otakud.in">HOME</a></p>
			<form class="five" form action="signin.php" onsubmit="return validateForml();" method="post">
				<li>
					<input type="text" class="text" name="name" placeholder="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" ><a href="#" class=" icon5 user2"></a>
				</li>
				<li class="blue">
					<input type="password" name="pwd" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"><a href="#" class=" icon5 lock2"></a>
				</li>
				<div class="submit-five">
					<input type="submit" onclick="myFunction()" value="LOG IN" > 
				</div>
			</form>
		</div>
	</div>
	<!--//End-login-form-->
	<!--start-copyright-->
   		<div class="copy-right">
   			<div class="wrap">
				<p>&copy; <?php echo date('Y') ?> All Rights Reserved. <a href="https://www.facebook.com/groups/Otakuwds/">Otaku</a>.</p>
		</div>
	</div>
	<!--//end-copyright-->
		 		
</body>
</html>
<?php } else { echo header('Location: index1.php');}
?>