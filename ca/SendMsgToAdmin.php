<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php
session_start();
if( !isset($_POST) || !isset($_SESSION['userName']) )
{
	exit;die();
}

	require 'db.php';
	
	$msg = mysqli_real_escape_string( $db, $_POST['msg'] );
	
	$sql = "CREATE TABLE IF NOT EXISTS messages ( ID INT NOT NULL AUTO_INCREMENT, UserID INT, UserName TEXT, Message TEXT, PRIMARY KEY (ID) )";
	mysqli_query( $db, $sql );
	
	$sql = "INSERT INTO messages ( `UserID`, `UserName`, `Message` ) VALUES ( '".$_SESSION['userID']."', '".$_SESSION['userName']."', '$msg' )";
	mysqli_query( $db, $sql );
	//echo $sql;
	mysqli_close($db);
	

	$_SESSION['showMessage'] = "Message has been sent to admin :)";
	header( "Location: ca.php" );
?>