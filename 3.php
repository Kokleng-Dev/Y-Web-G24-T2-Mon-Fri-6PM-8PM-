<?php
echo "hello world";
// =
$a = 10;

// +=
$b = 5;
$b += $a; // $b = $b + $a
// $b = $b + $a = 5 + 10 = 15

// -=
$c = 10;
$c -= $b; // $c = $c - $b
// c = c - b = 10 - 15 = -5

$c -= ($b * 10); // $c = $c - ($b * 10)
// c = c - (b*10) = -5 - (15*10) = - 5 - 150 = -155


$d = 10;
$d *= $c;
// d = d * c = 10 * -155 = -1550

$d *= -1;
// d = d * -1 = -1550 * -1
// echo $d;

$x = 10;
$y = 15;

$total = $x + $y;
$total += 10;

$p = 0;
$p += 10; // $p = $p + 10


$total /= 5; // $total = $total / 5

$total %= 3; // total = total % 3 = 7 % 3 = 1

echo $total;
