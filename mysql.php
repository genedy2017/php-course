<?php
	include('./functions.php');

	// step 1 & 2: connect to server and select db
	$link = @mysqli_connect('localhost', 'root', '', 'php_course2');
	if(!$link){
		echo mysqli_connect_error();
		die;
	}
	
	// step 3: query db
	$res = mysqli_query($link, "select * from students");
	if(!$res){
		echo mysqli_error($link);
		die();
	}
	
	// step 3.5: handle result set
	$students = [];
	while($record = mysqli_fetch_assoc($res)){
		$students[] = $record;
	}
	
	//echo '<pre>';
	//print_r($students);
	//echo '</pre>';
	
	echo load_view('./views/students.php', ['students' => $students]);
	
	// step 4: close connection -- optional step
	mysqli_close($link);
