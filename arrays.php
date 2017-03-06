<?php
	// numeric array (keys are optional)
	$y = [12, 50.5,'ddd'];
	
	// associative array
	$z = [
			'a' => 'apple',
			'b' => 'banana',
			'e' => 'eggplant'
	];
	
	echo $z['a'] . '<br>';
	
	// looping through an array, for loop
	echo '<h3>For loop</h3>';
	for($i = 0; $i < count($y); $i++){
		echo $y[$i] . '<br>';
	}
	
	// looping through an array, foreach loop
	echo '<h3>Foreach loop</h3>';
	foreach($z as $key => $val){
		echo "$key: $val<br>";
	}
	
	// looping through an array, while loop
	echo '<h3>While loop</h3>';
	$i = 0;
	while(isset($y[$i++])){
		echo $y[$i - 1] . '<br>';
	}
	
?>

<style>
	body{ font-size: 20px; line-height: 2em; }
</style>
	
	
	
	
	
	