<?php
include('./functions.php');

// step 1 & 2: connect to server and select db
$link = @mysqli_connect('localhost', 'root', '', 'php_course2');
if(!$link){
	echo mysqli_connect_error();
	die;
}

for($i = 0; $i < 90; $i++){
	$fname = get_random_string(5);
	$lname = get_random_string(8);
	$email = "$fname.$lname@gmail.com";
	$dob = rand(1950, 2000) . '-' . rand(1, 12) . '-' . rand(1, 28);
	
	$query = "insert into students 
				(first_name, last_name, email, dob) 
				values
				('$fname', '$lname', '$email', '$dob')";
	
	$res = mysqli_query($link, $query);
}

