<?php

$number = 4;

switch ($number) {
    case 4:
        # find odd number
        // if($number % 2 != 0){
        //     echo "this is odd number";
        // } else {
        //     echo "this is even number";
        // }
        switch($number % 2){
            case 0:
                echo "this is even number";
                break;
            default:
                echo "this is odd number";
                break;
        }
        break;
    case 2:
        echo "<br>";
        echo "number 2";
    default:
        echo "not found";
        break;
}