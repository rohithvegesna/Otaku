<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php
session_start();
if( !isset($_POST) || !isset($_SESSION) || !isset($_POST['submit']) )
{
	echo 'dying';
	exit; die();
}

	require 'db.php';
	$PlanType = $DomainExt = $DomainName = $NoOfServices = "NULL";
	
	$ServiceType	= mysqli_real_escape_string( $conn, $_POST['ServiceType']);
	
	if( $ServiceType != 'Domain' )
	{
		$PlanType = mysqli_real_escape_string( $conn, $_POST['Plan']);
		$NoOfServices	= mysqli_real_escape_string( $conn, $_POST['NoOfServices']); 
	}
	else
	{
		$PlanType = 'Default';
		$DomainExt	= mysqli_real_escape_string( $conn, $_POST['DomainExt']); 
		$DomainName	= mysqli_real_escape_string( $conn, $_POST['DomainName']);
		$NoOfServices = '1';
	}
		
	// $Spcf		 	= mysqli_real_escape_string( $conn, $_POST['Spcf']); 
	// $DomainExt		 = mysqli_real_escape_string( $conn, $_POST['DomainExt']); 
	// $DomainName		 	= mysqli_real_escape_string( $conn, $_POST['DomainName']); 
	
	$email		 	= mysqli_real_escape_string( $conn, $_POST['email']); 
	$phone		 	= mysqli_real_escape_string( $conn, $_POST['phone']);
	$ServiceDuration= mysqli_real_escape_string( $conn, $_POST['ServiceDuration']); 
	$extendServices	= (isset($_POST['extendServices'])?"Yes":"NULL");
	$ServicePlanType= mysqli_real_escape_string( $conn, $_POST['ServicePlanType']);
	$Agree		 	= (isset($_POST['Agree'])?"Yes":"NULL");
	$addMsg		 	= mysqli_real_escape_string( $conn, $_POST['addMsg']);
	
	
	$sql = "CREATE TABLE IF NOT EXISTS orders ( ID INT NOT NULL AUTO_INCREMENT, UserID INT, PlanType TEXT, ServiceType TEXT, DomainName TEXT, DomainExt TEXT, NoOfServices TEXT,".
			"Email TEXT, Phone TEXT, ServiceDuration TEXT, ExtendServices TEXT, ServicePlanType TEXT,".
			"AdditionalMsg TEXT, Status TEXT, DOO TEXT, PRIMARY KEY (ID) )";
	mysqli_query( $conn, $sql );
	
	$sql = "INSERT INTO orders ( UserID, PlanType , ServiceType , DomainName, DomainExt, NoOfServices ,".
			"Email , Phone , ServiceDuration , ExtendServices , ServicePlanType ,".
			"AdditionalMsg, Status, DOO ) VALUES ( '".$_SESSION['userID']."', '$PlanType', '$ServiceType', '$DomainName', '$DomainExt','$NoOfServices',".
			"'$email', '$phone', '$ServiceDuration', '$extendServices', '$ServicePlanType',".
			"'$addMsg', '".mysqli_real_escape_string( $conn, "<font color='red'>Pending</font>")."', '".time()."' )";
	
	// echo $sql;
	mysqli_query( $conn, $sql );
	
	include( 'mail/oredrplacedmail.php' );