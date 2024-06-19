<?php
/*
 not -> !
 !false -> true
 !true -> false
*/
// $a = false;
// $b = false;

// var_dump(!$a && $b);


$a = 123;
$b = 50;
$c = $a . $b;

$a += 10;
// $a = $a + 10

$a .= ' 1123';
// $a = $a . ' 1123'

// echo $a;

// $amount = 100;
// $day = 5;

// $result = $amount * $day >= 1000 ? 'big' : 'small';

// echo $result;

// $total = 600;
// $discount = 5; // %

// $grand_total = $total >= 500 ? $total - ($total * $discount / 100) : $total;
// total - discount_price

$total = 600;
$discount = 5; // %
$dis = '<b>Total Price</b> : $' 
        . $total . '<hr>' . 'Discount : %' 
        . $discount . '<hr>' . 'Grand Total : $' 
        . $total * (1 - $discount / 100); 

$no_dis = 'Total Price : $' . $total . '<hr>' 
    . 'Discount : $0' . '<hr>' . 'Grand Total : $' . $total; 

$grand_total = $total >= 500 ? $dis : $no_dis;
echo $grand_total;
// true ? yes : no
// false ? no : yes
// total * 95% = final

$a = 100;
$b = 40;
$c = 31;



