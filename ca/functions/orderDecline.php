<?php
	session_start();
	if( !isset($_GET) || !isset($_SESSION['userName']) )
	{
		exit; die();
	}


	require '../db.php';
	
	$orderid =  mysqli_real_escape_string( $conn, $_GET['orderid']);
	
	$sql = "DELETE FROM orders WHERE ID='$orderid'";
	mysqli_query($db, $sql);
	
	$_SESSION['showMessage'] = "Order with Order ID#".$orderid." has been deleted.";
	header( 'Location: ../ca.php' );