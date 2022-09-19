<?php 

$foo = "5bar"; // chaîne
$bar = true;   // booléen

const MIN_VALUE = 17.5; 

settype($foo, "integer"); // $foo vaut maintenant 5   (integer)
settype($bar, "string");  // $bar vaut maintenant "1" (string)
echo MIN_VALUE;

?>

