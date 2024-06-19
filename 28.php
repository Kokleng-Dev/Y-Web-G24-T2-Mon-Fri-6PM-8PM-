<?php

// $string = 'hello hi world asdasd asd';

// echo sprintf("%'.04d\n", 1050);

// echo substr($string,-5);

// $a = str_replace("world", "123", $string);
// echo $a . "<br>";
// echo $string . "<br>";
// echo str_repeat($string . "<br>", 3);


// echo strtolower($string);
// echo "<br>";
// // echo "\n";
// echo strtoupper($string);

// echo "<h5>Remove Space</h5>";
// // echo "\n";
// echo trim($string);

// echo "<p>count string</p>";
// echo strlen(trim($string));

// echo "<p>Count string array</p>";
// $count = str_word_count($string,1);
// var_dump(str_word_count(trim($string),1));
// $arr = [
//     0 => 'hello',
//     65 => 'hi'
// ];
// var_dump($arr);


// $input = 6;
// // UP:
// echo ceil($input); //7
// echo "<br>";
// // DOWN:
// echo floor($input); //6
// echo "<br>";
// // NEAREST:
// echo round($input); //6
// echo "<br>";

// $x = .4;

// if($x - 0.7 == 5){
//     if(0.7 > 0.5){
//         $x = $x + (1 - 0.7);
//     } else {
//         $x = $x - 0.4;
//     }
// }

// echo $x;


// $arr = ['apple','banana','potato'];
// echo $arr[rand(0,count($arr) - 1)];


// while(true){
//     $input = readline('Number : ');
//     if($input == rand(1,3)){
//         echo "correct\n\n";
//     } else {
//         echo "incorrect\n\n";
//     }
//     if($input == 0){
//         break;
//     }
// }


/*
    1. show list items [a,b,c,d,e,f];
    2. bet a - f
    3. drawing : 5

    rand = items, 3 times;
    if 2 match 3rd times of rand => show score
 */

$items = ['a','b','c','d','e','f'];

echo "List of Item\n";
foreach ($items as $index => $item) {
  echo "item $item : " . "please press '$index'\n";
}

$item_1 = readline('1.Enter : ');
$item_2 = readline('2.Enter : ');
$item_3 = readline('3.Enter : ');


$rand_1 = 0;
$rand_2 = 0;
$rand_3 = 0;

$rand_1 = rand(0, count($items) - 1);

while(true){
    $rand_2 = rand(0, count($items) - 1);
    if($rand_2 != $rand_1){
        break;
    }
}

while(true){
    $rand_3 = rand(0, count($items) - 1);
    if($rand_3 != $rand_1 && $rand_3 != $rand_2){
        break;
    }
}

$win = 0;
$all_bets = [$item_1,$item_2,$item_3];
$all_rands = [$rand_1,$rand_2,$rand_3];

echo "\n-----------------\n";
echo "-------Your Bet----------\n";
foreach ($all_bets as $index => $value) {
   echo  ($index + 1) . ". " . $items[$value] . "\n";
}

foreach ($all_rands as $i => $random) {
    echo "result " . ($i+1) . " : " .$items[$random] . "\n";
    foreach ($all_bets as $j => $bet) {
        if($bet == $random){
            $win++;
        }
    }
}

if($win == 0){
    echo "\nLose";
} else {
    echo "\nwin " . $win . "times\n";
}




