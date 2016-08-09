<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php

	require 'db.php';
	
	$name = mysqli_real_escape_string( $db, $_POST['n'] );
	$email = mysqli_real_escape_string( $db, $_POST['em'] );
	$msg = mysqli_real_escape_string( $db, $_POST['msg'] );
	
	$sql = "CREATE TABLE IF NOT EXISTS contact ( ID INT NOT NULL AUTO_INCREMENT, Name TEXT, Email TEXT, Message TEXT, PRIMARY KEY (ID) )";
	mysqli_query( $db, $sql );
	
	$sql = "INSERT INTO contact ( `Name`, `Email`, `Message` ) VALUES ( '$name', '$email', '$msg' )";
	mysqli_query( $db, $sql );
	mysqli_close($db);

	include "mail/contactmail.php";
?>