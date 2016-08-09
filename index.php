<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Otaku</title>
<?php
	$_SESSION['page'] = 'index';
	include 'header.php';
?>
						
	<body>
<!--popup start--!>
<?php include 'popup.php';?>
<!--popup end--!>
<!--start-home-->
		<div class="banner">
			<div class="container">
						<div class="header-3">
						<h3>DESIGN 
						PLANS</h3>
					</div>
					<div class="header-4">
						<h4>DESIGNS</h4>
					</div>
					<div class="header-2">
						<h2>FIND THE
						RIGHT WEBSITE</h2>
					</div>
					<div class="header-5">
						<h5>Web DESIGNING</h5>
					</div>
			</div>
		</div>
	</div>
			<div class="about_desc"> 
              <div class="container">    
                 	<div class="section group example">
						<div class="col-md-6 span_1_of_2">
						   <h3>We use 100% Responsive Designs</h3>
						   <p><span>Websites designe by us are fully responsive and can be adjustable to any screen resolutions. Our designs are simple and fast.</span></p>

		 				</div>
						<div class="col-md-6 span_1_of_2">
						   <h3>We don't hurt browsers</h3>
						   <p><span>Our websites have a code to decrease the loading time in any network. It decreases the consumption of data.</span></p>
						</div>
						<div class="clearfix"> </div>
				    </div>	        
           	  </div>             
       	  </div>  
		<!--content-top-->
		<div class="content_top">
			<div class="container">
				<h4>OUR BEST FEATURES</h4>
				<div class="col-md-3 grid_1">
					<i class="time"> </i>
					<h3>99.99% Uptime</h3>
					<p>Otaku gives a 99.99% uptime service and maintanance.</p>
				</div>
				<div class="col-md-3 grid_1 one">
					<i class="platform"> </i>
					<h3>Multi-Platform</h3>
					<p>Websites designed or our website can be used on any platform</p>
				</div>
				<div class="col-md-3 grid_1 two">
					<i class="fast"> </i>
					<h3>Amazingly Fast</h3>
					<p>Webdesigns have a code to decrese the loading time.</p>
				</div>
				<div class="col-md-3 grid_1 lost">
					<i class="data"> </i>
					<h3>Data Recovery</h3>
					<p>Otaku provides a data recovery at the time of dataloss etc,.</p>
				</div>
			</div>
		</div>
	<!--start-services-->
	<div class="services">
	<div class="container">
	   <div class="span_1">
		  <h3>Services Offered</h3>
		  <p>Contrary to popular belief, Lorem Ipsum is not simply random text. making it over 2000 years old. </p>
	   </div>
	   <div class="span_2">
	   	<div class="span_2-top">
		   	<div class="col-md-4">
		   		<ul class="hosting">
		   			<i class="icon1"> </i>
		   			<li class="host_desc">
		   				<h4>Web Hosting</h4>
		   				<p>Otaku provide you <strong>99.99%</strong> uptime web hosting servers at a very low price compared to other hostings.</p>
		   				<a class="button2" href="web.php">Learn More</a>
		   		    </li>
					<div class="clearfix"> </div>
		   		</ul>
		   	</div>
		   	<div class="col-md-4">
		   		<ul class="hosting">
		   			<i class="icon2"> </i>
		   			<li class="host_desc">
		   				<h4>Domain Names</h4>
						<p>Select a domain of your kind and leave it to us we will manage you domains get domain at one click.</p>		
		   				<a class="button2" href="domain.php">Learn More</a>
		   		    </li>
					<div class="clearfix"> </div>
		   		</ul>
		   	</div>
		   	<div class="col-md-4">
		   		<ul class="hosting">
		   			<i class="icon3"> </i>
		   			<li class="host_desc">
		   				<h4>File Exchange FTP</h4>
		   				<p>Otaku provides an instant file transfer to your hosting server we reccomend you to use <a href="https://filezilla-project.org/" target="_blank"><strong>FILE ZILLA</strong></a> for ftp services.</p>
		   				<a class="button2" href="host.php">Learn More</a>
		   		    </li>
					<div class="clearfix"> </div>
		   		</ul>
		   	</div>
		   	<div class="clearfix"> </div>
		 </div>
		 <div class="span_2-bottom">
		   	<div class="col-md-4">
		   		<ul class="hosting">
		   			<i class="icon4"> </i>
		   			<li class="host_desc">
		   				<h4>Split Packs</h4>
		   				<p>Otaku provides the split packs for clients who need hosting, email, and databases in same pack it is provided to user on request. Contact Us for special offers regaurding any service and get coupons.</p>
		   				<a class="button2" href="host.php">Learn More</a>
		   		    </li>
					<div class="clearfix"> </div>
		   		</ul>
		   	</div>
		   	<div class="col-md-4">
		   		<ul class="hosting">
		   			<i class="icon5"> </i>
		   			<li class="host_desc">
		   				<h4>Email Hosting</h4>
						<p>Otaku provides private emails for clients atlower prices i.e, starting from &#8377 200. Get best deals in email hosting. Contact Us for special offers regaurding any service and get coupons.</p>
		   				<a class="button2" href="email.php">Learn More</a>
		   		    </li>
		   		</ul>
		   	</div>
		   	<div class="col-md-4">
		   		<ul class="hosting">
		   			<i class="icon6"> </i>
		   			<li class="host_desc">
		   				<h4>SSL Certificates</h4>
		   				<p>Otaku provides the ssl certificates from reputed companies like <strong>VERISIGN, GEOTRUST, THAWTE</strong>. Contact Us for special offers regaurding any service and get coupons.</p>
		   				<a class="button2" href="ssl.php">Learn More</a>
		   		    </li>
					<div class="clearfix"> </div>
		   		</ul>
		   	</div>
		   	<div class="clearfix"> </div>
		 </div>
	   </div>
	</div>
