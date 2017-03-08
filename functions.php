<?php

function get_random_string($length){
	$a = "abcdefghijklmksjfhscrh3498324734";

	$random_str = '';
	for($i = 0; $i < $length; $i++){
		$position = rand(0, strlen($a) - 1);
		//$random_str .= substr($a, $position, 1);
		$random_str .= $a[$position];
	}

	return $random_str;
}


function load_view($file, $data = []){
	ob_start();
	
	include($file);
	
	$buffer = ob_get_contents();
	ob_end_clean();
	
	return $buffer;
}

/**
 * Get difference between 2 dates in years
 * @param string $start_date in the format yyyy-mm-dd
 * @param string $end_date in the format yyyy-mm-dd
 * @return number of years or false on error
 */
function get_age_years($start_date, $end_date){
	$start_ts = strtotime($start_date);
	$end_ts = strtotime($end_date);
	
	$diff = $end_ts - $start_ts;
	
	return round($diff / 60 / 60 / 24 / 365.25, 0);
}

function get_username(){
	static $username;
	if(isset($username)) return $username;
	
	// db query to get username
	sleep(5);
	$username = 'Amgad';
	
	return $username;
}


