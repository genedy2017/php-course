<?php
	// receive data from form
	$first_name = $_POST['first_name'];
	
	// validate data
	if(1 == 2){

		// process data
		$processed = "<b>$first_name</b>";
		
		// feedback
		echo "Hello $processed";
	}else{
		echo "Try again!";
	}
