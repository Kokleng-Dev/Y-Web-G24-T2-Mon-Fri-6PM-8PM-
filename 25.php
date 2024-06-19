<?php

// no parameter
// function name(){

// }

// paremeter
// function greeting($name = 'bora'){
//     echo $name . "<br>";
// }


// greeting('seyha');
// greeting('seyha 123');
// greeting('seyha 12');
// greeting();


// function fullname($first_name = '', $last_name = ''){
//     echo $first_name . ' ' . $last_name;
// }


// fullname('bora');

// function calSum($x,$operator,$y){
//     switch ($operator) {
//         case '+':
//             echo $x + $y;
//             break;
//         case '-':
//             echo $x - $y;
//             break;
//         default:
//             echo "NO";
//             break;
//     }
// }

// calSum(1,'-',3);

// function listStudent($list){
//    foreach ($list as $index => $l) {
//         echo $l . "<br>";
//    }
// }

// listStudent(['sok','pisey','seyha']);

// function sumValue(...$numbers){
//     $total = 0;

//     foreach ($numbers as $key => $num) {
//        $total += $num;
//     }
//     echo $total;
// }

// sumValue(1,2,3,4,5,10);


// function handleCalculator($func_number, $operator){

// }


// return type 

// function fullname($f,$l){
//     return $f . ' ' . $l;
// }

// $name1 = fullname('sok','dara');
// $name2 = fullname('sok','kong');
// $name3 = fullname('sok','seyha');

// echo $name1; echo "<br>";
// echo $name2;echo "<br>";
// echo $name3;echo "<br>";


// function n1(...$value){
//     $total = 0;

//     foreach ($value as $key => $v) {
//         $total += $v;
//     }

//     return $total;
// }

// $x =  n1(1,2,3);
// $y =  n1(1,2,3,10);

// echo "<h2>$x</h2>";
// echo "<h2>$y</h2>";


// function handleCalculator($number,$operator){
//     $total = 0;
//     foreach ($number as $key => $num) {
//         if($operator == '+'){
//             $total += $num;
//         } else {
//             $total -= $num;
//         }
//     }

//     return $total;
// }

// $cal1 = handleCalculator([1,2,3], '+');
// $cal2 = handleCalculator([10,4,2], '-');

// echo $cal1 . "<br>";
// echo $cal2 . "<br>";

// handle factories 
// fac(5)
// = ?
// fac(3)
// = ?

// function rangeNumber($start,$end){
//     $total = 0;
//     for($i = $start; $i <= $end; $i++){
//         $total += $i;
//     }

//     return $total;
// }

// echo rangeNumber(1,3);