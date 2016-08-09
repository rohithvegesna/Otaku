<?php
	session_start();
	if( !isset($_GET) || !isset($_SESSION['userName']) )
	{
		exit; die();
	}


	require '../db.php';
	
	$serviceid =  mysqli_real_escape_string( $conn, $_GET['serviceid']);
	
	$sql = "CREATE TABLE IF NOT EXISTS terminateds LIKE services";
	mysqli_query($db, $sql);
	
	$sql = "INSERT INTO terminateds SELECT * FROM services WHERE ID='".$serviceid."'";
	mysqli_query($db, $sql);
	
	$sql = "DELETE FROM services WHERE ID='$serviceid'";
	mysqli_query($db, $sql);
	
	$_SESSION['showMessage'] = "Service with Service ID#".$serviceid." has been Terminated.";
	header( 'Location: ../ca.php' );