<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE html>
<html>	
<head>
<title>Otaku ~ Forgot Password</title>
	<link rel="icon" type="image/x-icon" href="../css/favicon.ico" />
	<link rel="shortcut icon" href="../css/favicon.ico" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Cofrestru Registration Form Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />
<link href="../css/forgot.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,800,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Marvel:400,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<?php 
session_start();
if( isset($_GET['k']) )
{
	require_once 'db.php';
	
	$sql = "SELECT * FROM clients WHERE Keye='".mysqli_real_escape_string($db, $_GET['k'])."'";
	$res = mysqli_query($db, $sql);
	if( is_bool($res) || (mysqli_num_rows($res)<1) )
	{
		echo "Noob Spotted...<br/><h1>404 Error</h1><br/>";
		exit;
	}
	
	$Details = mysqli_fetch_array($res);
	$_SESSION['ResetPassAccountDetails'] = $Details;
	
?>
	<script>
	$(function()
	{	
		$('.error').hide();
	});
	
	function validateForm1() {
		
		var pass = document.forms['forgot1']['p'].value;
		var cnfpass = document.forms['forgot1']['cnfpass'].value;
		
		
		if( pass == null || pass == '' || pass.length < 6 || pass.slice(-1) == '#' )
		{
			$('#perror').text("You must enter a password of atleast 6 chars length and last letter should not be '#'");
			$('#perror').fadeIn(500);
			return false
		}
		else if( cnfpass == null || cnfpass == '' || cnfpass != pass )
		{
			$('#perror').text("Please retype your password.");
			$('#perror').fadeIn(500);
			return false
		} else {}
	}
</script>
</head>
<body>
	<h1>Otaku Password Request Form</h1>
		<div class="registration">
			<h2>Forgot Pass Form</h2>
			<div class="avtar">
				<img src="http://i280.photobucket.com/albums/kk197/rohithvegesna/email_zps2wkhnihn.jpg" />
			</div>
				<div class="form-info">
					<form role="form" name="forgot1" action="functions/resetPass.php" onsubmit="return validateForm();" method="post">
						<input type="password" placeholder="Password" id="pass" name="p">
						<input type="password" placeholder="Password" id="pass" name="cnfpass">
						<input type="submit" value="SUBMIT">
					</form>
				</div>
		</div>
<?php } else { ?>
<script>
$(function()
{	
	$('.error').hide();
});

function validateForm() {
	
	$('.error').hide();
	
	var x = document.forms["forgot"]["em"].value;
    if(x == null || x == '' || !validateEmail(x)) 
	{
		$('#eerror').text("Email must be filled out and must be a valid email.");
		$('#eerror').fadeIn(500);
        return false;
    }
}

function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}
  </script>
</head>
<body>
	<h1>Otaku Password Request Form</h1>
		<div class="registration">
			<h2>Forgot Pass Form</h2>
			<div class="avtar">
				<img src="http://i280.photobucket.com/albums/kk197/rohithvegesna/email_zps2wkhnihn.jpg" />
			</div>
				<div class="form-info">
					<form role="form" name="forgot" action="mail/changepassmail.php" onsubmit="return validateForm();" method="post">
						<input type="text" class="text" placeholder="Email Adress" id="email" name="em">
						<div class="alert-box error" id="eerror" style="width:50%"></div>
						<input type="submit" value="SUBMIT">
					</form>
				</div>
		</div>
<?php } ?>
<div class="copy-rights">
						<a target="_blank" href="http://www.copyrighted.com/copyrights/view/4chq-rbx6-4e8n-cnb4"><img border="0" alt="Copyrighted.com Registered &amp; Protected 
						4CHQ-RBX6-4E8N-CNB4" title="Copyrighted.com Registered &amp; Protected 
						4CHQ-RBX6-4E8N-CNB4" width="150" height="40" src="http://static.copyrighted.com/images/seal.gif" /></a>
					<p>&copy; <?php echo date('Y') ?> All Rights Reserved Design by <a href="https://www.facebook.com/groups/Otakuwds/">Otaku</a>.</p>
			</div>

</body>
</html>