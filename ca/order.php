<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php
	session_start();
	if(!isset($_SESSION['userName'])) 
	{
		header('Location: index.php');
		exit;die();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Otaku ~ order form</title>
	<link rel="icon" type="image/x-icon" href="../css/favicon.ico" />
	<link rel="shortcut icon" href="../css/favicon.ico" type="image/x-icon" />
	<link href='http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
	<link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css' rel='stylesheet' type='text/css'>
	<link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/css/bootstrap-switch.css' rel='stylesheet' type='text/css'>
	<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript'></script>
	<script src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js' type='text/javascript'></script>
	<script>
	// only for demo purposes
	$.validator.setDefaults({
		submitHandler: function() {
			alert("submitted!");
		}
	});

	$(document).ready(function() {
		$("#MainForm").validate();
	});
	</script>
	<style>
	.block {
		display: block;
	}
	form.cmxform label.error {
		display: none;
	}
	</style>
    <style>
    .black_overlay{
        display: none;
        position: absolute;
        top: 0%;
        left: 0%;
        width: 100%;
        height: 100%;
        background-color: black;
        z-index:1001;
        -moz-opacity: 0.8;
        opacity:.80;
        filter: alpha(opacity=80);
    }
    .white_content {
        display: none;
        position: absolute;
        top: 25%;
        left: 25%;
        width: 50%;
        height: 50%;
        padding: 16px;
        border: 16px solid #9BCD67;
        background-color: white;
        z-index:1002;
        overflow: auto;
    }
</style>
</head>
<style>
	.widthit
	{
		width:40%;
	}
</style>
<body>
  <div class='container' style="padding-top:2%">
    <div class='panel panel-primary dialog-panel'>
      <div class='panel-heading'>
        <h5><strong>Otaku</strong> Order Form</h5>
      </div>
      <div class='panel-body'>
        <form id="MainForm" class='form-horizontal' action="orderSubmit.php" method="post" role='form'>
<script>
	$(function() {
		
		// $('#MainForm').submit( function() {
		refrectSelectors($('#ServiceType').val());
		
		function refrectSelectors(value)
		{
			if( value == 'Domain' )
			{
				// alert(value);
				$('#QuantityFormGroup').hide();
				$('#DomainNameFormGroup').show();
				$('#PlanFormGroup').hide();
				$('#PlanSelector').val('Select a Plan');
			}
			else if( value == 'Hosting' )
			{
				// alert(value);
				$('#QuantityFormGroup').show();
				$('#DomainNameFormGroup').hide();
				$('.planSubItem').hide();
				$('.Hosting').show();
				$('#PlanFormGroup').show();
				$('#PlanSelector').val('Select a Plan');
			}
			else if( value == 'Webdesigning' )
			{
				// alert(value);
				$('#QuantityFormGroup').show();
				$('#DomainNameFormGroup').hide();
				$('.planSubItem').hide();
				$('.Webdesigning').show();
				$('#PlanFormGroup').show();
				$('#PlanSelector').val('Select a Plan');
			}
			else if( value == 'Email' )
			{
				// alert(value);
				$('#QuantityFormGroup').show();
				$('#DomainNameFormGroup').hide();
				$('.planSubItem').hide();
				$('.Email').show();
				$('#PlanFormGroup').show();
				$('#PlanSelector').val('Select a Plan');
			}
			else if( value == 'SSL' )
			{
				// alert(value);
				$('#QuantityFormGroup').show();
				$('#DomainNameFormGroup').hide();
				$('.planSubItem').hide();
				$('.SSL').show();
				$('#PlanFormGroup').show();
				$("#PlanSelector").val('Select a Plan');
			}
			else{ 
				// alert('At Else block');
			}
		}
		$('#ServiceType').change( function() {			
			var value = $(this).val();
			refrectSelectors(value)
		});
	});
	
</script>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='service'>Service</label>
            <div class='col-md-8'>
              <div class='col-md-6'>
                <div class='form-group'>
                  <select id="ServiceType" class='form-control' name="ServiceType" id='plan'>
                    <option>Domain</option>
                    <option>Hosting</option>
                    <option>Webdesigning</option>
                    <option>Email</option>
                    <option>SSL</option>
                  </select>
                </div>
              </div>				
            </div>
		</div>
		<div class='form-group' id="PlanFormGroup">
		<label class='control-label col-md-2 col-md-offset-2' for='service'>Plan</label>
		<div class='col-md-8'>
			<div class='col-md-8 indent-small'>
				<div class='form-group internal'>						
					<select class='form-control' id="PlanSelector" name="Plan">
						<?php							
							require_once 'db.php';
							$sql = "SELECT * FROM plans WHERE ServiceType != 'Domain'";
							$res = mysqli_query( $db, $sql );
							//$array = mysqli_fetch_array($res);
							while( ($array = mysqli_fetch_array($res)) && (!is_bool($array)) )
							{
								echo '<option class="'.$array['ServiceType'].' planSubItem" value="'.$array['Plan'].'">'.$array['Plan'].'</option>';							
							}
						?>
					</select>
				</div>
			</div>
		  
		</div>
		</div>
		<div class='form-group' id="DomainNameFormGroup">
			<label class='control-label col-md-2 col-md-offset-2' for='service'>Domain Name</label>
			<div class='col-md-8'>
				<div class='col-md-6'>
					<div class='form-group'>
						<input name="DomainName" class='form-control' placeholder='Your domain name' type='text'/>
					</div>
				</div>
				<div class='col-md-2 indent-small'>
					<div class='form-group internal'>						
						<select class='form-control' name="DomainExt">
							<?php
								require_once 'db.php';
								$sql = "SELECT * FROM plans where ServiceType='Domain'";
								$res = mysqli_query( $db, $sql );
								//$array = mysqli_fetch_array($res);
								while( ($array = mysqli_fetch_array($res)) && (!is_bool($array)) )
								{
									echo '<option value="'.$array['Plan'].'">.'.$array['Plan'].'</option>';						
								}
							?>
						</select>
					</div>
				</div>
				
			</div></div>
          <div class='form-group' id="QuantityFormGroup">
            <label class='control-label col-md-2 col-md-offset-2' for='servicenumber'>Quantity</label>
            <div class='col-md-8'>
              <div class='col-md-6'>
                <div class='form-group internal'>
                  <input class='form-control col-md-8' name="NoOfServices" id='servicenumber' placeholder='No of services' type='number'>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='email'>Contact</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' name="email" id='email' placeholder='E-mail' type='text'>
                </div>
              </div>
              <div class='form-group internal'>
                <div class='col-md-11'>
                  <input class='form-control' name="phone" id='phone' placeholder='Phone: (+91) -  xxxxxxxxxx' type='text'>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='duration'>Service duration</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                  <select class='form-control' name="ServiceDuration" id='duration'>
                    <option>1 year</option>
                    <option>2 years</option>
                    <option>3 years</option>
                    <option>4 years</option>
                    <option>5 years</option>
                  </select>
                </div>
              </div>
			</div>
			<label class='control-label col-md-2 col-md-offset-2'>Want to extend service after expiry</label>
			<div class='col-md-8'>
              <div class='col-md-9'>
                <div class='form-group internal'>
                  <div class='make-switch' data-off-label='NO' data-on-label='YES' id='id_slide_switch'>
                    <input id='expiry' type='checkbox' name="extendServices" value='chk_hydro'>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <label class='control-label col-md-2 col-md-offset-2' for='service'>Service Type</label>
			<div class='form-group internal'>
			  <div class='col-md-6'>
					  <select class='form-control' name="ServicePlanType" id='duration'>
						  <option>Iron</option>
						  <option>Silver</option>
						  <option>Gold</option>
						  <option>Diamond</option>
						  <option>Platinum</option>
					  </select>
				  </div>
				</div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='terms'>Agree terms and conditions</label>
            <div class='col-md-8'>
				<input type="checkbox" class="checkbox" id="agree" name="agree" required>
            </div>
			<div style="font-size: 1em; padding: 5px;">
			<a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">Terms and Conditions</a>
			<div id="light" class="white_content" style="padding:0;margin:0;overflow:hidden"><iframe class="iframe" src="../tos.php" style="border:0;width:100%;height:98%"></iframe></div>
			<div id="fade" class="black_overlay" href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"></div>
			</div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='myplan'>Any other specifications you need</label>
            <div class='col-md-6'>
              <textarea class='form-control' id='myplan' name="addMsg" placeholder='Your extra message' rows='3'></textarea>
            </div>
          </div>
          <div class='form-group'>
            <div class='col-md-offset-4 col-md-3'>
              <input class='btn-lg btn-primary' name="submit" value="Place Order" type='submit'></input>
            </div>
            <div class='col-md-3'>
              <button class='btn-lg btn-danger' style='float:right' type='submit'>Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php include '../chat.php';?>
</body>
</html>