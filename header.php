<meta name="viewport" content="width=device-width, initial-scale=1" /><meta name="author" content="Otaku"><meta name="description" content="Get domains, hosting spaces, emails, ssl certificates at cheaper prices. And get your websites designed as you like at low prices."><link rel="icon" type="image/x-icon" href="css/favicon.ico" />
<link rel="shortcut icon" href="css/favicon.ico" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/main.css">
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<link href="css/popup.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/box.css">	
<script src="js/jquery.min.js"> </script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script src="js/waypoint.js"></script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,100italic,400italic,700italic|Abril+Fatface|Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//webfonts	-->
</head>

<!--<div id="google_translate_element"></div><script type="text/javascript">
		function googleTranslateElementInit() {
		new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
		}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>-->

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

<div id="home" class="header">
				<div id="navbarelm" class="strip">
					 <div class="container">
						<p class="location"><i class="location"></i>Vishakapatnam,INDIA.</p>
						<p class="phonenum">Any Details Or Queries Just Give Missed Call To +91-7794840555.</p>
							<div class="clearfix"></div>
					</div>
				</div>
				<div id="dummybox"></div>
	<div id="navbarr" class="header-bottom" role="navigation" style="/*position: relative;*/
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
						<li><a <?php if( isset($_SESSION['page']) && $_SESSION['page'] == 'index' )		echo 'class="active"';?> href="/"><span data-hover="Home">Home</span></a></li> 
						<li><a <?php if( isset($_SESSION['page']) && $_SESSION['page'] == 'about' )		echo 'class="active"';?> href="about.php"><span data-hover="About">About</span></a></li>
						<li><a <?php if( isset($_SESSION['page']) && $_SESSION['page'] == 'services' )	echo 'class="active"';?> class="pricina" href="#"><span data-hover="SERVICES">SERVICES</span></a></li>
						<li><a <?php if( isset($_SESSION['page']) && $_SESSION['page'] == 'pricing' )	echo 'class="active"';?> href="pricerangechart.php"><span data-hover="PRICING">PRICING</span></a></li>
						<li><a <?php if( isset($_SESSION['page']) && $_SESSION['page'] == 'howto' )	echo 'class="active"';?> href="how.php"><span data-hover="HOWTO">HOW TO</span></a></li>
						<li><a <?php if( isset($_SESSION['page']) && $_SESSION['page'] == 'contact' )	echo 'class="active"';?> href="contact.php"><span data-hover="Contact">Contact</span></a></li>
						<li><a <?php if( isset($_SESSION['page']) && $_SESSION['page'] == 'login' )		echo 'class="active"';?> href="ca/"><span data-hover="LOGIN">LOGIN</span></a></li>
					</nav>
						<div class="wrappricedd" style="z-index: 1000;display:none">
							<div class="wrappriceopts" style="z-index: 1000">
								<div href="web.php">Webdesigning</div>
								<div href="host.php">Webhosting</div>
								<div href="domain.php">Domains</div>
								<div href="ssl.php">SSL</div>
								<div href="email.php">Emails</div>
							</div>
						</div>
					</ul>
				
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
					</style>
				</div>
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
<?php if( isset($_SESSION['page']) && $_SESSION['page'] != 'index' )
{
	echo '</div>';
}
?>