<?php
	$arr = [];
	$size = 100;
	
	// populate array with random values
	for($i = 0; $i < $size; $i++){
		$arr[$i] = rand(-100, 550);
	}
	
	// display array contents
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
	
	sort($arr);
	
	// display sorted array
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
	
	rsort($arr);
	
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
	
	
	
	
	
	