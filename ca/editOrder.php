<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php
	session_start();
	if( !isset($_POST) || !isset($_SESSION) || !isset($_POST['submit']) )
	{
		echo 'dying';
		exit; die();
	}

	require 'db.php';

	$UserID 		= mysqli_real_escape_string( $conn, $_POST['UserID']);
	$OrderID 		= mysqli_real_escape_string( $conn, $_POST['OrderID']);
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
	
	$sql = "UPDATE orders ".
	"SET UserID='$UserID', PlanType='$PlanType', ServiceType='$ServiceType', DomainName='$DomainName',DomainExt='$DomainExt', NoOfServices='$NoOfServices',".
	"Email='$Email', Phone='$Phone', ServiceDuration='$ServiceDuration', ExtendServices='$ExtendServices', ServicePlanType='$ServicePlanType',".
	"AdditionalMsg='$addMsg', Status='$Status' WHERE ID=$OrderID";
	
	mysqli_query( $conn, $sql );
	// echo $sql;
	$_SESSION['showMessage'] = "Order has been edited. :)";
	header('Location: ca.php');
	
	