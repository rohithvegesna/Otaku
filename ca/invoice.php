<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php
	session_start();
	if( !isset($_SESSION['InvoiceDetails']) || !isset($_SESSION['userName']))
	{
		exit; die();
	}

	require 'db.php';
	
	$InvoiceDetails = $_SESSION['InvoiceDetails'];
	
	$TotalPrice = 0;
	
	$ArServiceIDs = explode(';', $InvoiceDetails['ServiceIDs']);
	
	$Services = array();
	$i = 1;
	
	foreach( $ArServiceIDs as $ServiceID )
	{
		$sql = "SELECT ID,ServiceType,PlanType,Price,NoOfServices,ServiceDuration FROM services WHERE ID='".$ServiceID."'";
		$arr = mysqli_fetch_array(mysqli_query($db, $sql), MYSQLI_ASSOC);
		$Services[$i] = $arr;
		$i++;
	}
	
	function getUserNameByID( $UserID, $db )
	{
		$sql = "SELECT UserName FROM clients WHERE ID='".$UserID."'";
		$arr = mysqli_fetch_array(mysqli_query($db, $sql), MYSQLI_ASSOC);
		return $arr['UserName'];
	}

	function getUserDetailsArrayByID( $UserID, $db )
	{
		$sql = "SELECT * FROM clients WHERE ID='".$UserID."'";
		$arr = mysqli_fetch_array(mysqli_query($db, $sql));
		return $arr;
	}
	
	$FromDetails = getUserDetailsArrayByID( $InvoiceDetails['GAdminID'], $db );
	$ToDetails = getUserDetailsArrayByID( $InvoiceDetails['UserID'], $db );

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Otaku ~ Invoice</title>
	<link rel="icon" type="image/x-icon" href="../css/favicon.ico" />
	<link rel="shortcut icon" href="../css/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <style>
      @import url(http://fonts.googleapis.com/css?family=Bree+Serif);
      body, h1, h2, h3, h4, h5, h6{
      font-family: 'Bree Serif', serif;
      }
    </style>
	<style>
		body {
		 -webkit-user-select: none;  /* Chrome all / Safari all */
		 -moz-user-select: none;     /* Firefox all */
		 -ms-user-select: none;      /* IE 10+ */

		  /* No support for these yet, use at own risk */
		 -o-user-select: none;
		user-select: none;          
		}
	</style>
	<script language="javascript">
		document.onmousedown=disableclick;
		status="Right Click Disabled";
		Function disableclick(event)
		{
		  if(event.button==2)
		   {
			 alert(status);
			 return false;    
		   }
		}
	</script>
	<script language="JavaScript">
			document.onkeypress = function (event) {
				event = (event || window.event);
				if (event.keyCode == 123) {
					return false;
				}
			}
			document.onmousedown = function (event) {
				event = (event || window.event);
				if (event.keyCode == 123) {
					return false;
				}
			}
		document.onkeydown = function (event) {
				event = (event || window.event);
				if (event.keyCode == 123) {
					return false;
				}
			}
	</script>
  </head>
  
  <body oncontextmenu="return false">
    <div class="container">
      <div class="row">
	  <h5><?php echo "This invoice is genereated on - ".date(DATE_RFC2822,$InvoiceDetails['DOI']);?></h5>
        <div class="col-xs-6">
          <h1>
            <img src="http://i280.photobucket.com/albums/kk197/rohithvegesna/logo1_zpszklmipcb.png" style="height: 100px;opacity: 0.8">
            Otaku
          </h1>
        </div>
        <div class="col-xs-6 text-right">
          <h1>Invoice</h1>
          <h1><small>Invoice #<?php echo $InvoiceDetails['ID'];?></small></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>From: <a href="#">Otaku</a></h4>
            </div>
            <div class="panel-body">
              <p>
			  <?php
				echo 'Admin Name : '.$FromDetails['UserName'].'.<br/>'.
				'Email : info@otakud.in.<br/>'.
				'Phone : 9640230600.<br/>';
				?>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-5 col-xs-offset-2 text-right">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>To : <a href="#"><?php echo $ToDetails['UserName'];?></a></h4>
            </div>
			  <div class="panel-body">
			  <p>
				  <?php
					  echo 'Email : '.$ToDetails['Email'].'<br/>';
					  echo 'Phone : '.$ToDetails['Mobile'].'<br/>';
					  echo 'Address : '.$ToDetails['Address'].'<br/>';
				  ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- / end client details section -->
      <table class="table table-bordered">
        <thead>
          <tr>			  
			<th>
			  <h5>Sl No.(SID)</h5>
			</th>
            <th>
              <h4>Service</h4>
            </th>
            <th>
              <h4>Plan</h4>
            </th>
            <th>
              <h4>Period</h4>
            </th>
			<th>
			  <h4>Quantity</h4>
			</th>
            <th>
              <h4>Price</h4>
            </th>
            <th>
              <h4>Sub Total</h4>
            </th>
          </tr>
        </thead>
        <tbody>
		<?php
			
			foreach( $Services as $sl=>$Service )
			{
				$Price = (int)$Service['Price'];
				$Period = (int)$Service['ServiceDuration'][0];
				$Qty = (int)$Service['NoOfServices'];
				
				$SubPrice = $Price * $Period * $Qty;
				$TotalPrice += $SubPrice;
				
				echo '<tr><td>'.$sl.'(#'.$Service['ID'].')</td>'.
				'<td>'.$Service['ServiceType'].'</td>'.
				'<td>'.$Service['PlanType'].'</td>'.
				'<td>'.$Service['ServiceDuration'].'</td>'.
				'<td>'.$Service['NoOfServices'].'</td>'.
				'<td>'.$Service['Price'].'</td>'.
				'<td>'.$SubPrice.'</td></tr>';
			}
		?>
        </tbody>
      </table>
      <div class="row text-right">
        <div class="col-xs-2 col-xs-offset-8">
          <p>
            <strong>
            Sub Total : <br>
            TAX(11.0%) : <br>
            Total : <br>
            </strong>
          </p>
        </div>
        <div class="col-xs-2">
          <strong>
          &#8377 <?php echo $TotalPrice;?> <br>
          &#8377 <?php echo ($TotalPrice*0.11);?> <br>
          &#8377 <?php echo ($TotalPrice*1.11);?> <br>
          </strong>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-7">
          <div class="span7">
            <div class="panel panel-info">
              <div class="panel-heading">
                <h4>Contact Details</h4>
              </div>
              <div class="panel-body">
                <p>
                  Email : info@otaku.in<br>
                  Mobile : 9640230600.
                </p><br>
                <h4>Payment made by Bank Transfer.</h4>
				<span>This is an Electonically generated Invoice, therefore no Signature is required.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	<div style="text-align:center">
	  <li>&copy; <?php echo date('Y') ?> All Rights Reserved. Otaku.</li>
	  <button onclick="window.print()">Print invoice</button><br/><br/>
	</div>
  </body>
</html>