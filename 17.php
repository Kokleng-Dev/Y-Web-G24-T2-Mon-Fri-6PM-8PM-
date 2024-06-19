<?php

$arr = array(
    'hello',
    2024,
    true,
    'welcome'
);
/*
    index 0 = value 1;
    index 1 = value 2;
*/
$arr[4] = 'greeting'; 
$arr[5] = 'hi';
$arr[0] = 'good bye';
// echo $arr[0];
// var_dump($arr);


$ars = [
    'hello', // 0 + 1 = 1
    'hi', // 1 + 1 = 2
    'bye bye', // 2 + 1 = 3
    'hello world' // 3 + 1 = 4
];

// for($i = 0; $i < count($ars); $i++){
//     echo "<h2>$ars[$i]</h2>";
// }

// $students = [123,4,5,6,7, 'hello'];
// echo count($students);
// for($j = 1; $j <= count($students); $j++){
//     echo $students[$j - 1];
// }

// foreach($students as $index => $student){
//     echo "<h2>". $index + 1  ." / $student</h2>";
// }

// // array , index , variable
// foreach ($ars as $index => $x) {
//     echo '<h2>'. $index + 1 . '/ '  . $ars[$index]  .'</h2>';
// }
