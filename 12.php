<?php

echo "Program Find Odd or Even Number\n";
echo "-----------------------------------\n";
echo "--------------PHP------------------\n";
echo "-----------------------------------\n\n\n";

$number = readline("Please Enter Your Number : ");

echo "\n";
echo "\n";
echo "Please Select Type of Control Statement !!!\n";
echo "Type '1' for IF ELSE\n";
echo "Type '2' for Switch Case\n";

$typeCondition = readline("Enter your type : ");

if($typeCondition == 1){
    if($number % 2 != 0){
        echo "(IF-ELSE) This number (" . $number .  ") is odd number";
    } else {
        echo "(IF-ELSE) This number (" . $number .  ") is even number";
    }
} else if ($typeCondition == 2){
    switch ($number % 2) {
        case 0:
            echo "(Switch - Case) This number (" . $number .  ") is even number";
            break;
        default:
            echo "(Switch - Case) This number (" . $number .  ") is odd number";
            break;
    }
} else {
    echo "Program exit ....";
}

// 3 = 3 x 2 x 1;
// 5 = 5 x 4 x 3 x 2 x 1;
// 0 = 1

// 2 = 2
// 3 = 3 x 2 x 1 = 5