</div> 
<!--domain-->
	<div class="domain">
	<div class="container">
		<h3>Search Your Perfect Domain Here !!</h3>
		<div class="search-box">
            <!-- domian search -->
			<script>
			function checkDomain()
			{
				var domain = $('#domainname').val() + $('#tldDisplay').text();
				// alert('Domain : ' + domain);
				$("#ava").text('');
				$("#notava").text('');
				
				$.ajax({
					type: "POST",
					url : "checkDomainName.php",    
					data: "domain=" + domain,
					success: function(data)
					{
						data.trim();
						// alert(data);
						if(data === '0')
						{
							$("#notava").text(domain+" is currently not available");
							$("#notava").fadeIn(1000);
							//$("#ava").fadeOut(500);
						}
						else
						{
							$("#ava").text(domain+" is available.");
							//$("#notava").fadeOut(500);
							$("#ava").fadeIn(1000);
						}     
					}  
				});
			}

			</script>
              <form id="domianChecker" method="post" action="#" >
                  <div class="domain-search-box">
                     <!--  <input type="hidden" name="showrelated" value="true">-->
                        <input type="text" id="domainname" class="domains-input optionalField" onfocus="this.value = '';" value="Find your perfect domain name today." />
                        <div class="domains-select"> <span id="tldDisplay" class="tlds">.com</span> <span class="tlds-dd"> </span>
                          <div class="ie-fix">
                            <select class="brd-fix" id="tldlist">								
							<?php
								require_once 'ca/db.php';
								$sql = "SELECT * FROM plans where ServiceType='Domain'";
								$res = mysqli_query( $db, $sql );
								//$array = mysqli_fetch_array($res);
								while( ($array = mysqli_fetch_array($res)) && (!is_bool($array)) )
								{
									echo '<option value="'.$array['Plan'].'">'.$array['Plan'].'</option>';						
								}
							?>
                            </select>
                          </div>
                        </div>
                        <input type="submit" name="submit" value="" onclick="checkDomain();return false;" class="domain-submit" />
                    </div>      
                 </form>
                 </div>
		
				<div style="padding-top: 30px;">
					<h3 id="ava" style="color: #2ECC71;text-transform: none;"></h3>
					<h3 id="notava" style="color:#F4589F;text-transform: none;"></h3>
				</div>
				 <script src="js/jquery.easydropdown.js"></script>
                       <script type="text/javascript">
                       $('#tldlist').change(function(event) {
                            $('#tldDisplay').text( '.' +$('#tldlist').val());
                        }); 
                    </script>
              <!--domain-search -->            
	    </div>
</div>
	<div class="pricing-plans">
		<div class="container">
			<div class="price-head">
				<h3>OUR  WEBDESIGNING PRICING</h3>
			</div>
				<div class="pricing-grids">
						<div class="pricing-grid1">
							<div class="price-value">
									<h4><a href="#"> BASIC</a></h4>
									<h5><span>Rs.5000</span><lable> / website</lable></h5>
							</div>
							<div class="price-bg">
							<ul>
								<li class="whyt"><a href="#">Responsive Design</a></li>
								<li><a href="#">0 - Domain Maintanance</a></li>
								<li class="whyt"><a href="#">0 - Email Addresses</a></li>
								<li><a href="#">Single Page Basic Website</a></li>
								<li class="whyt lost"><a href="#">24/7 Support</a></li>
							</ul>
							<div class="cart1">
								<a class="popup-with-zoom-anim" href="ca/order.php">ORDER</a>
							</div>
							</div>
						</div>
						<div class="pricing-grid2">
							<div class="price-value two">
								<h4><a href="#">STANDARD</a></h4>
								<h5><span>Rs.13000</span><lable> / website</lable></h5>
							</div>
							<div class="price-bg">
							<ul>
								<li class="whyt"><a href="#">Fully Responsive Design</a></li>
								<li><a href="#">1 - Domain Maintanance</a></li>
								<li class="whyt"><a href="#">10 - E-Mail Addresses</a></li>
								<li><a href="#">Multi Page Medium Website</a></li>
								<li class="whyt lost"><a href="#">24/7 Support</a></li>
							</ul>
							<div class="cart2">
								<a class="popup-with-zoom-anim" href="ca/order.php">ORDER</a>
							</div>
							</div>
						</div>
						<div class="pricing-grid3">
							<div class="price-value three">
								<h4><a href="#">PREMIUM</a></h4>
								<h5><span>Contact</span><lable> For Price</lable></h5>
							</div>
							<div class="price-bg">
							<ul>
								<li class="whyt"><a href="#">Fully Responsive Design</a></li>
								<li><a href="#">&infin; - Domain Names</a></li>
								<li class="whyt"><a href="#">&infin; - E-Mail Address </a></li>
								<li><a href="#">Website Designed As Per Client Defines</a></li>
								<li class="whyt lost"><a href="#">24/7 Support</a></li>
							</ul>
							<div class="cart3">
								<a class="popup-with-zoom-anim" href="ca/order.php">ORDER</a>
							</div>
							</div>
						</div>
							<div class="clearfix"> </div>
							</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- Add fancyBox main JS and CSS files -->
				<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
				<link href="css/popup.css" rel="stylesheet" type="text/css">
	<!--//End-pricing-plans-->
<div class="contact_index">
	<div class="container">
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
			  <li><a href="tel:7794840555"> <i class="phone"> </i></a></li>
			</ul>
		</div>
	</div>
</div>
<?php include 'footer.php';?>
</body>
</html>