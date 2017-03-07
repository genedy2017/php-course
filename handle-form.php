<?php
include('./functions.php');

// retreive hobbies from db
$hobbies = [
		'1' => 'Reading',
		'2' => 'Swimming',
		'3' => 'Movies',
		'4' => 'Programming'
];

if(isset($_POST['submit'])){
	// process form
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';
	
	// receive data
	$name = trim(isset($_POST['name']) ? $_POST['name'] : '');
	$agree = (isset($_POST['agree']) ? 1 : 0);
	$user_hobbies = (isset($_POST['hobbies']) ? $_POST['hobbies'] : []);
	
	// validate data
	$errors = [];
	if(!preg_match('/^[a-z-\' ]{2,30}$/i', $name)){
		$errors[] = 'Error in name';
	}
	
	if(!is_array($user_hobbies) || !count($user_hobbies)){
		$errors[] = 'Invalid hobbies';
	}else{
		foreach($user_hobbies as $id){
			if(!isset($hobbies[$id]))
				$errors[] = 'Invalid hobby';
		}
	}
	
	if(count($errors)){
		echo 'Error: <pre>';
		print_r($errors);
		echo '</pre>';
		
		echo load_view('./views/form.php', ['hobbies' => $hobbies]);
		exit;
	}
	
	// 
	
}else{
	$form = load_view('./views/form.php', [
			'hobbies' => $hobbies
	]);
	
	echo $form;
}
