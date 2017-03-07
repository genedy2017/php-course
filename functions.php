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






