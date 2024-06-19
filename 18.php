<?php

// array index
// $arr = ['hello','0192992929'];
// ass : $arr[0] or $arr[1];

/*
    Associative Array
    $arr = [
        'name' => 'seyha',
        'age' => 25
    ]
    $arr['name']
    $arr['age']
*/

// $arr = [
//     'name' => 'seyha', // index = name
//     25, // index = 0
//     'type' => 'student', // index = type
//     'hello' // index = 1
// ];
// var_dump($arr);
// echo $arr['name'];
// echo "<hr/>";
// echo $arr['age'];

/*
Multidimensional Array

$arr = [
    [], // index 0 
    'kk' => [],
    [], // index 1
]

*/
$students = [
    ['name' => 'Ratha', 'Age' => 25, 'Major' => 'PHP'],
    ['name' => 'Choub Phearen', 'Age' => 21, 'Major' => 'HTML'],
    ['name' => 'Chettra', 'Age' => 24, 'Major' => 'C++'],
    ['name' => 'Sokkong', 'Age' => 36, 'Major' => 'CSS'],
    ['name' => 'LeapHeng', 'Age' => 18, 'Major' => 'Bootstrap'],
    ['name' => 'Vannak', 'Age' => 27, 'Major' => 'Java'],
    ['name' => 'Boribou', 'Age' => 18, 'Major' => 'HTML'],
];

$persons = [
    'personal' => [
        'name' => 'seyha',
        'age' => 25,
        'gender' => 'male'
    ],
    'experiences' => [
        'PHP',
        'C++',
        'HTML',
        'CSS'
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
    <h2 class="text-primary">Personal Information</h2>
    <table class="table table-bordered table-hover">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
        </tr>
        <tr>
            <?php  foreach($persons['personal'] as $key => $person){ ?>
                <td><?php echo $person; ?></td>
            <?php } ?>
        </tr>
    </table>

    <h2 class="text-success">Experiences</h2>
    <ul>
        <!-- <?php foreach($persons['experiences'] as $v){ ?>
            <li><?php echo $v; ?></li>
        <?php  } ?> -->

        <?php
            foreach($persons['experiences'] as $v){
                echo "<li>" . $v  .  "</li>";
            }
        ?>
    </ul>
</body>
</html>
$students = [
    ['name' => 'Ratha', 'Age' => 25, 'Major' => 'PHP'],
    ['name' => 'Choub Phearen', 'Age' => 21, 'Major' => 'HTML'],
    ['name' => 'Chettra', 'Age' => 24, 'Major' => 'C++'],
    ['name' => 'Sokkong', 'Age' => 36, 'Major' => 'CSS'],
    ['name' => 'LeapHeng', 'Age' => 18, 'Major' => 'Bootstrap'],
    ['name' => 'Vannak', 'Age' => 27, 'Major' => 'Java'],
    ['name' => 'Boribou', 'Age' => 18, 'Major' => 'HTML'],
];



