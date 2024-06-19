<?php

// create folder -> mkdir('path + name');
// if(mkdir('testing123/hello123')){
//     echo "create folder successfully";
// } else {
//     echo "error";
// }

// create folder
// mkdir('testing');

// remove folder 
// rmdir('testing');

// while(true){
//     $folder = readline('Create Folder Name : ');
//     if(file_exists($folder)){
//         rmdir($folder);
//         continue;
//     }
//     echo "File or folder not found \n\n";
// }

// echo dirname('/Applications/MAMP/htdocs/web/tiktok');


// mkdir('testing');
// $file = fopen("testing/test.txt","w");
// fwrite($file,"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");
// fwrite($file, 'hello !!!');
// fclose($file);


// rmdir("testing");

// unlink -> remove file

// $x = pathinfo('16.php');

// echo  "extension name is " . $x['extension'] . "<br>";

// foreach ($x as $key => $value) {
//   echo $key . " | " . $value . "<br>";
// }

// copy('tiktok','tttt');

/*
  - key : c -> create , r -> remove
  - create folder name
    - if exist - > create again
    - else -> create folder
  - remove 
    - if exist -> remove
    - else -> remove again
*/

/*
    1. home work
        - Create folder name : "files"
        - Generate 100 files and store it in folder name "files" 
            start from file name 1.txt -> 100.txt 
            and write world hello world into txt file base on number of number
            example: 
                - file 1 -> 1.hello world
                - file 2 -> 2.hello world
    2. home work
        - write program to handle issue below :
            - View list for all Users
            - Create User
            - Edit and Update User
            - Delete User
        * all information of user : name,age,phone,gender
*/