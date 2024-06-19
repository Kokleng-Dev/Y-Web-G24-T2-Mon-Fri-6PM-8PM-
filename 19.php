<?php
// $x = 10;
// condition is true => work
// condition is false => stop
// while($x){
//     echo $x . "<br>";
//     $x--;
// }
$conditon = true;
while($conditon){
    $username = readline('Enter your username : ');
    $password = readline('Enter your password : ');

    if($username == 'admin' && $password == '123'){
        $conditon = false;
        echo "Success";
    } else {
        echo "please try again !!!\n" ;
    }
}
?>