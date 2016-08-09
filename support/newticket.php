<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php 
session_start();
	include_once("../ca/db.php"); 

	$ticket =  mysqli_real_escape_string($_POST['ticket']);

	$sql = "CREATE TABLE IF NOT EXISTS tickets ( ID INT NOT NULL AUTO_INCREMENT, UserID INT, Problem TEXT, Reply TEXT, DOO TEXT, PRIMARY KEY (ID) )";
	
	$qury = mysqli_query($conn, $sql);
	$sql = "INSERT into tickets (`UserID`, `Problem`, `DOO`) VALUES ('".$_SESSION['userID']."', '$ticket', '".time()."' )";
	$qury = mysqli_query($conn, $sql);

	if(!$qury)
	{
		echo "Failed ".mysqli_error($db);
	}
	else
	{
		header( 'Location: index1.php' );
		//include("../ca/mail/ticketopen.php");
	}
?>