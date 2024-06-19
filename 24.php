<?php

$items = [
    ['name' => 'BECKETT', 'price' => 50.00], // 0
    ['name' => 'GRIFFIN', 'price' => 20.00], // 1
    ['name' => 'Hello', 'price' => 20.00], // 1
    ['name' => 'Hello 123', 'price' => 20.00], // 1
];

echo "------------ Mart ------------\n\n";
echo "Please Select Item\n";

foreach ($items as $index => $item) {
    echo "Input '" . ($index + 1) . "' for Item '" . $item['name'] ."'\n";
}

echo "Input 'x' for stop select item !!! \n\n";

$display = "---------- Your Order ---------\n";
$display .= "#   Item           Price\n";

$number = 1;
$total = 0;

while(true){
    $input = readline('Enter Item : ');

    // press x 
    if($input == 'x'){
        break;
    }
    if($input > count($items) - 1){
        echo "\nPlease Try Again or Item Not Found !!! \n";
        continue ;
    }
    $item = $items[$input - 1];

    $display .= $number . '   ' . $item['name'] . '           ' . $item['price'] . '$';
    $display .= "\n";
    $total += $item['price'];
    $number++;

    echo "\nOrder success !!!\n";
}

$display .= "------------------------------------\n";

$display .= '#   ' . 'Total :' . '           ' . $total . '$' . "\n";

$shipping = 10;
$vat = 5;
$display .= '#   ' . 'VAT :' . '             ' . $vat . '%' . "\n";
$display .= '#   ' . 'Shipping :' . '        ' . $shipping . '$' . "\n";


$cal_total_after_vat = $total + ($total * $vat / 100);
$grand_total = $cal_total_after_vat + $shipping;

$display .= '#   ' . 'Grand Total :' . '     ' . $grand_total . '$' . "\n\n";

echo ("\n");
echo $display;

// print('break loop !!!');