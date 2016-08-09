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
			<div id="header"  style="width:15%;">

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
								<li><a href="#orders" id="orders-link" class="skel-layers-ignoreHref"><span class="icon fa-shopping-cart">Orders</span></a></li>
								<li><a href="#clients" id="clients-link" class="skel-layers-ignoreHref"><span class="icon fa-group">Clients</span></a></li>
								<li><a href="#services" id="services-link" class="skel-layers-ignoreHref"><span class="icon fa-bars">Services</span></a></li>
								<li><a href="#invoices" id="invoices-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Invoices</span></a></li>
								<li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-user-secret">ContactM</span></a></li>
								<li><a href="#messages" id="messages-link" class="skel-layers-ignoreHref"><span class="icon fa-user-plus">ClientM</span></a></li>
								<li><a href="logout.php" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Logout</span></a></li>
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
			<div id="main" style="margin-left: 15%;">

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt">Hi! <strong>Welcome</strong> to your <br />
								<strong>Admin Panel</strong></h2>
								<p>Here you can see the completed and ordered <strong>Websites</strong><br />
								Under <strong>Invoices</strong> you can download the bils produced regaurding the website</p>
							</header>

							<footer>
								<a href="#orders" class="button scrolly">Orders</a>
								<a href="#clients" class="button scrolly">Clients</a>
								<a href="#services" class="button scrolly">Services</a>
								<a href="#invoices" class="button scrolly">Invoices</a>
								<a href="../" class="button scrolly">Return home</a>
							</footer>

						</div>
					</section>

					<section id="orders" class="two">
						<div class="container" style="padding: 0;">

							<header>
								<h2>Orders Recieved</h2>
							</header>
							<style>
								.editForm
								{
									display: none;
									font-size:0.8em;
								}
							</style>
							<script>
								$(function() {
									
									var DELAY = 200, clicks = 0, timer = null;
									var isClickUsed = 0;

									$(function(){
										
										$(".adiatr").on("click", function(e){
											if( isClickUsed == 0 )
											{
												var diat = this;
												clicks++;  //count clicks											
												if(clicks === 1) {
													
													timer = setTimeout(function(diat) 
													{
														$( "#adialog"+$(diat).attr('dialogid') ).dialog({
															height: 300,
															width: 500,
															modal: true,
															resizable: true,
															dialogClass: 'TheDialog'
														}); 												
														clicks = 0;													
													}, DELAY, diat);
												} else {												
													clearTimeout(timer);
													
													$( '#aeditForm'+$(this).attr('mid') ).dialog({
														height: 630,
														width: 600,
														modal: true,
														resizable: true
													});		
													clicks = 0;
												}
											}
											else
											isClickUsed = 0;
											
										})
										.on("dblclick", function(e){
											e.preventDefault();
										});
										
									}); 
									
									$(function(){
										
										$(".diatr").on("click", function(e){
											if( isClickUsed == 0 )
											{
												var diat = this;
												clicks++;  //count clicks											
												if(clicks === 1) {
													
													timer = setTimeout(function(diat) 
													{
														$( "#dialog"+$(diat).attr('dialogid') ).dialog({
															height: 300,
															width: 500,
															modal: true,
															resizable: true,
															dialogClass: 'TheDialog'
														}); 												
														clicks = 0;													
													}, DELAY, diat);
												} else {												
													clearTimeout(timer);
													
													$( '#editForm'+$(this).attr('mid') ).dialog({
														height: 630,
														width: 600,
														modal: true,
														resizable: true
													});		
													clicks = 0;
												}
											}
											else
												isClickUsed = 0;
											
										})
										.on("dblclick", function(e){
											e.preventDefault();
										});
										
									}); 
									$('.linkbtn').click( function(ev){
										// alert('Test');
										isClickUsed = 1;
										window.location.href = $(this).attr('href');
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
											<!--<th>Spcf</th>-->
											<th>NoOfServices</th>
											<th>Email</th>
											<th>Phone</th>
											<th>ServiceDuration</th>
											<th>Status</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										
									<style>
										.diamake, .adiamake
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
										$sql = 'SELECT * FROM orders';
										$res = mysqli_query( $db, $sql );
										
										while($array = mysqli_fetch_array($res))
										{
											echo '<tr class="diatr" mid="'.$array['ID'].'" dialogid='.$array['ID'].'><td>'.getUserNameByID($array['UserID'],$db).'</td>'.
											'<td>'.$array['PlanType'].'</td>'.
											'<td>'.$array['ServiceType'].'</td>'.
											'<td>'.$array['NoOfServices'].'</td>'.
											'<td>'.$array['Email'].'</td>'.
											'<td>'.$array['Phone'].'</td>'.
											'<td>'.$array['ServiceDuration'].'</td>'.
											'<td>'.$array['Status'].'</td>'.
											'<td><button href="functions/orderAccept.php?orderid='.$array['ID'].'" class="linkbtn">Accept</button><button href="functions/orderDecline.php?orderid='.$array['ID'].'" class="linkbtn">Decline</button></td></tr>';
											echo '<div class="diamake" title="More" id="dialog'.$array['ID'].'">'
												.'<dt>Domain</dt> : </dd>'.$array['DomainName'].'.'.$array['DomainExt'].
												'<br/></dd><dt>ExtendServices</dt> :</dd>'.$array['ExtendServices'].
												'<br/></dd><dt>AdditionalMsg</dt> : </dd>'.$array['AdditionalMsg'].
												'<br/></dd><dt>ServicePlanType</dt> :</dd>'.$array['ServicePlanType'].'</dd></div>'; 
											
											echo '<div style="width:100%" class="editForm" title="Edit Details"id="editForm'.$array['ID'].'"><form method="post" action="editOrder.php">'.
												'<input type="hidden" name="OrderID" value="'.$array['ID'].'"/><br/>'.
												'<input type="text" name="UserID" placeholder="UserID" value="'.$array['UserID'].'" /><br/>'.
												'<input type="text" name="PlanType" placeholder="PlanType" value="'.$array['PlanType'].'" /><br/>'.
												'<input type="text" name="ServiceType" placeholder="ServiceType" value="'.$array['ServiceType'].'" /><br/>'.
												'<input type="text" name="DomainName" placeholder="DomainName" value="'.$array['DomainName'].'" /><br/>'.
												'<input type="text" name="DomainExt" placeholder="DomainExt" value="'.$array['DomainExt'].'" /><br/>'.
												'<input type="text" name="NoOfServices" placeholder="NoOfServices" value="'.$array['NoOfServices'].'" /><br/>'.
												'<input type="text" name="Email" placeholder="Email" value="'.$array['Email'].'" /><br/>'.
												'<input type="text" name="Phone" placeholder="Phone" value="'.$array['Phone'].'" /><br/>'.
												'<input type="text" name="ServiceDuration" placeholder="ServiceDuration" value="'.$array['ServiceDuration'].'" /><br/>'.
												'<input type="text" name="ExtendServices" placeholder="ExtendServices" value="'.$array['ExtendServices'].'" /><br/>'.
												'<input type="text" name="ServicePlanType" placeholder="ServicePlanType" value="'.$array['ServicePlanType'].'" /><br/>'.
												'<input type="text" name="AdditionalMsg" placeholder="AdditionalMsg" value="'.$array['AdditionalMsg'].'" /><br/>'.
												'<input type="text" name="Status" placeholder="Status" value="'.$array['Status'].'" /><br/>'.
												'<input type="submit" value="Save" name="submit"/><br/>'.
											'</form></div>';
										}
										?>
									</tbody>
								</table>
							</div>
					</section>

					<section id="clients" class="three">
						<div class="container">
							
							<header>
								<h2>Our Clients</h2>
							</header>
							
							<p>The F***ers.</p>
							
							<table style="font-size:15px;
							-webkit-user-select: none;     
							-moz-user-select: none;
							-ms-user-select: none;
							-o-user-select: none;
							user-select: none;">
								<thead>
									<tr style="border-bottom:1px black dotted">
										<th>UserID</th>
										<th>UserName</th>
										<th>Email</th>
										<th>Mobile</th>
										<th>Address</th>
										<th>IsAdmin</th>
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
									</style>
									<?php
										require 'db.php';
										$sql = 'SELECT * FROM clients';
										$res = mysqli_query( $db, $sql );
										//$array = mysqli_fetch_array($res);
										while($array = mysqli_fetch_array($res))
										{
											echo '<tr><td>'.$array['ID'].'</td>'.
											'<td>'.$array['UserName'].'</td>'.
											'<td>'.$array['Email'].'</td>'.
											'<td>'.$array['Mobile'].'</td>'.
											'<td>'.$array['Address'].'</td>'.
											'<td>'.$array['IsAdmin'].'</td></tr>';
											// echo '<div class="diamake" 
											
										}
									?>
								</tbody>
							</table>
							
						</div>
					</section>
					
						<section id="services" class="two">
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
												<th></th>
											</tr>
										</thead>
										<tbody>
											<?php
												require 'db.php';
												$sql = 'SELECT * FROM services';
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
													'<td>'.$array['Price'].'</td>'.
													'<td><button href="functions/orderTerminate.php?serviceid='.$array['ID'].'" class="linkbtn">Terminate</button><button href="functions/generateInvoice.php?serviceids='.$array['ID'].'&userid='.$array['UserID'].'" class="linkbtn">gInvoice</button></td></tr>';
													echo '<div class="diamake" title="More" id="adialog'.$array['ID'].'">'
													.'<dt>Domain</dt> : </dd>'.$array['DomainName'].'.'.$array['DomainExt'].
													'<br/></dd><dt>ExtendServices</dt> :</dd>'.$array['ExtendServices'].
													'<br/></dd><dt>AdditionalMsg</dt> : </dd>'.$array['AdditionalMsg'].
													'<br/></dd><dt>Date Of Order</dt> : </dd>'.date(DATE_RFC2822,$array['DOO']).
													'<br/></dd><dt>Date Of Acceptence</dt> : </dd>'.date(DATE_RFC2822,$array['DOA']).
													'<br/></dd><dt>ServicePlanType</dt> :</dd>'.$array['ServicePlanType'].'</dd></div>'; 
													
													echo '<div style="width:100%" class="editForm" title="Edit Details" id="aeditForm'.$array['ID'].'"><form method="post" action="functions/editService.php">'.
													'<input type="hidden" name="ServiceID" value="'.$array['ID'].'"/><br/>'.
													'<input type="text" name="UserID" placeholder="UserID" value="'.$array['UserID'].'" /><br/>'.
													'<input type="text" name="PlanType" placeholder="PlanType" value="'.$array['PlanType'].'" /><br/>'.
													'<input type="text" name="ServiceType" placeholder="ServiceType" value="'.$array['ServiceType'].'" /><br/>'.
													'<input type="text" name="DomainName" placeholder="DomainName" value="'.$array['DomainName'].'" /><br/>'.
													'<input type="text" name="DomainExt" placeholder="DomainExt" value="'.$array['DomainExt'].'" /><br/>'.
													'<input type="text" name="NoOfServices" placeholder="NoOfServices" value="'.$array['NoOfServices'].'" /><br/>'.
													'<input type="text" name="Email" placeholder="Email" value="'.$array['Email'].'" /><br/>'.
													'<input type="text" name="Phone" placeholder="Phone" value="'.$array['Phone'].'" /><br/>'.
													'<input type="text" name="ServiceDuration" placeholder="ServiceDuration" value="'.$array['ServiceDuration'].'" /><br/>'.
													'<input type="text" name="ExtendServices" placeholder="ExtendServices" value="'.$array['ExtendServices'].'" /><br/>'.
													'<input type="text" name="ServicePlanType" placeholder="ServicePlanType" value="'.$array['ServicePlanType'].'" /><br/>'.
													'<input type="text" name="AdditionalMsg" placeholder="AdditionalMsg" value="'.$array['AdditionalMsg'].'" /><br/>'.
													'<input type="text" name="Status" placeholder="Status" value="'.$array['Status'].'" /><br/>'.
													'<input type="text" name="Price" placeholder="Price" value="'.$array['Price'].'" /><br/>'.
													'<input type="submit" value="Save" name="submit"/><br/>'.
													'</form></div>';
												}
											?>
										</tbody>
									</table>
								</div>
							</section>
					
					
					<section id="invoices" class="three">
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
										$sql = 'SELECT * FROM invoices';
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

					<section id="contact" class="two">
						<div class="container">
							
							<header>
								<h2>Contact Form</h2>
							</header>
							
							<p></p>
							
							<table style="font-size:15px;
							-webkit-user-select: none;     
							-moz-user-select: none;
							-ms-user-select: none;
							-o-user-select: none;
							user-select: none;">
								<thead>
									<tr style="border-bottom:1px black dotted">
										<th>Name</th>
										<th>Email</th>
										<th>Message</th>
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
									</style>
									<?php
										require 'db.php';
										$sql = 'SELECT * FROM contact';
										$res = mysqli_query( $db, $sql );
										//$array = mysqli_fetch_array($res);
										while($array = mysqli_fetch_array($res))
										{
											echo '<tr><td>'.$array['Name'].'</td>'.
											'<td>'.$array['Email'].'</td>'.
											'<td>'.$array['Message'].'</td></tr>'; 
											
										}
									?>
								</tbody>
							</table>
							
						</div>
					</section>

					<section id="messages" class="three">
						<div class="container">
							
							<header>
								<h2>Clients Messages</h2>
							</header>
							
							<p></p>
							
							<table style="font-size:15px;
							-webkit-user-select: none;     
							-moz-user-select: none;
							-ms-user-select: none;
							-o-user-select: none;
							user-select: none;">
								<thead>
									<tr style="border-bottom:1px black dotted">
										<th>UserID</th>
										<th>UserName</th>
										<th>Message</th>
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
									</style>
									<?php
										require 'db.php';
										$sql = 'SELECT * FROM messages';
										$res = mysqli_query( $db, $sql );
										//$array = mysqli_fetch_array($res);
										while($array = mysqli_fetch_array($res))
										{
											echo '<tr><td>'.$array['UserID'].'</td>'.
											'<td>'.$array['UserName'].'</td>'.
											'<td>'.$array['Message'].'</td></tr>';
											// echo '<div class="diamake" 
											
										}
									?>
								</tbody>
							</table>
							
						</div>
					</section>

			</div>

		<!-- Footer -->
			<div id="footer" style="margin-left: 15%;">

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
	</body>