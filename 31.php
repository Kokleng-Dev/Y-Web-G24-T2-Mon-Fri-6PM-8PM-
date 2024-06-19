<?php

$items = ['APPLE','BANANA'];

// clear console
function clearConsole(){
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        system('cls');
    } else {
        system('clear');
    }
}

// list operation
function display_crud_operation(){
    echo "\n------- CRUD --------\n";
    echo "--- Press l for list all items ----\n";
    echo "--- Press c for create ------\n";
    echo "--- Press e for edit and update ------\n";
    echo "--- Press d for delete ------\n";
    echo "--- Press x for exit program ------\n";
}

// list all items
function list_items($list_items){
    clearConsole();
    echo "\n------- List of Items --------\n\n";
    echo "ID  ----- Item\n";
    foreach ($list_items as $index => $item) {
        echo sprintf("%04d", $index + 1) . '      ' . $item . "\n";
    }
    echo "\n-------------------------------\n";
}

// create item
function create_item(){
    clearConsole();
    return readline('New Item name : ');
}

// edit item
function edit_item(){
    global $items;

    clearConsole();
    echo "\n------ Edit item -----\n";
    foreach ($items as $index => $item) {
        echo "\nEdit Item '".$item."' by press key " . "'" . $index + 1  ."'\n";
    }

    while(true){
        $edit = readline('Press Key to edit : ');
        if($edit > count($items)){
            echo "\n ----- try agin ------ \n";
            clearConsole();
            continue;
        } 

        clearConsole();

        // edit item
        $item_detail = $items[$edit - 1];
        echo "\n------ Item Detail ------\n";
        echo sprintf("%04d", $edit) . '      ' . $item_detail . "\n";

        $items[$edit - 1] = readline('New name : ');
        echo "\n Update Successfully \n";
        break;
    }
}

// delete item
// .....


display_crud_operation();

while(true){
    $press_input = readline('Press your key : ');

    if($press_input == 'x'){
        clearConsole();
        echo "\n------Exit program.....------- \n";
        break;
    } else if($press_input == 'l'){
        // list all items
        list_items($items);
        display_crud_operation();
    } else if($press_input == 'c'){
        // add or create item
        $new_item = create_item();
        array_push($items, $new_item);
        echo "\n Create Successfully !!! \n";
        sleep(1);
        clearConsole();
        display_crud_operation();
    } else if($press_input == 'e'){
        // edit item
        edit_item();
        sleep(1);
        clearConsole();
        display_crud_operation();
    } else if($press_input == 'd'){

    } else {
        clearConsole();
        echo "\n--------------------------------\n";
        echo "   try again !! wrong input !!! \n";
        echo "--------------------------------\n";
        display_crud_operation();
    }


}