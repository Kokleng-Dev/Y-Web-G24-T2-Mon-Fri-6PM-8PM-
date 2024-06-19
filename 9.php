<?php

// version 7
$a = false;
$test = $a ?? '123';
echo $test;



$value = 1000;

// work if condition is true
// if($value < 1000){
//     echo "hello";
// }

// if condition is true -> work
// else work

// if(2+4 > 6){
//     echo "yes";
// } else {
//     // work when condition IF is not true
//     echo "no";
// }


$total = -1;
$res = 10;

// if($total / 10 == $res){
//     echo "true : " . $total  . '/ 10 = ' . $res;  
// } else if ($total > 0){
//     echo $total . " > 0";
// } else if ($total == 0){
//     echo 'Zero';
// }
// else {
//     echo "no";
// }

$math = 30;
$php = 50;

$total_score = $math + $php;

if($total_score < 50){
    echo "F";
} else if ($total_score == 50){
    echo "E";
} else if ($total_score <= 60){
    echo "D";
} else if ($total_score <= 70){
    echo "C";
} else if ($total_score <= 80){
    echo "B";
} else {
    echo "A";
}

// subject = 5, 
// score : 0 - 100 / subject
// Q1 : Find average of total subject ?
/* 
    Q2: show grade
        - under 50 : F 
        - 50 : E
        - 50 - 60 : D
        - 60 - 70 : C
        - 70 - 79 : B
        - 80 - 95 : A
        - 95 - 100 : A+
*/

/*
    find odd or even of total average.
*/