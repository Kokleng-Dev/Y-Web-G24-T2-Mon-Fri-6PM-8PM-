<?php

$a = 10;
$b = 10;

// == value
// var_dump($a == $b);

// === value + data type
// var_dump($a === $b);

// != and !==
// var_dump($a != $b);

// < and >
// var_dump($a < 15);

// $c = 10;
// <= , >=
// var_dump($c >= 10); 10 > 10 or 10 == 10


$x = 10;
$y = 15;

// echo($x + 10 / 10 <=> $y - 4); // 20 > 11 +

// if n1 < n2 => -1
// if n1 = n2 => 0
// if n1 < n2 => 1


$p = 10;
// $p++; // $p = $p + 1;

// $p--; // $p = $p - 1;

// ++$p;
// --$p;

// $o = 10 + $p++; //  10 + p and p = p + 1
// $o = 10 + ++$p; // p = p + 1 -> 10 + p

// ++$p;
// $p++;

// echo $p;

$z = 2;
// thinking 

/*1. */ var_dump(1 < --$z); echo "<br>"; // 1 < 1 , z = 1 -> false
/*2. */ var_dump(1 < $z--); echo "<br>"; // 1 < 1 , z = 0 -> false
/*3. */ var_dump(1 <= ++$z); echo "<br>"; // 1 <= 1 , z = 1 -> true
/*4. */ var_dump(1 >= (--$z + 1)); echo "<br>"; // 1 >= (0 + 1) , z = 0 -> true
/*5. */ var_dump(1 <= (--$z + 2)); echo "<br>"; // 1 <= (-1 + 2), z = -1 -> true
/*6. */ var_dump(1 == (--$z + --$z)); echo "<br>"; // 1 == (-2 + -3), z = -3 -> false
/*7. */ var_dump(1 >= (--$z + $z++)); echo "<br>"; // 1 >= (-4 + -4), z = -3 -> true
/*8. */ var_dump($z++ >= ($z + $z++)); echo "<br>"; // -3 >= (-3 + -3)  , z = -1 -> true
/*9. */ var_dump($z * 2 >= ($z + ++$z)); echo "<br>"; // -1*2 >= (-1 + 0), z = 0 -> false
/*10.*/ var_dump($z-- >= (--$z - $z++)); echo "<br>"; // 0 >= (-1 - -1) , z= -1 -> true

echo $z;
// run by code 



