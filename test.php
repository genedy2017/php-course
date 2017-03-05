<?php 
define('PI', 3.1415);


echo 'Hello ITI';

/* define 
 * variable x */
$i = 0;

$i = 10;

# concatenation operator
echo "<br><br> i: " . $i . ", PI: " . PI;

// strings and variables without concatenation
echo "<br><br> i: $i , PI: " . PI;
echo '<br><br> i: $i , PI: ' . PI;


?>

<b id="title">Hello everyone!</b>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<script>
$(function(){
	$('#title').css({ display: 'block', 'font-size': '30px' });
});
</script>