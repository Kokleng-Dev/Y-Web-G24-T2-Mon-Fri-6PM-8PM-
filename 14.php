<?php

// $number = 5;
// 3 x 2 x 1
// $fac = 1;
// for ($i=1; $i <= $number ; $i++) { 
//     $cal = $fac * $i;
//     echo "$fac x $i  = $cal <br>" ;
//     $fac *= $i;
// }
/*
    $i = 1; first
    i = 1 <= 3 -> $face = 1 * 1 = 1 -> i++ = 2
    i = 2 <= 3 -> $face = 1 * 2 = 2 -> i++ = 3
    i = 3 <= 3 -> $face = 2 * 3 = 6 -> i++ = 4
    i = 4 <= 3 -> finish 

*/

// find even number in 1 - 10000
// 2 , 4 , 6, 8, 10
// 1 = false, 2 = true, 

// for($i=1; $i <= 10; $i++){
//     if($i % 2 == 0){
//         echo "<h5 style='color:blue; margin:0;'>". $i ." is even number</h5>";
//     } else {
//         echo "<h5 style='color:red; margin:0;'>". $i ." is odd number</h5>";
//     }
// }

// get input value from user (n1 , n2)
// find all odd and even number between n1 and n2

// range 1 : 16
// range 2 : 4

// 4 - 9 -> find odd , even 

// 20 mn

$n1 = readline('n1 :');
$n2 = readline('n2 :');

if($n1 < $n2) {
    for($i=$n1; $i <= $n2; $i++){
        
    }
} else {
    // n1 = 10
    // n2 = 7
    // 10 -> 9 -> 8 -> 7 -> 6
    for($i=$n1; $i >= $n2; $i--){
        
    }
}


// $start = $n1 > $n2 ? $n2 : $n1;
// $end = $n1 < $n2 ? $n2 : $n1;
// for($i = $start; $i <= $end; $i++){
//     if($i % 2 == 0){
//         echo $i . " Even \n";
//     } else {
//         echo $i . " Odd \n";
//     }
// }
// for($i = ($n1 > $n2 ? $n2 : $n1); $i <= ($n1 < $n2 ? $n2 : $n1); $i++){
//     if($i % 2 == 0){
//         echo $i . " Even \n";
//     } else {
//         echo $i . " Odd \n";
//     }
// }






