<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php
	session_start();
	if( !isset($_POST) || !isset($_SESSION) || !isset($_POST['submit']) )
	{
		echo 'dying';
		exit; die();
	}

	require 'db.php';

	$Password 		= mysqli_real_escape_string( $conn, $_POST['pass']);
	
	$sql = "UPDATE clients SET Password='".md5(md5($Password))."'";
	
	$abc = 'SELECT Email FROM clients WHERE ID='.$_SESSION['userID'];
	$query = mysqli_query( $db, $abc );
	$emailArray = mysqli_fetch_array($query);
	
	$email = $emailArray['Email'];
	
	mysqli_query( $conn, $sql );
	$_SESSION['showMessage'] = "Profile has been updated and an email has been sent to given mail. :)";
	include "mail/userdetailsupdatemail.php";
	
	