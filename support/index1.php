<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php
	 session_start();
	if( !isset($_SESSION['userName']) )
	{
		die("<h1>404 Error</h1><h2> Access Denied</h2><h3><a href='index.php'>Login/Signup</a></h3>");exit;
	}
	
	if( isset($_SESSION['userName']) && ( (time() - $_SESSION['time']) >= 5*60 ))
	{
		header('Location: logout.php');
	}
	else
	{
		$_SESSION['time'] = time();
	}
		
?>
<html>
	<head>
		<!-- CHANGE TITLE AND META ACCORDINGLY -->
		<title>Otaku ~ Support</title>
		<link rel="shortcut icon" href="../css/favicon.ico" type="image/x-icon" />
		<meta name="description" content="Get domains, hosting spaces, emails, ssl certificates at cheaper prices. And get your websites designed as you like at low prices.">
		<meta name="keywords" content="Otaku, Otaku designers, webdesins, hosting, emails, ssl certificates, website, professional emails, dedicated hosting">
		<meta name="copyright" content="Copyright © 2015 OTAKU. All Rights Reserved.">
		<meta name="author" content="Otaku">
		<meta name="theme-color" content="#ffffff">
		<meta content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes" name="viewport">
		<link rel="stylesheet" href="css/tidy.css">
		<link rel="stylesheet" href="css/animate.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
		<script src="bower_components/webcomponentsjs/webcomponents.js"></script>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="import" href="bower_components/paper-ripple/paper-ripple.html">
		<link rel="import" href="bower_components/paper-fab/paper-fab.html">
		<link rel="import" href="bower_components/core-icons/core-icons.html">
	</head>
	<body>
	
		<div class="container" style="width: 100%">
			<!-- COVER IMAGE AND FLOATING BUTTON -->
			<div class="cover-image"></div>	
			<div style="height: 50%; width: 100%; position: absolute; top: 0">
				<!-- REPLACE WITH YOUR APP URL -->
     			<!--<a href="YOUR_APP_URL_HERE">
     				<paper-fab class="wow fadeInUp desktop-fab" icon="shop"></paper-fab>
     			</a>-->
			</div>
			
			<!-- ICON, NAME AND DESCRIPTION -->
			<div class="wow fadeInUp content-card">
				<!-- REPLACE WITH YOUR APP URL -->
				<!--<a href="YOUR_APP_URL_HERE">
					<paper-fab class="mobile-fab" icon="shop"></paper-fab>
				</a>-->
				
				<div class="icon-and-title-flex">
					<img src="http://i280.photobucket.com/albums/kk197/rohithvegesna/logo1_zpszklmipcb.png" class="appicon"></img>
					<div class="title-container">
						<!-- REPLACE WITH YOUR APP NAME -->
						<span class="text-title">Otaku</span>
						<br><div class="intertext-padding"></div>
						<!-- REPLACE WITH YOUR DEV NAME -->
						<span class="text-subtitle">Support</span>
						<br><div class="intertext-padding"></div>
						<!-- REPLACE WITH YOUR APP PRICE -->
						<span class="text-description">Tickets</span>
					</div>	
				</div><br><br><br>
				<!-- REPLACE WITH YOUR APP DESCRIPTION -->
				<span class="text-description">Have any problem with us? Open a ticket and leave it to us, we are here to solve your problem.
			</div>
			
			<div class="wow fadeInUp content-works">
			<br>
			<!-- REPLACE WITH YOUR DEV NAME -->
     		<span class="text-subtitle padtopandbottom">Tickets</span>
			<br>
			</div>
		
			<!-- APP DETAILS -->
			<div class="wow fadeInUp content-card" style="margin-top: 0;">
				<span class="text-subtitle">Number of tickets</span>
				<br><br><br>
				<!--<div>
					<div class="detail-item">
						<core-icon class="details-icon" icon="turned-in"></core-icon>
						<span class="text-description">Entertainment</span>
					</div>
					<div class="detail-item">
						<core-icon class="details-icon" icon="star"></core-icon>
						<span class="text-description">Average Rating 4.4</span>
					</div>
					<div class="detail-item">
						<core-icon class="details-icon" icon="info"></core-icon>
						<span class="text-description">Version 1.0.295<span>
					</div>
					<div class="detail-item">
						<core-icon class="details-icon" icon="mail"></core-icon>
						<span class="text-description">malkanifaiz@gmail.com</span>
					</div>
					<div class="detail-item">
						<core-icon class="details-icon" icon="android"></core-icon>
						<span class="text-description">Android 4.0.3+</span>
					</div>
					<div class="detail-item">
						<core-icon class="details-icon" icon="assessment"></core-icon>
						<span class="text-description">10,000+ downloads</span>
					</div>
					<div class="detail-item">
						<core-icon class="details-icon" icon="extension"></core-icon>
						<span class="text-description">Contains in-app purchases</span>
					</div>
				</div>-->
