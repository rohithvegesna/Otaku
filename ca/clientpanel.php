<!-- Header -->
	<body>
		<style>
			#notifier
			{
			display:none;
			position: absolute;
			top: 5%;		
			position: fixed;
			width: 80%;
			margin-left: 17%;
			text-align: center;
			background-color: black;
			color: orange;
			border-radius: 5px;
			border: 1px white dotted;
			z-index: 100;
			}
		</style>
		<script>
			$(function() {
				var notifier = document.getElementById("notifier");
				if( notifier != null )
				{
					$('#notifier').show(500);
					setTimeout( function(){				
						$('#notifier').hide(500);
					}, 5000 );
				}
			});
		</script>
		<?php
			if( isset($_SESSION['showMessage']) )
			{
				echo '<div id="notifier">'.$_SESSION['showMessage'].'</div>';
				unset($_SESSION['showMessage']);
			}
		?>
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<h1 id="title"><?php echo $_SESSION['userName'];?></h1>
							<p>Online</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Home</span></a></li>
								<li><a href="#orders" id="orders-link" class="skel-layers-ignoreHref"><span class="icon fa-bars">Orders</span></a></li>
								<li><a href="#services" id="services-link" class="skel-layers-ignoreHref"><span class="icon fa-server">Services</span></a></li>
								<li><a href="#invoices" id="invoices-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Invoices</span></a></li>
								<li><a href="#profile" id="profile-link" class="skel-layers-ignoreHref"><span class="icon fa-user-plus">Profile</span></a></li>
								<li><a href="logout.php" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-power-off">Logout</span></a></li>
							</ul>
						</nav>

				</div>

				<div class="bottom">
					
					<script>
						$(function() {
							$("#messagetoadmin").click(function() {								
								$( "#dialog" ).dialog({
									width: 480,
									height:350,
									dialogClass: 'TheDialog'
								});
							});
						});
					</script>
					<div style="display:none" id="dialog" title="Send your message">
						<form action="SendMsgToAdmin.php" method="post"><br/>
							<input type="text" style="text-size:15px;width:100%" name="msg" placeholder="Enter your message to admin..."/><br/>
							<input type="submit" style="text-size:15px" value="Submit"/>
						</form>
					</div>
					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a id="messagetoadmin" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>

				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt">Hi! <strong>Welcome</strong> to your <br />
								<strong>Client Area</strong></h2>
								<p>Here you can see the completed and ordered <strong>Websites</strong><br />
								Under <strong>Invoices</strong> you can download the bils produced regaurding the website</p>
							</header>

							<footer>
								<a href="#orders" class="button scrolly">Orders</a>
								<a href="#services" class="button scrolly">Services</a>
								<a href="#invoices" class="button scrolly">Invoices</a>
								<a href="order.php" class="button scrolly">Order Service</a>
								<a href="#profile" class="button scrolly">Profile</a>
								<a href="../" class="button scrolly">Return home</a>
							</footer>

						</div>
					</section>

				<!-- Portfolio -->
					<section id="orders" class="two">
						<div class="container">

							<header>
								<h2>Your Orders</h2>
							</header>

							<!--<p>All completed websites are shown here.</p>-->
							<style>
								.editForm
								{
								display: none;
								font-size:0.8em;
								}
							</style>
							<script>
								$(function() {
									$(".diatr").click( function(e)
									{
										$( "#dialog"+$(this).attr('dialogid') ).dialog({
											height: 300,
											width: 500,
											modal: true,
											resizable: true,
											dialogClass: 'TheDialog'
										}); 
									});
									$(".adiatr").click( function(e)
									{
										$( "#adialog"+$(this).attr('dialogid') ).dialog({
											height: 300,
											width: 500,
											modal: true,
											resizable: true,
											dialogClass: 'TheDialog'
										}); 
									});
									$('.wlinkbtn').click( function(ev){
										// alert('Test');
										isClickUsed = 1;
										window.open($(this).attr('href'), 'Otaku Invoice', 'window settings');
									});
								});
							</script>
							<div class="container" style="padding: 0;">          
								<table style="font-size:15px;
								-webkit-user-select: none;   
								-moz-user-select: none; 
								-ms-user-select: none; 
								
								-o-user-select: none;
								user-select: none;">
									<thead>
										<tr style="border-bottom:1px black dotted">
											<th>UserID</th>
											<th>PlanType</th>
											<th>ServiceType</th>
											<th>NoOfServices</th>
											<th>Email</th>
											<th>Phone</th>
											<th>ServiceDuration</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										
										<style>
											.diamake
											{
											display:none;
											width: 75%;
											font-size:.8em; 
											}
											dt,dd
											{
											display: inline-block;
											}
											.diatr
											{
											trasition: .5s all;
											cursor:pointer;
											}
											.diatr:hover
											{
											background-color:rgb(244, 150, 150);
											color:white;
											}
											.TheDialog.ui-dialog
											{
											background:white;
											}
											input{
											width: 75%;
											}
											.linkbtn, .wlinkbtn
											{
											padding:5px;
											margin-left:2px;
											}
										</style>
										<?php
											require 'db.php';
											$sql = 'SELECT * FROM orders WHERE UserID='.$_SESSION['userID'];
											$res = mysqli_query( $db, $sql );
											//$array = mysqli_fetch_array($res);
											while($array = mysqli_fetch_array($res))
											{
												echo '<tr class="diatr" mid="'.$array['ID'].'" dialogid='.$array['ID'].'><td>'.getUserNameByID($array['UserID'],$db).'</td>'.
												'<td>'.$array['PlanType'].'</td>'.
												'<td>'.$array['ServiceType'].'</td>'.
												'<td>'.$array['NoOfServices'].'</td>'.
												'<td>'.$array['Email'].'</td>'.
												'<td>'.$array['Phone'].'</td>'.
												'<td>'.$array['ServiceDuration'].'</td>'.
												'<td>'.$array['Status'].'</td></tr>';
												echo '<div class="diamake" title="More" id="dialog'.$array['ID'].'">'
												.'<dt>Domain</dt> : </dd>'.$array['DomainName'].'.'.$array['DomainExt'].
												'<br/></dd><dt>ExtendServices</dt> :</dd>'.$array['ExtendServices'].
												'<br/></dd><dt>AdditionalMsg</dt> : </dd>'.$array['AdditionalMsg'].
												'<br/></dd><dt>ServicePlanType</dt> :</dd>'.$array['ServicePlanType'].'</dd></div>'; 
											}
										?>
									</tbody>
								</table>
					</section>

					<section id="services" class="three">
							<div class="container" style="padding: 0;">
								
								<header>
									<h2>Services Accepted</h2>
								</header>
								
								<div class="container" style="padding: 0;">          
									<table style="font-size:15px;
									-webkit-user-select: none;       
									-moz-user-select: none;
									-ms-user-select: none;
									-o-user-select: none;
									user-select: none;">
										<thead>
											<tr style="border-bottom:1px black dotted">
												<th>UserID</th>
												<th>PlanType</th>
												<th>ServiceType</th>
												<th>NoOfServices</th>
												<th>Email</th>
												<th>Phone</th>
												<th>ServiceDuration</th>
												<th>Status</th>
												<th>Price</th>
											</tr>
										</thead>
										<tbody>
											<?php
												require 'db.php';
												$sql = 'SELECT * FROM services WHERE UserID='.$_SESSION['userID'];
												$res = mysqli_query( $db, $sql );
												
												while($array = mysqli_fetch_array($res))
												{
													echo '<tr class="adiatr" mid="'.$array['ID'].'" dialogid='.$array['ID'].'><td>'.getUserNameByID($array['UserID'],$db).'</td>'.
													'<td>'.$array['PlanType'].'</td>'.
													'<td>'.$array['ServiceType'].'</td>'.
													'<td>'.$array['NoOfServices'].'</td>'.
													'<td>'.$array['Email'].'</td>'.
													'<td>'.$array['Phone'].'</td>'.
													'<td>'.$array['ServiceDuration'].'</td>'.
													'<td>'.$array['Status'].'</td>'.
													'<td>'.$array['Price'].'</td>';
													echo '<div class="diamake" title="More" id="adialog'.$array['ID'].'">'
													.'<dt>Domain</dt> : </dd>'.$array['DomainName'].'.'.$array['DomainExt'].
													'<br/></dd><dt>ExtendServices</dt> :</dd>'.$array['ExtendServices'].
													'<br/></dd><dt>AdditionalMsg</dt> : </dd>'.$array['AdditionalMsg'].
													'<br/></dd><dt>Date Of Order</dt> : </dd>'.date(DATE_RFC2822,$array['DOO']).
													'<br/></dd><dt>Date Of Acceptence</dt> : </dd>'.date(DATE_RFC2822,$array['DOA']).
													'<br/></dd><dt>ServicePlanType</dt> :</dd>'.$array['ServicePlanType'].'</dd></div>'; 
												
												}
											?>
										</tbody>
									</table>
								</div>
							</section>
					
				<!-- About Me -->
					<section id="invoices" class="two">
						<div class="container">

							<header>
								<h2>Invoices</h2>
							</header>

							<p>The <strong>Invoices/Bills</strong> generated here are automatically generated by website spicemen signature is not required you can download
							 or save the invoices.</p>
							
							<table style="font-size:15px;
							-webkit-user-select: none;       
							-moz-user-select: none;
							-ms-user-select: none;
							-o-user-select: none;
							user-select: none;">
								<thead>
									<tr style="border-bottom:1px black dotted">
										<th>UserID</th>
										<th>AdminID</th>
										<th>Services</th>
										<th>DOI</th>
										<th></th>
							</tr>
								</thead>
								<tbody>
									<?php
										require 'db.php';
										$sql = "SELECT * FROM invoices WHERE UserID='".$_SESSION['userID']."'";
										$res = mysqli_query( $db, $sql );
										
										while($array = mysqli_fetch_array($res))
										{
											echo '<tr><td>'.getUserNameByID($array['UserID'],$db).'('.$array['UserID'].')</td>'.
											'<td>'.getUserNameByID($array['GAdminID'],$db).'('.$array['GAdminID'].')</td>'.
											'<td>'.$array['ServiceIDs'].'</td>'.
											'<td>'.date(DATE_RFC2822,$array['DOI']).'</td>'.
											'<td><button href="functions/showInvoice.php?invoiceid='.$array['ID'].'" class="wlinkbtn">Show Invoice</button></td></tr>';
										}
									?>
								</tbody>
							</table>

						</div>
					</section>
					
					<section id="profile" class="three">
						<div class="container" style="padding: 0;">
						<header>
						<?php
						require 'db.php';
						$sql = 'SELECT * FROM clients WHERE ID='.$_SESSION['userID'];
						$query = mysqli_query( $db, $sql );
						$col = mysqli_fetch_array($query);
						$user = $col['UserName'];
						$e = $col['Email'];
						$num = $col['Mobile'];
						$add = $col['Address'];
						?>
								<h2>Profile</h2>
							</header>
							<p>Note : The changes made here will be sent to your email.</p>
								<div class="row">
								<div class="col-sm-6" style="max-width:50%;padding:80px;"><!--<div style="max-width:50%;">-->
									Username : <?php echo "$user";?><br/>
									Email : <?php echo "$e";?>
								</div>
								<div class="col-sm-6" style="max-width:50%;padding:80px;"><!--<div style="max-width:50%;">-->
									Mobile : <?php echo "$num";?><br/>
									Address : <?php echo "$add";?>
								</div>
								</div>
						<script>
						$(function()
						{	
						$('.error').hide();
						});


						function validateForm1() {

						$('.error').hide();
						var x = document.forms["update"]["pass"].value;
						if(x == null || x == '') 
						{
						$('#perror').text("UserName must be filled out and must atleast contain 6 characters.");
						$('#perror').fadeIn(500);
						return false;
						}
						}
						</script>
							<div style="max-width:50%;padding:10px;">
								<form name="update" action="userupdate.php" onsubmit="return validateForm1();" method="post">
								<input type="password" class="textbox" placeholder="Password" id="pass" name="pass">
								<div class="alert-box error" id="perror" style="width:50%"></div><br/>
								<input type="submit" value="Change" name="submit" id="send">
								</form>
							</div>
					</section>
					
