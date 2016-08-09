<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Otaku ~ domains</title>
<?php
	$_SESSION['page'] = ''; 
	include 'header.php';?>
<body>

	<div class="domain">
	<!--domain-->
	<div class="container">
	    <div class="domain-head">
		    <h2>Search Domain Name</h2>
			<p>Search your domain name and set plans for number of years. We also provide <strong>SSL</strong> certificates from highly trusted companies like <strong>VERISIGN, GEOTRUST, THAWTE</strong> in a price range of &#8377.5000 - 80000/-. 
			We also provide <strong>EMAIL</strong>hosting amd payed hosting services for more information please refer our 
			<a href="pricerangechart.php" target="_blank"><button type="button" class="btn btn-success"><strong>PRICE RANGE CHART</strong></button></a></p>
		</div>
		<h3>Your Perfect Domain is Here !!</h3>
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
	<div class="domain-bottom">
		<div class="container">
		     <h4>New domain extensions are here!</h4>
			<div class="box-tab">
			<style>
				td
				{
					text-align: center;
					vertical-align: middle;
				}
				thead > tr > td
				{
				padding: 1.3em;
				font-weight: 700;
				border-bottom: 1px black dotted;
				}
			</style>
				<table class="table-standard small-table">
				<thead>
					<tr>
						<td>Domain Name</td>
						<td>Domain Price /year (INR)</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<?php
						require 'ca/db.php';
						$sql = "SELECT * FROM plans where ServiceType='Domain'";
						$res = mysqli_query( $db, $sql );
						//$array = mysqli_fetch_array($res);
						while( ($array = mysqli_fetch_array($res)) && (!is_bool($array)) )
						{
							echo '<tr><td>'.$array['Plan'].'</td>'.
							'<td>'.$array['Price'].'</td>'.
							'<td><a class="btn btn-success" href="ca/order.php">Order</a></td></tr>';							
						}
					?>
				</tbody>
			</table>
			</div>			
		</div>
	</div>
	<div class="domain-images">
		<div class="container">
		   <div class="col-md-6 dom-grid">
		   <img src="http://i280.photobucket.com/albums/kk197/rohithvegesna/s1_zpsbr9shhes.jpg" class="img-responsive" alt=""/>
		      <h4>Domains, Hosting, Emails, and more</h4>
			   <p>Simplify your online life keep your domains, hosting, email, and more right here at Media Temple. A single, simple Account Center lets you easily manage all your services in one place.</p>
		   </div>
		    <div class="col-md-6 dom-grid">
			<img src="http://i280.photobucket.com/albums/kk197/rohithvegesna/s2_zpsn7ghkzz6.jpg" class="img-responsive" alt=""/>
			 <h4>Secure Sockets Layer (SSL) Certificate</h4>
			 <p>We also provide you a website with <strong>https://</strong> protocalling with a ssl certificate on a price range selected by client</p>
		   </div>
		   	<div class="clearfix"></div>
		</div>
	</div>
<?php include 'footer.php';?>
</body>
</html>