<?php
	// add_arrays
	function test_add_arrays(){
		$inp1 = [6, 8, 0, 5];
		$inp2 = [1, 2, 3, 4];
		$out = add_arrays($inp1, $inp2);
		
		if($out == [7, 10, 3, 9]) return 'OK';
		
		return 'Failed';
	}
	
	function test_add_arrays2(){
		$inp1 = [6, 8, 0, 5, 10];
		$inp2 = [1, 2, 3, 4];
		$out = add_arrays($inp1, $inp2);
		
		if($out == [7, 10, 3, 9, 10]) return 'OK';
		
		return 'Failed';
		}
	
	echo test_add_arrays();
	echo test_add_arrays2();