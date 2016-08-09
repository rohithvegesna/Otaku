	<!---- footer --->
			<div class="footer text-center">
				<div class="container">
					<div class="copy">
						<a target="_blank" href="http://www.copyrighted.com/copyrights/view/4chq-rbx6-4e8n-cnb4"><img border="0" alt="Copyrighted.com Registered &amp; Protected 
						4CHQ-RBX6-4E8N-CNB4" title="Copyrighted.com Registered &amp; Protected 
						4CHQ-RBX6-4E8N-CNB4" width="150" height="40" src="http://static.copyrighted.com/images/seal.gif" /></a>
		              <p>&copy; <?php echo date('Y') ?> All Rights Reserved. <a href="https://www.facebook.com/groups/Otakuwds/">Otaku</a>. || <a href="sitemap.php" target="_blank">sitemap</a> || <a href="privacypolicy.php" target="_blank">Privacy Policy</a> || <a href="tos.php" target="_blank">Terms of Service</a><br>
					  <?php 
							include_once("ca/db.php");
							$ip = $_SERVER['REMOTE_ADDR'];
							$sql = "CREATE TABLE IF NOT EXISTS ips ( ID INT NOT NULL AUTO_INCREMENT, Ip TEXT, PRIMARY KEY (ID) )";
							$qury = mysqli_query($conn, $sql);
							$select = "SELECT Ip FROM ips WHERE Ip='".$ip."'";
							$selectq = mysqli_query($conn, $select);
							$data = mysqli_fetch_array($selectq);

							$sql = "INSERT into ips (`Ip`) VALUES ('$ip')";
							if($data['Ip'] != $ip) {
								$qury = mysqli_query($conn, $sql);
							} 
							echo "Your IP is beeing logged please don't missuse - ". $ip;
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
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="UItoTopHover" style="opacity: 1;"> </span></a>
<?php include 'chat.php';?>
