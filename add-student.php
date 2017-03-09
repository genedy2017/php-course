<?php
	include_once('./functions.php');
	
	if(isset($_POST['save'])){
		// process submitted data
		
		// receive data
		$first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
		$last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
		$email = isset($_POST['email']) ? $_POST['email'] : '';
		$dob = isset($_POST['dob']) ? $_POST['dob'] : '';
		
		// validate data
		// TODO: validate and escape quotes
		
		// process data
		$insert = "insert into students set
			first_name='$first_name',
			last_name='$last_name',
			email='$email',
			dob='$dob'
			";
		$link = db_connect();
		
		$res = mysqli_query($link, $insert);
		if(!$res){
			echo mysqli_error($link);
		}else{
			echo "Student successfully added. <a href=\"mysql.php\">Back to students list</a>";
		}
	}else{
		echo load_view('./views/new-student.php');
	}