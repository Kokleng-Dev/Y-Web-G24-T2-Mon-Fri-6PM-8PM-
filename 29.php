<?php

$cars=array("Volvo","BMW","Toyota",123);

// $cars = [
//     "k" => 1,
//     "0" => 2,
//     "4" => 3
// ];
// echo sizeof($cars); // count number of array

//sort array
$fruits = array("lemon", "orange", "banana", "apple");
// sort($fruits);
// var_dump($fruits);
// echo "<hr/>";
// sort($fruits);
// var_dump($fruits);

// var_dump(in_array("orange",$fruits));
// $fr = [
//  0 => 'hi',
//  2 => 'hello',
//  3 => 'banana'
// ];
// $fruits = array_replace($fruits,$fr);

// var_dump($fruits);


$items = [
    'name' => 'bora',
    'age' => 35,
    'information' => [
        'facebook' => 'bora thun',
        'telegram' => '@bora'
    ]
];
// arsort($items);
// var_dump(array_reverse($items));

// $items = [1,3,4,1];



// var_dump(array_unique($items));


// $items = "item1,item2,item3";

// $exp = explode(",",$items);
// $ip = implode("-",$exp);

// var_dump(str_replace(',','-',$items));

// $item1 = [1,2,3,4];
// $item2 = [5,6,7,3];

// $items = array_merge($item1,$item2);

// var_dump(array_reverse($items));


$items = [
    'name' => 'bora',
    'phone' => '0129391329'
];


var_dump(array_values($items));