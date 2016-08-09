<?php
	session_start();
	if( !isset($_GET) || !isset($_GET['invoiceid']) || !isset($_SESSION['userName']))
	{
		exit; die();
	}

	require '../db.php';

	$InvoiceID =  mysqli_real_escape_string( $conn, $_GET['invoiceid']);
	
	$sql = "SELECT * FROM invoices WHERE UserID='".$_SESSION['userID']." AND ID='".$InvoiceID."'";
	
	if( !isset($_SESSION['IsAdmin']) && (mysqli_num_rows(mysqli_query($db,$sql)) < 1) )
	{
		exit; die();
	}


	$sql = "SELECT * FROM invoices WHERE ID='".$InvoiceID."'";
	$InvoiceDetails = mysqli_fetch_array(mysqli_query($db, $sql));
	$_SESSION['InvoiceDetails'] = $InvoiceDetails;
	header('Location: ../invoice.php');
	
	