</div>

		<!-- Footer -->
			<div id="footer">

				<!-- Copyright -->
					<ul class="copyright">
						<a target="_blank" href="http://www.copyrighted.com/copyrights/view/4chq-rbx6-4e8n-cnb4"><img border="0" alt="Copyrighted.com Registered &amp; Protected 
						4CHQ-RBX6-4E8N-CNB4" title="Copyrighted.com Registered &amp; Protected 
						4CHQ-RBX6-4E8N-CNB4" width="150" height="40" src="http://static.copyrighted.com/images/seal.gif" /></a>
						<li>&copy; <?php echo date('Y') ?> All Rights Reserved Design by <a href="https://www.facebook.com/groups/Otakuwds/">Otaku</a>.</li>
					</ul>

			</div>

		<!-- Scripts -->
			<script src="../js/2jquery.min.js"></script>
			<script src="../js/2jquery.scrolly.min.js"></script>
			<script src="../js/2jquery.scrollzer.min.js"></script>
			<script src="../js/2skel.min.js"></script>
			<script src="../js/2util.js"></script>
			<script src="../js/2main.js"></script>
			
			<script src="../js/jquery.js"></script>
			<script src="../js/jquery-ui.js"></script>
			<link href="../css/jquery-ui.css" rel="stylesheet">
<?php include '../chat.php';?>
	</body>