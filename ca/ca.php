<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php
	 session_start();
	if( !isset($_SESSION['userName']) )
	{
		die("<h1>404 Error</h1><h2> Access Denied</h2><h3><a href='index.php'>Login/Signup</a></h3>");exit;
	}
	
	if( isset($_SESSION['userName']) && ( (time() - $_SESSION['time']) >= 5*60 ))
	{
		header('Location: logout.php');
	}
	else
	{
		$_SESSION['time'] = time();
	}
		
?>
<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<title>Otaku ~ Client Area</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/x-icon" href="../css/favicon.ico" />
		<link rel="shortcut icon" href="../css/favicon.ico" type="image/x-icon" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../css/2main.css" />
		
		<script src="jquery.js"></script>
		<script src="jquery-ui.js"></script>
		<link href="jquery-ui.css" rel="stylesheet">
	</head>

<?php
	function getUserNameByID( $UserID, $db )
	{
		$sql = "SELECT UserName FROM clients WHERE ID='".$UserID."'";
		$arr = mysqli_fetch_array(mysqli_query($db, $sql), MYSQLI_ASSOC);
		return $arr['UserName'];
	}
	if( $_SESSION['IsAdmin'] )
	{
		include 'adminpanel.php';
	}
	else
	{
		include 'clientpanel.php';
	}
?>
</html>