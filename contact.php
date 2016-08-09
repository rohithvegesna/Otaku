<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Otaku ~ contactus</title>
<?php $_SESSION['page'] = 'contact'; include 'header.php';?>
<body>
<div class="contact_index">
	<div class="container">
			<div class="cont-head">
				<h3>CONTACT</h3>
				<p>In case of any queries or details please give a <strong>MISSED CALL</strong> to the above number or you can send a query below.</p>
			</div>
		<div class="col-md-7 contact_index-left">
			<h3>Send Us A Message</h3>
			<div class="contact-form">
			<script src="js/validatecontact.js" type="text/javascript"></script>
				<form name="contact" action="ca/contactform.php" onsubmit="return validateForm();" method="post">
				<input type="text" class="textbox" placeholder="Name" name="n" id="n">
					<div class="alert-box error" id="uerror" style="width:50%"></div>
					<input type="text" class="textbox" placeholder="Email" name="em" id="em">
					<div class="alert-box error" id="eerror" style="width:50%"></div>
					<textarea placeholder="Message:" name="msg" id="msg"></textarea>
					<div class="alert-box error" id="aderror" style="width:50%"></div>
					<input type="submit" value="Send Now">
				</form>
			</div>
		</div>
		<div class="col-md-5 contact_index-right">
			<h3>Quick Links</h3>
			<ul class="footer_social">
			  <li><a href="mailto:info@otakud.in"> <i class="email"> </i> </a></li>
			  <li><a href="#"> <i class="chat"> </i> </a></li>
			  <li><a href="#"> <i class="report"> </i></a></li>
			  <li><a href="#"> <i class="phone"> </i></a></li>
			</ul>
		</div>
	</div>
</div>
<?php include 'footer.php';?>
</body>
</html>