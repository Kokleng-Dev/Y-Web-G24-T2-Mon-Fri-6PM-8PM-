<?php


$a = 12;
$b = false;
$c = true;
$d = 0;

// var_dump(($a or $d) and ($c or $d));
//(true or false) and (true or false)

// ans class : true ,
// ans online : true

$a = false;
$b = true;
$c = 'Hello';
$d = -100;
$e = 0;
$f = 10.4;


var_dump($a or $b); // => false or true = true
var_dump($a Xor $b and $c); // false Xor true and true = true
var_dump($a or $b and ($d or $a) and $e); 
// false or true and (true or false) and false
// false or true and true and false
// false
var_dump(($a or $b and $c) or $e and ($d) or $e);
// (false or true and true) or false and (true) or false
// true or false and true or false
// true
var_dump($f and ($a Xor $f) and $e or $b);
// true and (false Xor true) and false or true
// true and true and false or true
// true
var_dump($f and ($b Xor $f) and $e or $b);
// true and (true Xor true) and false or true
// true and false and false or true
// true
var_dump($a Xor $b and $c Xor $f and ($a Xor $f) and $e or $b);
// false Xor true and true Xor true and (false Xor true) and false or true
// false and true and false or true
// true
var_dump($f and ($a Xor $f) or $a Xor $b and $c and $e or $b);
// true and (false Xor true) or false Xor true and true and false or true
// true and true or false Xor true and true and false or true
// true

