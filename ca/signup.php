<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php 
	include_once("db.php"); 

	$user = htmlspecialchars($_POST['n']);
	$length = 8;
	$pass = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
	$em = htmlspecialchars($_POST['em']);
	$num = htmlspecialchars($_POST['num']);
	$add = htmlspecialchars($_POST['add']);
	
	$sql = "CREATE TABLE IF NOT EXISTS clients ( ID INT NOT NULL AUTO_INCREMENT, Email TEXT, UserName TEXT, Password TEXT, Mobile TEXT, Address TEXT, PRIMARY KEY (ID) )";
	
	$qury = mysqli_query($conn, $sql);
	$sql = "INSERT into clients (`UserName`, `Password`, `Email`, `Mobile`, `Address`) VALUES ('$user', '".md5(md5($pass))."', '$em', '$num', '$add')";
	$qury = mysqli_query($conn, $sql);

	if(!$qury)
	{
		echo "Failed ".mysqli_error($db);
	}
	else
	{
		include("mail/signupmail.php");
	}
?>