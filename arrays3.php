<?php
	include("./functions.php");

	$arr = [];
	$size = 10;
	
	for($i = 0; $i < $size; $i++){
		$key = get_random_string(4);
		$arr[$key] = get_random_string(20);
	}
	
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
	
	asort($arr);

	echo '<pre>';
	print_r($arr);
	echo '</pre>';
	
	arsort($arr);

	echo '<pre>';
	print_r($arr);
	echo '</pre>';
	
	
?>

<style>
body{font-size: 20px;}
</style>
	
	
	