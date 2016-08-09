<?php
	session_start();
	if( !isset($_GET) || !isset($_GET['serviceids']) || !isset($_GET['userid']) || !isset($_SESSION['IsAdmin']) || ($_SESSION['IsAdmin']!='Yes') )
	{
		// echo 'dying';
		exit; die();
	}

	require '../db.php';

	$ServiceIDs =  mysqli_real_escape_string( $conn, $_GET['serviceids']);
	$UserID =  mysqli_real_escape_string( $conn, $_GET['userid']);

	$sql = "SELECT Email FROM clients WHERE ID='$UserID'";
	$query = mysqli_query( $db, $sql );
	$emailArray = mysqli_fetch_array($query);
	
	$email = $emailArray['Email'];
	
	$sql = "CREATE TABLE IF NOT EXISTS invoices ( ID INT NOT NULL AUTO_INCREMENT, UserID INT, GAdminID INT, ServiceIDs TEXT, DOI TEXT, PRIMARY KEY (ID) )";
	mysqli_query( $db, $sql );
	
	
	$sql = "INSERT INTO invoices ( UserID, GAdminID, ServiceIDs, DOI ) VALUES ( '$UserID', '".$_SESSION['userID']."', '$ServiceIDs', '".time()."' )";
	mysqli_query( $db, $sql );
	
	// echo $sql;
	$_SESSION['showMessage'] = "Invoice has been generated for UserID#".$UserID.".";
	include('../mail/invoicemail.php');
	