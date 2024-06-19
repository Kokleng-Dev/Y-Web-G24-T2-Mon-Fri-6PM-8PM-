<?php

// local variable
// $b = 'test';
// function name(){
//     $a = 'asd';
// }

// name();
// echo $b;


// global variable

// $c = 1;
// function global_var(){
//     global $c;
//     echo $c;  
//     echo "</br>";  
// }

// global_var();

// echo $c;

// function myTest() {
//     static $x = 0;
//     echo $x;
//     $x = 2;
// }

// myTest();
// myTest();





  
//   myTest();  // x = 0 -> x = 1

//   myTest(); // x = 1 -> x = 2
//   myTest(); // x = 2 -> x = 3
  



// function myFunc(){
//     define("TEST", 123);
// }

// myFunc();
// echo TEST;

// echo "<br>";

// define("myKey", 123);
// echo myKey;

// var_dump(myKey);
// die; exit();

// $a = 10;
function nnnn(){
    global $a ;
    $a = 15;
    echo $a;
}

// nnnn();
echo $a;

?>