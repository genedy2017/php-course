<?php
	include('./functions.php');
	session_start();
	
	if(isset($_SESSION['name'])){
		echo "Hello {$_SESSION['name']}";
	}else{
		$name = get_random_string(6);
		$_SESSION['name'] = $name;
		
		echo "Your new name is $name!";
	}