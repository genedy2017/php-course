<?php
	include('./functions.php');
	
	$users = [
			'amal' => '123456',
			'ahmed' => '987456'
	];
	
	session_start();
	if(isset($_SESSION['username'])){
		header('Location: dashboard.php');
		exit;
	}
	
	if(isset($_POST['login'])){
		// 1. receive data
		$username = isset($_POST['username']) ? $_POST['username'] : '';
		$password = isset($_POST['password']) ? $_POST['password'] : '';
		
		// 2. validate data
		$errors = [];
		/*
		 * WRONG VALIDATION
		if(!in_array($username, array_keys($users))){
			$errors[] = 'Invalid username';
		}
		if(!in_array($password, $users)){
			$errors[] = 'Invalid paxsword';
		}
		*/
		if(!isset($users[$username]) || $password != $users[$username]){
			$errors[] = 'Invalid login. Try again!';
		}
		
		if(count($errors)){
			header('HTTP/1.0 403 Forbidden');
			echo load_view('./views/login-form.php', ['errors' => $errors]);
			exit;
		}
		
		// successful login
		$_SESSION['username'] = $username;
		header('Location: dashboard.php');
		exit;
	}
	
	echo load_view('./views/login-form.php', ['errors' => []]);