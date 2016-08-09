<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Otaku ~ signup</title>
		<link rel="icon" type="image/x-icon" href="../css/favicon.ico" />
		<link rel="shortcut icon" href="../css/favicon.ico" type="image/x-icon" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../css/1main.css" />
	</head>
	<body class="landing">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>Sign UP</h2>
							<p>Succesful Please Login</p>
							<ul class="actions">
								<li><a href="index.php" class="button special">Log In</a></li>
							</ul>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
						<a target="_blank" href="http://www.copyrighted.com/copyrights/view/4chq-rbx6-4e8n-cnb4"><img border="0" alt="Copyrighted.com Registered &amp; Protected 
						4CHQ-RBX6-4E8N-CNB4" title="Copyrighted.com Registered &amp; Protected 
						4CHQ-RBX6-4E8N-CNB4" width="150" height="40" src="http://static.copyrighted.com/images/seal.gif" /></a>

							<li>&copy; <?php echo date('Y') ?> All Rights Reserved Design by <a href="https://www.facebook.com/groups/Otakuwds/">Otaku</a>.</li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="../js/1jquery.min.js"></script>
			<script src="../js/1jquery.scrollex.min.js"></script>
			<script src="../js/1jquery.scrolly.min.js"></script>
			<script src="../js/1skel.min.js"></script>
			<script src="../js/1util.js"></script>
			<script src="../js/1main.js"></script>
<?php include '../chat.php';?>
	</body>
</html>