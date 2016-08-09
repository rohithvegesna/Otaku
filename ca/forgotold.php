<!DOCTYPE html>
<html lang="en">
<head>
  <title>Otaku ~ Forgot pass</title>
	<link rel="icon" type="image/x-icon" href="../css/favicon.ico" />
	<link rel="shortcut icon" href="../css/favicon.ico" type="image/x-icon" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  
<?php if( isset($_GET['k']) )
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
		
		var pass = document.forms['forgot']['p'].value;
		var cnfpass = document.forms['forgot']['cnfpass'].value;
		
		
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
	
	function passwordStrength(password)
	{
		var desc = new Array();
		desc[0] = "Very Weak";
		desc[1] = "Weak";
		desc[2] = "Better";
		desc[3] = "Medium";
		desc[4] = "Strong";
		desc[5] = "Strongest";
		
		var score   = 0;
		
		//if password bigger than 6 give 1 point
		if (password.length > 6) score++;
		
		//if password has both lower and uppercase characters give 1 point	
		if ( ( password.match(/[a-z]/) ) && ( password.match(/[A-Z]/) ) ) score++;
		
		//if password has at least one number give 1 point
		if (password.match(/\d+/)) score++;
		
		//if password has at least one special caracther give 1 point
		if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) )	score++;
		
		//if password bigger than 12 give another 1 point
		if (password.length > 12) score++;
		
		document.getElementById("passwordDescription").innerHTML = desc[score];
		document.getElementById("passwordStrength").className = "strength" + score;
	}
</script>
  </head>
	<body>
		
		<div class="container">
			<div class="jumbotron">
				<h1>Change pass request</h1> 
				<p>Enter your new password</p> 
			</div>
			<div class="container">
				<div style="max-width:75%;">
					<form role="form" name="forgot" action="functions/resetPass.php" onsubmit="return validateForm1();" method="post">
					
						<div class="form-group">
							<label for="password">Password:</label>
							<input type="pwd" class="form-control" id="pass" name="p">
						</div>
						<div class="form-group">
							<label for="password">Password:</label>
							<input type="pwd" class="form-control" id="pass" name="cnfpass">
							<div class="alert-box error" id="perror" style="width:50%"></div>
							<div class="alert-box error" id="perror" style="width:50%"></div>
							<p>
								<label for="passwordStrength">Password strength</label>
								<div id="passwordDescription">Password not entered</div>
								<div id="passwordStrength" class="strength0"></div>
							</p><br></br>
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
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

<div class="container">
 <div class="jumbotron">
    <h1>Change pass request</h1> 
    <p>Enter your new password</p> 
  </div>
  <div class="container">
 <div style="max-width:75%;">
  <form role="form" name="forgot" action="mail/changepassmail.php" onsubmit="return validateForm();" method="post">
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control" id="email" name="em">
	<div class="alert-box error" id="eerror" style="width:50%"></div>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>
</div>

<?php } ?>

</body>
</html>