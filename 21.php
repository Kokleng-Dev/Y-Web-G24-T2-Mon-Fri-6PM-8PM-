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
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 border bg-warning-subtle">
                <h2 class="text-center">Invoice</h2>
                <table class="w-100">
                    <tr>
                        <td>John Doe</td>
                        <td class="text-end">June 12 2012</td>
                    </tr>
                    <tr>
                        <td>555 Main Street</td>
                        <td class="text-end">11:00 AM</td>
                    </tr>
                </table>
                <hr>
                <?php
                    $items = [
                        ['name' => 'BECKETT', 'price' => 50.00], // 0
                        ['name' => 'GRIFFIN', 'price' => 20.00], // 1
                        ['name' => 'VAT(19%)', 'price' => 10], // 2
                        ['name' => 'shipping', 'price' => 5] // 3
                    ];

                    $total = 0;
                ?>
                <table class="table table-hover">
                    <?php foreach ($items as $index => $item) { ?>
                        <tr>
                            <td><?php echo $item['name']; ?></td>
                            <td class="text-end"><?php echo $index == 2 ? "%" : '$' ?> <?php echo $item['price']; ?></td>
                        </tr>
                        <?php 
                            // $index < 2 || $index == 3
                            if($index != 2){
                                $total += $item['price'];
                            } else { // index = 2
                                $total += ($total * $item['price'] / 100);
                                // total = total + ()
                            }
                            // if($index == 2){ // vat
                            //     $total += ($total * $item['price'] / 100);
                            // }
                            // if($index == 3){
                            //     $total += $item['price'];
                            // }
                        ?>
                    <?php } ?>
          
                    <tr>
                        <td class="text-warning">Total</td>
                        <td class="text-end text-warning">$ <?php echo $total; ?></td>
                    </tr>
                </table>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>
</html>