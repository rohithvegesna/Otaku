<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php

	if( !isset($_POST['domain']) )
	{
		exit;die();
	}

	include_once './Phois/Whois/Whois.php';
	
	$domainName = htmlspecialchars($_POST['domain']);

	$domain = new Phois\Whois\Whois($domainName);
	
	if ($domain->isAvailable()) 
	{
		echo '1';
	} 
	else 
	{
		echo '0';
	}
