<?php
	session_start();
	
	if(!isset($_SESSION['username'])){
		header('HTTP/1.0 403 Forbidden');
		header('Location: login.php');
		exit;
	}
	
	echo "Hello {$_SESSION['username']} <a href=\"logout.php\">Sign out</a>";