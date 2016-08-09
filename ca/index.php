<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php
	session_start();
	if(!isset($_SESSION['userName'])) { ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Otaku ~ Client Area</title>
<link rel="icon" type="image/x-icon" href="../css/favicon.ico" />
<link rel="shortcut icon" href="../css/favicon.ico" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />	
<link href="../css/popup.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="../css/box.css">	
<script src="../js/jquery.min.js"> </script>
<script src="../js/waypoint.js"></script>
<!--webfonts-->
  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,100italic,400italic,700italic|Abril+Fatface|Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>

	<script>
		$(function() {
			var waypoint = new Waypoint({
				element: document.getElementById('dummybox'),
				handler: function(direction) 
				{
					if( direction == 'down' )
					{
						$('#navbarr').css('position', 'absolute');
						$('#navbarr').css('left','0');
						$('#navbarr').css('top','0');
						$('#navbarr').css('position', 'fixed');
						$('#navbarr').css('z-index', '1000' );
					}
					else
					{
						$('#navbarr').css('position', 'relative');
						$('#navbarr').css('z-index', '0' );
					}
				}
			});
		});
	</script>
	
<body>
	<!--start-home-->
	<div id="home" class="header">
				<div id="navbarelm" class="strip">
					 <div class="container">
						<p class="location"><i class="location"></i>Vishakapatnam,INDIA.</p>
						<p class="phonenum">Any Details Or Queries Just Give Missed Call To +91-9640230600.</p>
							<div class="clearfix"></div>
					</div>
				</div>
				<div id="dummybox"></div>
	<div id="navbarr" class="header-bottom" role="navigation" style="/*position: fixed;*/
	width: 100%;
	/*z-index: 1000;*/
	opacity: 1;">
			<div class="container">
				<div class="logo">
					<a href="index.php"><h1>O<span>taku</span></h1></a>
				</div>
				<span class="menu"></span>
				<div class="top-menu">
					<ul>
					<nav class="cl-effect-5">
						<li><a href="../"><span data-hover="Home">Home</span></a></li> 
						<li><a href="../about.php"><span data-hover="About">About</span></a></li>
						<li><a class="pricina" href="#"><span data-hover="SERVICES">SERVICES</span></a></li>
						<li><a href="../pricerangechart.php"><span data-hover="PRICING">PRICING</span></a></li>
						<li><a href="../contact.php"><span data-hover="Contact">Contact</span></a></li>
						<li><a class="active" href="ca/"><span data-hover="LOGIN">LOGIN</span></a></li>
					</nav>
						<div class="wrappricedd" style="z-index: 1000;display:none">
							<div class="wrappriceopts" style="z-index: 1000">
								<div href="../web.php">Webdesigning</div>
								<div href="../host.php">Webhosting</div>
								<div href="../domain.php">Domains</div>
								<div href="../ssl.php">SSL</div>
								<div href="../email.php">Emails</div>
							</div>
						</div>
					</ul>
				</div>
				<script>
					$(function() {
						$('.wrappricedd').hide();
						var timeid;
						$('.wrappriceopts > div').click(function(){
							window.location.href = $(this).attr('href');
						});
						$('.pricina').hover(function() {
							var lpos = $('.pricina').offset();
							$('.wrappriceopts').css('top',(lpos.top+54-($(window).scrollTop())));
							$('.wrappriceopts').css('left',lpos.left);
							$('.wrappricedd').css('background','white');
							$('.wrappricedd').css('color','black');
							$('.wrappriceopts').show(200);
							$('.wrappricedd').show(200);
							clearTimeout(timeid);
							},function(){
							timeid = setTimeout(hidedd,1000);
						});
						
						$('.wrappricedd').hover(function() {
							clearTimeout(timeid);
							},function() {
							timeid = setTimeout(hidedd,1000);
						});
						
					});
					
					function hidedd() {
						$('.wrappricedd').css('background','');
						$('.wrappricedd').css('color','');				
						$('.wrappriceopts').hide(200);
					}	
				</script>
				<style>
					.pricina
					{
					cursor:pointer;
					}
					.wrappriceopts {
					position: absolute; 
					width: 150px; 
					padding: 10px 10px 17px 10px;
					margin: 0 auto;
					outline: none; 
					border: 7px solid #C19575;
					border-radius: 4px;
					background: #13171B;
					/* display:none; */
					}
					.wrappriceopts > div {
					color:white;
					border-bottom: 1px solid;
					font-size: 14px;
					line-height: 35px;
					-webkit-transition: all .6s ease-out;
					-moz-transition: all .6s ease-out;
					-o-transition: all .6s ease-out;
					transition: all .6s ease-out;
					cursor : pointer;
					}
					
					.wrappriceopts > div:hover {
					color:#2ECC71;
					border-bottom: 1px dotted #2ECC71;
					}
					#passwordStrength
					{
					height:10px;
					display:block;
					float:left;
					}

					.strength0
					{
					width:250px;
					background:#cccccc;
					}

					.strength1
					{
					width:50px;
					background:#ff0000;
					}

					.strength2
					{
					width:100px;	
					background:#ff5f5f;
					}

					.strength3
					{
					width:150px;
					background:#56e500;
					}

					.strength4
					{
					background:#4dcd00;
					width:200px;
					}

					.strength5
					{
					background:#399800;
					width:250px;
					}
				</style>
				<!-- script for menu -->
				<script>
				$( "span.menu" ).click(function() {
				  $( ".top-menu" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>
			<!-- script for menu -->
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<div class="contact_index">
	<div class="container">
			<div class="cont-head">
				<h3>Signup / Login</h3>
				<p></p>
			</div>
		<div class="col-md-7 contact_index-left">
			<h3>Sign Up</h3>
			<p style="font-size: 0.8em; padding-bottom: 12px; color: gray;">NOTE : An unique generated password will be sent to the email address you have mentioned.</p>
			<div class="contact-form">
			<script src="../js/validatesignup.js" type="text/javascript"></script>
				<form name="signup" action="signup.php" onsubmit="return validateForm();" method="post">
					<input type="text" class="textbox" placeholder="Username" name="n">
					<div class="alert-box error" id="uerror" style="width:50%"></div>
					<input type="text" class="textbox" placeholder="Email" name="em">
					<div class="alert-box error" id="eerror" style="width:50%"></div>
					<input type="text" class="textbox" placeholder="Mobile" name="num">
					<div class="alert-box error" id="nerror" style="width:50%"></div>
					<textarea type="text" class="textbox" placeholder="Address" name="add"></textarea>
					<div class="alert-box error" id="aderror" style="width:50%"></div>
					<input type="submit" value="Signup" name="submit" id="send">
				</form>
			</div>
		</div>
		<div class="col-md-5 contact_index-right">
			<h3>Login</h3>
			<div class="contact-form">
				<form action="signin.php" onsubmit="return validateForml();" method="post">
					<input type="text" class="textbox" name="name" placeholder="Username">
					<input type="password" class="textbox" name="pwd" placeholder="Password">
					<div style="font-size: 0.7em; padding: 1px; border-bottom: 1px black dotted; width: 35%;"><a href="forgot.php">Forgot Password ?</a></div><br/>
					<input type="submit" value="Login" name="submit" id="send">
				</form>
			</div>
		</div>
	</div>
</div>
	<!---- footer --->
			<div class="footer text-center">
				<div class="container">
					<div class="copy">
					<a target="_blank" href="http://www.copyrighted.com/copyrights/view/4chq-rbx6-4e8n-cnb4"><img border="0" alt="Copyrighted.com Registered &amp; Protected 
					4CHQ-RBX6-4E8N-CNB4" title="Copyrighted.com Registered &amp; Protected 
					4CHQ-RBX6-4E8N-CNB4" width="150" height="40" src="http://static.copyrighted.com/images/seal.gif" /></a>
		              <p>&copy; <?php echo date('Y') ?> All Rights Reserved. <a href="https://www.facebook.com/groups/Otakuwds/">Otaku</a>. || <a href="sitemap.php" target="_blank">sitemap</a> || <a href="privacypolicy.php" target="_blank">Privacy Policy</a> || <a href="tos.php" target="_blank">Terms of Service</a><br><br>
					  <?php 
							$ip=$_SERVER['REMOTE_ADDR'];
							echo "Your IP is beeing logged please don't missuse-".$ip;
						?></p>
					</div>
					
				</div>
			</div>
			<!--start-smoth-scrolling-->
			<script type="text/javascript">
								jQuery(document).ready(function($) {
									$(".scroll").click(function(event){		
										event.preventDefault();
										$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
									});
								});
								</script>
							<!--start-smoth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<?php include '../chat.php';?>
</body>
</html>
<?php } else { echo header('Location: ca.php');}
?>