<?php
	session_start();
	if( !isset($_GET) || !isset($_SESSION['userName']) )
	{
		exit; die();
	}


	require '../ca/db.php';
	
	$ticketid =  mysqli_real_escape_string( $conn, $_GET['ticketid']);
	
	$sql = "DELETE FROM tickets WHERE ID='$ticketid'";
	mysqli_query($db, $sql);
	
	header( 'Location: index1.php' );
	//include("../ca/mail/ticketopen.php");