<?php
$to = mysqli_real_escape_string($_POST['email']);
$subject = "Otaku Designers";
$message = <<<EOF
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        
        <!-- Facebook sharing information tags -->
        <meta property="og:title" content="email" />
        
        <title>Otaku ~ mail</title>
		<style type="text/css">
			#outlook a{padding:0;}
			body{width:100% !important;} .ReadMsgBody{width:100%;} .ExternalClass{width:100%;}
			body{-webkit-text-size-adjust:none;}

			body{margin:0; padding:0;}
			img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
			table td{border-collapse:collapse;}
			#backgroundTable{height:100% !important; margin:0; padding:0; width:100% !important;}

			body, #backgroundTable{
				background-color:#FAFAFA;
			}

			#templateContainer{
				border: 1px solid #DDDDDD;
			}

			h1, .h1{
				color:#202020;
				display:block;
				font-family:Arial;
				font-size:34px;
				font-weight:bold;
				line-height:100%;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				text-align:left;
			}

			h2, .h2{
				color:#202020;
				display:block;
				font-family:Arial;
				font-size:30px;
				font-weight:bold;
				line-height:100%;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				text-align:left;
			}

			h3, .h3{
				color:#202020;
				display:block;
				font-family:Arial;
				font-size:26px;
				font-weight:bold;
				line-height:100%;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				text-align:left;
			}

			h4, .h4{
				color:#202020;
				display:block;
				font-family:Arial;
				font-size:22px;
				font-weight:bold;
				line-height:100%;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				text-align:left;
			}

			#templateHeader{
				background-color:#FFFFFF;
				border-bottom:0;
			}

			.headerContent{
				color:#202020;
				font-family:Arial;
				font-size:34px;
				font-weight:bold;
				line-height:100%;
				padding:0;
				text-align:center;
				vertical-align:middle;
			}

			.headerContent a:link, .headerContent a:visited, .headerContent a .yshortcuts {
				color:#336699;
				font-weight:normal;
				text-decoration:underline;
			}

			#headerImage{
				height:auto;
				max-width:600px !important;
			}

			#templateContainer, .bodyContent{
				background-color:#FFFFFF;
			}

			.bodyContent div{
				color:#505050;
				font-family:Arial;
				font-size:14px;
				line-height:150%;
				text-align:left;
			}

			.bodyContent div a:link, .bodyContent div a:visited, .bodyContent div a .yshortcuts {
				color:#336699;
				font-weight:normal;
				text-decoration:underline;
			}

			.templateDataTable{
				background-color:#FFFFFF;
				border:1px solid #DDDDDD;
			}
			
			.dataTableHeading{
				background-color:#D8E2EA;
				color:#336699;
				font-family:Helvetica;
				font-size:14px;
				font-weight:bold;
				line-height:150%;
				text-align:left;
			}
		
			.dataTableHeading a:link, .dataTableHeading a:visited, .dataTableHeading a .yshortcuts {
				color:#FFFFFF;
				font-weight:bold;
				text-decoration:underline;
			}
			
			.dataTableContent{
				border-top:1px solid #DDDDDD;
				border-bottom:0;
				color:#202020;
				font-family:Helvetica;
				font-size:12px;
				font-weight:bold;
				line-height:150%;
				text-align:left;
			}

			.dataTableContent a:link, .dataTableContent a:visited,  .dataTableContent a .yshortcuts {
				color:#202020;
				font-weight:bold;
				text-decoration:underline;
			}

			.templateButton{
				-moz-border-radius:3px;
				-webkit-border-radius:3px;
				background-color:#336699;
				border:0;
				border-collapse:separate !important;
				border-radius:3px;
			}

			.templateButton, .templateButton a:link, .templateButton a:visited,  .templateButton a .yshortcuts {
				color:#FFFFFF;
				font-family:Arial;
				font-size:15px;
				font-weight:bold;
				letter-spacing:-.5px;
				line-height:100%;
				text-align:center;
				text-decoration:none;
			}

			.bodyContent img{
				display:inline;
				height:auto;
			}

			#templateFooter{
				background-color:#FFFFFF;
				border-top:0;
			}

			.footerContent div{
				color:#707070;
				font-family:Arial;
				font-size:12px;
				line-height:125%;
				text-align:center;
			}

			.footerContent div a:link, .footerContent div a:visited, /* Yahoo! Mail Override */ .footerContent div a .yshortcuts /* Yahoo! Mail Override */{
				color:#336699;
				font-weight:normal;
				text-decoration:underline;
			}

			.footerContent img{
				display:inline;
			}

			#utility{
				background-color:#FFFFFF;
				border:0;
			}

			#utility div{
				text-align:center;
			}

			#monkeyRewards img{
				max-width:190px;
			}
		</style>
	</head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
    	<center>
        	<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="backgroundTable">
            	<tr>
                	<td align="center" valign="top" style="padding-top:20px;">
                    	<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer">
                        	<tr>
                            	<td align="center" valign="top">
                                    <!-- // Begin Template Header \\ -->
                                	<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateHeader">
                                        <tr>
                                            <td class="headerContent">
                                            
                                            	<!-- // Begin Module: Standard Header Image \\ -->
                                            	<img src="http://i280.photobucket.com/albums/kk197/rohithvegesna/email_zps2wkhnihn.jpg" style="max-width:600px;" id="headerImage campaign-icon" mc:label="header_image" mc:edit="header_image" mc:allowdesigner mc:allowtext />
                                            	<!-- // End Module: Standard Header Image \\ -->
                                            
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // End Template Header \\ -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align="center" valign="top">
                                    <!-- // Begin Template Body \\ -->
                                	<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateBody">
                                    	<tr>
                                            <td valign="top">
                                
                                                <!-- // Begin Module: Standard Content \\ -->
                                                <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td valign="top" class="bodyContent">
                                                            <div mc:edit="std_content00">
                                                                <h1 class="h1"><strong>Otaku</strong></h1>
                                                                <strong>Otaku:</strong> Your orders have been successfully placed. Please check the details. In case of any change in details please inform to our agent during conformation call.
                                                            </div>
														</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" class="bodyContent">
                                                            <div mc:edit="std_content01">
                                                                Thank You for placing an order in <a href="http://www.otakud.in/" target="_blank"><strong>OTAKU</strong></a>. You will receive a conformation call within 24 hours. After conformation of client details your order will be accepted.
                                                            </div>
														</td>
                                                    </tr>
                                                    <tr>
                                                    	<td align="center" valign="top" style="padding-top:0;">
                                                        	<table border="0" cellpadding="15" cellspacing="0" class="templateButton">
                                                            	<tr>
                                                                	<td valign="middle" class="templateButtonContent">
                                                                    	<div mc:edit="std_content02">
                                                                        	<a href="http://www.otakud.in/ca/" target="_blank">Check Your ORDER Status</a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- // End Module: Standard Content \\ -->
                                                
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // End Template Body \\ -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align="center" valign="top">
                                    <!-- // Begin Template Footer \\ -->
                                	<table border="0" cellpadding="10" cellspacing="0" width="600" id="templateFooter">
                                    	<tr>
                                        	<td valign="top" class="footerContent">
                                            
                                                <!-- // Begin Module: Transactional Footer \\ -->
                                                <table border="0" cellpadding="10" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td valign="top">
                                                            <div mc:edit="std_footer">
																<em>Copyright &copy; 2015 Otaku, All rights reserved.</em>
																<br />
																<strong>Our mailing address is:</strong>
																<br />
																info@otakud.in
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="middle" id="utility">
                                                            <div mc:edit="std_utility">
                                                                <!--<a href="" target="_blank">unsubscribe for news-letter</a>-->
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- // End Module: Transactional Footer \\ -->
                                            
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // End Template Footer \\ -->
                                </td>
                            </tr>
                        </table>
                        <br />
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>
EOF;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@otakud.in>' . "\r\n";
$headers .= 'Cc: otakudesigners@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);

header('Location: ca.php');
?>