<style>
textarea {
	width: 100%;
	height: 100px;
	border: 3px solid #cccccc;
	padding: 5px;
	font-family: Tahoma, sans-serif;
}
</style>
<div style="display: flex; flex-direction: row; flex-wrap: wrap; justify-content: center; align-items: center;">
		<form name="ticket" action="newticket.php" onsubmit="return validateForm();" method="post">
			<textarea type="text" class="textbox" placeholder="Problem" id="ticket" name="ticket"></textarea>
			<div class="alert-box error" id="terror" style="width:50%"></div>
			<button class="button-success pure-button" style="width: 100px; height:50px;" value="submit" id="submit" name="submit">Open Ticket</button>
		</form>
</div><br><hr><br>
<style scoped>

.button-success,
.button-error,
.button-warning,
.button-secondary {
color: white;
border-radius: 20px;
text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
}

.button-success {
background: rgb(28, 184, 65); /* this is a green */
}

.button-error {
background: rgb(202, 60, 60); /* this is a maroon */
}

.button-warning {
background: rgb(223, 117, 20); /* this is an orange */
}

.button-secondary {
background: rgb(66, 184, 221); /* this is a light blue */
}

</style>
<style>
td {
  padding: 10px;
  text-align: center;
  border: 1px solid grey;
  margin: 0px;
}
</style>
						<table style="font-size:15px;
						-webkit-user-select: none;     
						-moz-user-select: none;
						-ms-user-select: none;
						-o-user-select: none;
						user-select: none;
						width: 100%;">
							<thead>
								<tr style="border-bottom:1px black dotted">
									<th>Ticket No(#)</th>
									<th>Problem</th>
									<th>Reply</th>
									<th>Added at</th>
									<th>Close</th>
								</tr>
							</thead>
						<tbody>
							<?php
							require '../ca/db.php';
							// $timestamp = $array['DOO'];
							//$time = gmdate("Y-m-d\TH:i:s\Z", $timestamp);
							$sql = 'SELECT * FROM tickets WHERE UserID='.$_SESSION['userID'];
							$res = mysqli_query( $db, $sql );
							//$array = mysqli_fetch_array($res);
							while($array = mysqli_fetch_array($res))
							{
							echo '<tr><td>#'.$array['ID'].'</td>'.
							'<td>'.$array['Problem'].'</td>'.
							'<td>'.$array['Reply'].'</td>'.
							'<td>'.gmdate("Y-m-d\TH:i:s\Z", $array['DOO']).'</td>'.
							'<td><a href="closeticket.php?ticketid='.$array['ID'].'"><button class="button-error pure-button">Close Ticket</button></a></td></tr>'; 

							}
							?>
						</tbody>
						</table><hr>
			</div>
			
			
			<!-- OTHER APPS BY YOU -->
			<div class="wow fadeInUp content-works">
			<br>
			<!-- REPLACE WITH YOUR DEV NAME -->
     		<span class="text-subtitle padtopandbottom">Go To --></span>
			<br>
     		<!-- If needed, delete from here -->
			<div class="works-card">
     			<a href="../">
     				<div class="works-subcard">
     					<img class="top-corners-rounded" src="http://i280.photobucket.com/albums/kk197/rohithvegesna/logo1_zpszklmipcb.png" style="width: 100%"></img>
     					<span class="work-title">Home</span> 
     					<paper-ripple fit></paper-ripple>
     				</div>
     			</a>		
     		</div>
			<!-- To here-->
			
			<!-- If needed, delete from here -->
     		<div class="works-card">
     			<a href="../pricerangechart.php">
     				<div class="works-subcard">
     					<img class="top-corners-rounded" src="http://i280.photobucket.com/albums/kk197/rohithvegesna/02psd_layered_price_list_template_177124_zpsgimvpqrp.jpg" style="width: 100%"></img>
     					<span class="work-title">Pricing</span> 
     					<paper-ripple fit></paper-ripple>
     				</div>	
     			</a>	
     		</div>
			<!-- To here-->
			
			<!-- If needed, delete from here -->
     		<div class="works-card">
     			<a href="../web.php">
     				<div class="works-subcard">
     					<img class="top-corners-rounded" src="http://i280.photobucket.com/albums/kk197/rohithvegesna/web-design-concepts-23044113_zps2gudmyvp.jpg" style="width: 100%"></img>
     					<span class="work-title">Web Designing</span>
     					<paper-ripple fit></paper-ripple>
     				</div>	
     			</a>	
     		</div>
			<!-- To here-->
			
			<!-- If needed, delete from here -->
     		<div class="works-card">
     			<a href="../domain.php">
     				<div class="works-subcard">
     					<img class="top-corners-rounded" src="http://i280.photobucket.com/albums/kk197/rohithvegesna/Multiple-Domain-Names-for-Contrator-SEO_zpsbk7ahw42.jpg" style="width: 100%"></img>
     					<span class="work-title">Domains</span>
	     				<paper-ripple fit></paper-ripple>
	     			</div>
     			</a>		
     		</div>
			<!-- To here-->
			
			<!-- If needed, delete from here -->
     		<div class="works-card">
     			<a href="../contact.php">
     				<div class="works-subcard">
     					<img class="top-corners-rounded" src="http://i280.photobucket.com/albums/kk197/rohithvegesna/contact-us_zpsjtdcrh1i.jpg" style="width: 100%"></img>
     					<span class="work-title">Contact Us</span>
	     				<paper-ripple fit></paper-ripple>
	     			</div>	
     			</a>	
     		</div>
			<!-- To here-->
			
			<!-- If needed, delete from here -->
     		<div class="works-card">
     			<a href="../ca/">
     					<div class="works-subcard">
     					<img class="top-corners-rounded" src="http://i280.photobucket.com/albums/kk197/rohithvegesna/login-button_zpsbhqa2tm7.jpg" style="width: 100%"></img>
     					<span class="work-title">Login</span>
     						<paper-ripple fit></paper-ripple> 
	     				</div>	
     			</a>		
     		</div>
			<!-- To here-->
     	</div><br><br>
		
		<!-- SPACE BELOW DETAILS -->	
		<div class="empty-space">
			<div class="meta-container">
				<div class="wow fadeInUp detail-item watermark">
						<core-icon class="details-icon" icon="polymer"></core-icon>
				</div>
				<div class="wow fadeInUp detail-item watermark credits">
						<span class="text-description lightgray credits-text">Designed and all rights reserved to <a href="../">OTAKU</a>.</span>
				</div>
			</div>	
		</div>
			
			
			
			
			
		<!-- ===================================================================================================== -->
			
		<!-- JAVASCRIPT -->
		
		<!-- Animations -->
		<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
		
		<!-- Scrollwheel Smoothing -->
		<script>
			$(function()
			{	
				var $window = $(window);
				var scrollTime = 0.5;
				var scrollDistance = 270;
				$window.on("mousewheel DOMMouseScroll", function(event)
				{
	
					event.preventDefault();	
					var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
					var scrollTop = $window.scrollTop();
					var finalScroll = scrollTop - parseInt(delta*scrollDistance);
					TweenMax.to($window, scrollTime, 
					{
						scrollTo : { y: finalScroll, autoKill:true }, ease: Power1.easeOut, overwrite: 5	 
						
					});
				});
			});
		</script>
	</body>
</html>	