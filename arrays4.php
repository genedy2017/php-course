<?php
include("./functions.php");

$x = [];
$size = 5;
for($i = 0; $i < $size; $i++){
	$x[] = get_random_string(10);
}

echo '<pre>';
print_r($x);
echo '</pre>';

$joined = implode('</li><li>', $x);
echo '<ul><li>' . $joined . '</li></ul>';

$z = explode('3', $joined);


echo '<pre>';
print_r($z);
echo '</pre>';

?>

<style>
body{ font-size: 20px; }
</style>