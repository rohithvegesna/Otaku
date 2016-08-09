<?php
	session_start();
	if( !isset($_POST) || !isset($_SESSION['userName']) || !isset($_POST['submit']) )
	{
		// echo 'dying';
		exit; die();
	}

	require '../db.php';

	$UserID 		= mysqli_real_escape_string( $conn, $_POST['UserID']);
	$ServiceID 		= mysqli_real_escape_string( $conn, $_POST['ServiceID']);
 	$PlanType 		= mysqli_real_escape_string( $conn, $_POST['PlanType']);
	$ServiceType	= mysqli_real_escape_string( $conn, $_POST['ServiceType']);
	// $Spcf		 	= mysqli_real_escape_string( $conn, $_POST['Spcf']); 
	$DomainName		 	= mysqli_real_escape_string( $conn, $_POST['DomainName']); 
	$DomainExt		 	= mysqli_real_escape_string( $conn, $_POST['DomainExt']); 
	$NoOfServices	= mysqli_real_escape_string( $conn, $_POST['NoOfServices']); 
	$Email		 	= mysqli_real_escape_string( $conn, $_POST['Email']); 
	$Phone		 	= mysqli_real_escape_string( $conn, $_POST['Phone']);
	$ServiceDuration= mysqli_real_escape_string( $conn, $_POST['ServiceDuration']); 
	$ExtendServices	= (isset($_POST['ExtendServices'])?"Yes":"NULL");
	$ServicePlanType= mysqli_real_escape_string( $conn, $_POST['ServicePlanType']);
	
	$addMsg		 	= mysqli_real_escape_string( $conn, $_POST['AdditionalMsg']);
	$Status		 	= mysqli_real_escape_string( $conn, $_POST['Status']);
	$Price		 	= mysqli_real_escape_string( $conn, $_POST['Price']);
	
	$sql = "UPDATE services ".
	"SET UserID='$UserID', PlanType='$PlanType', ServiceType='$ServiceType', DomainName='$DomainName',DomainExt='$DomainExt', NoOfServices='$NoOfServices',".
	"Email='$Email', Phone='$Phone', ServiceDuration='$ServiceDuration', ExtendServices='$ExtendServices', ServicePlanType='$ServicePlanType',".
	"AdditionalMsg='$addMsg', Status='$Status', Price='$Price' WHERE ID='$ServiceID'";
	
	mysqli_query( $conn, $sql );
	// echo $sql;
	$_SESSION['showMessage'] = "Service has been edited. :)";
	header('Location: ../ca.php');
	
	