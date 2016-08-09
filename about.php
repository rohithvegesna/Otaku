<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Otaku ~ about us</title>
<?php 
	$_SESSION['page'] = 'about';
	include 'header.php';?>
<body>
	<div class="about_two"> 
              <div class="container"> 
						<h3>A FEW WORDS ABOUT OTAKU</h3>			  
                 	<div class="col-md-5 ab-pic">
				 					<img src="http://i280.photobucket.com/albums/kk197/rohithvegesna/ab-pic_zpsuobfbno0.png" />
				 			</div>
				 			<div class="col-md-7 ab-text">
				 				<p><strong>Otaku</strong> tends to fulfil the dreams and needs of custumers. It was started in the year 2015 with a great expiriances of new custumer deals and fulfilling their dreams and now it was registered. And now Otaku is running with 99.99% uptime, it is also offering cash back offers on order cancellations etc,.</p>
								<span><strong>Otaku</strong> was a dream and thought of <strong>Mr.Rohith Varma Vegesna</strong> to make this companey a well developed and reputed in community. With help of his partner <strong>Mr.Harsha Raghu Ram</strong> developed this website/companey with 99.9% well maintained website. He and his coading skills made users to enjoy simplicities and happiness clintarea made by Otaku has specifications which were never used or implimented by other websites.</span>
				 			</div>
							<div class="clerfix"></div>
				</div>             
			</div>  
		  <!--list-performance-->
		  <div class="list-performance">
		   	 <div class="container">
			 <div class="performance-inner">
			   <div class="col-md-6 provide">
			   	<h3>What We Provide</h3>
			   	<ul>
			   		<li><a href="#"><i class="tick"></i></a>Website Designing</li>
			   		<li><a href="#"><i class="tick"></i></a>Domains at cheap prices</li>
			   		<li><a href="#"><i class="tick"></i></a>Split Hosting Plans</li>
			   		<li><a href="#"><i class="tick"></i></a>Shared Hosting Plans</li>
			   		<li><a href="#"><i class="tick"></i></a>Custom Emails</li>
			   		<li><a href="#"><i class="tick"></i></a>SSL Certificates</li>
			   	</ul>
			   </div>
			    <div class="col-md-6 bars">
			     <h3>Availability</h3>
			     <ul class="progress-bars">
			     	<li><div class="progress">
                           <div class="bar" style="width:100%;"></div>
                        </div>
                    </li>
			     	<li><div class="progress">
                           <div class="bar" style="width:95%;"></div>
                        </div></li>
			     	<li><div class="progress">
                           <div class="bar" style="width:90%;"></div>
                        </div></li>
			     	<li><div class="progress">
                           <div class="bar" style="width:95%;"></div>
                        </div></li>
			     	<li><div class="progress">
                           <div class="bar" style="width:80%;"></div>
                        </div></li>
			     </ul>
			   </div>
			 </div>
		   </div>
		 </div>
		 <div class="team-section">
		    <div class="container"">
			  <div class="team-grids">
						<h3>OUR TEAM</h3>
						<div class="col-md-4 team">
								<img src="http://i280.photobucket.com/albums/kk197/rohithvegesna/team-3_zpsce50cthu.jpg" class="img-responsive" alt="" />
								<h4>Rohith Varma Vegesna</h4>
								<p>Mechanical Engineer at Gitam University Vishakapatnam</p>
							</div>
							<div class="col-md-4 team">
								<img src="http://i280.photobucket.com/albums/kk197/rohithvegesna/team-4_zpsgjkwpimt.jpg" class="img-responsive" alt="" />
								<h4>Harsha Raghu Ram</h4>
								<p>Mechanical Engineer at Gitam University Vishakapatnam</p>
							</div>
			  <div class="clearfix"></div>
			  </div>
			</div>
		 </div>
<?php include 'footer.php';?>
</body>
</html>