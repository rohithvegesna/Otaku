<?php
	session_start();
	if( !isset($_GET) || !isset($_SESSION['userName']) )
	{
		exit; die();
	}


	require '../db.php';
	
	$orderid =  mysqli_real_escape_string( $conn, $_GET['orderid']);
	
	$sql = "SELECT * FROM orders WHERE ID='$orderid'";
	$OrderDetails = mysqli_fetch_array(mysqli_query($db, $sql));
		
	$sql = "CREATE TABLE IF NOT EXISTS services ( ID INT NOT NULL AUTO_INCREMENT, UserID INT, PlanType TEXT, ServiceType TEXT, DomainName TEXT, DomainExt TEXT, NoOfServices TEXT,".
	"Email TEXT, Phone TEXT, ServiceDuration TEXT, ExtendServices TEXT, ServicePlanType TEXT,".
	"AdditionalMsg TEXT, Status TEXT, DOO TEXT, Price TEXT, DOA TEXT, PRIMARY KEY (ID) )";
	mysqli_query( $conn, $sql );
	
	$sql = "SELECT Price FROM plans WHERE ServiceType='".$OrderDetails['ServiceType']."' AND Plan='".(($OrderDetails['ServiceType']!='Domain')?$OrderDetails['PlanType']:$OrderDetails['DomainExt'])."'";
	$PriceArray = mysqli_fetch_array(mysqli_query($db, $sql));
	
	$sql = "INSERT INTO services ( UserID, PlanType , ServiceType , DomainName, DomainExt , NoOfServices ,".
	"Email , Phone , ServiceDuration , ExtendServices , ServicePlanType ,".
	"AdditionalMsg, Status, DOO, Price, DOA ) VALUES ( '".$OrderDetails['UserID']."', '".$OrderDetails['PlanType']."', '".$OrderDetails['ServiceType']."', '".$OrderDetails['DomainName']."', '".$OrderDetails['DomainExt']."', '".$OrderDetails['NoOfServices']."',".
	"'".$OrderDetails['Email']."', '".$OrderDetails['Phone']."', '".$OrderDetails['ServiceDuration']."', '".$OrderDetails['ExtendServices']."', '".$OrderDetails['ServicePlanType']."',".
	"'".$OrderDetails['AdditionalMsg']."', '".mysqli_real_escape_string( $conn, "<font style='font-weight:700;color:green'>Accepted</font>")."', '".$OrderDetails['DOO']."', '".$PriceArray['Price']."', '".time()."' )";
		
	//echo $sql;

	if(mysqli_query( $db, $sql ))
	{
		$sql = "DELETE FROM `orders` WHERE ID='".$OrderDetails['ID']."'";
		mysqli_query($db, $sql);
	}
		
	$_SESSION['showMessage'] = "Order with Order ID#".$OrderDetails['ID']." has been accepted.";
	include( '../mail/orderacceptedmail.php' );