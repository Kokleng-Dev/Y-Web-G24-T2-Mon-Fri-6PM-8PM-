<?php

// $check = true;

// if($check){
//     if(2 == 2){
//         if(false){
//             echo "hi false";
//         } else {
//             echo "hello true";
//         }
//     } else {
//         echo "hello";
//     }
// }


$wifi_name = readline('Enter Wifi : ');
$password = readline('Enter Password : ');
$device = readline('Enter Type of device : ');



if($wifi_name == 'sunrise' && $password == 123 && $device == 'ios'){
    echo "success";
} else {
    echo "fail";
}

// if($wifi_name == 'sunrise'){
//     if($password == '123'){
//         if($device != 'ios'){
//             echo "bot";
//         } else {
//             echo $device;
//         }
//     } else {
//         echo "fail";
//     }
// } else {
//     echo "wifi not found";
// }