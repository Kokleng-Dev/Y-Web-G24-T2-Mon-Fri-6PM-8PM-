<?php

for($j = 2; $j <= 9; $j++){
    for($i = 1; $i <= 10; $i++){
        echo $j . " x " . $i . " = " . ($j * $i) . "\n";
    }
    echo "\n---------------------------\n";
}

// $j = 2 
/*
    $j = 2 <= 3 ? true -> 
        => for loop = 10time
            -> display 10 statements
        -> j++ = 3
    $j = 3 <= 3 ? true ->  
        => for loop = 10 time
            -> display 1- statement
        -> j++ =4
    $j = 4 <= 3 ? false ->leave 
*/
