<?php
	// symbols: ABCD,DEFG,...
	
	$symbols_str = isset($_GET['symbols']) ? $_GET['symbols'] : '';
	// TODO: validate symbols through regex
	// ABCD,GHIJ,WXYZ,
	$symbols = explode(',', $symbols_str);
	$prices = [];
	foreach($symbols as $symbol){
		if($symbol == '') continue;
		$prices[$symbol] = rand(1000, 1500) / 100;
	}
	
	header('Content-Type: application/json');
	echo json_encode($prices);