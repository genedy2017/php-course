<?php
	include('./functions.php');
	
	echo get_age_years('2010-5-1', '2017-3-8');
	

	function get_x(){
		static $x;
		if(isset($x)) return $x;
		
		$x = rand(100, 200);
		return $x;
	}
	
	
	
	echo '<br>';
	echo get_x();
	echo '<br>';
	echo get_x();
	
	