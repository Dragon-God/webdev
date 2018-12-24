<?php
    //RETRIEVE QUANTITIES
    $quantity1 = $_POST["qty1"];
    $quantity2 = $_POST["qty2"];
    $quantity3 = $_POST["qty3"];
    $quantity4 = $_POST["qty4"];
    $quantity5 = $_POST["qty5"];

    //SELLING PRICES
    $coverPhoto = 10000;
    $piano = 9000;
    $bayesTheorem = 1000;
    $paimon = 7500;
    $barbatos = 6000;

    //CALCULATE SUB TOTALS
$sub1 = $coverPhoto * $quantity1;
$sub2 = $piano * $quantity2;
$sub3 = $bayesTheorem * $quantity3;
$sub4 = $paimon * $quantity4;
$sub5 = $barbatos * $quantity5;

$total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
?>


<table border="2" cellpadding="5">
    <thead>
        <tr> <th colspan="4"><h1>YOUR RECEIPT</h1></th> </tr>
        <tr> <th><h2>Item</h2></th> <th><h2>Price</h2></th> <th><h2>Quantity</h2></th> <th><h2>Subtotal</h2></th> </tr>
    </thead>
    <tbody>
        <tr> <td><h3> Cover Photo </h3></td> <td>₦10,000</td> <td><?php echo "$quantity1" ?></td> <td><?php echo "$sub1" ?></td> </tr>
        <tr> <td><h3> Piano </h3></td> <td>₦9,000</td> <td><?php echo "$quantity2" ?></td> <td><?php echo "$sub2" ?></td> </tr>
        <tr> <td><h3> Bayes Theorem </h3></td> <td>₦1000</td> <td><?php echo "$quantity3" ?></td> <td><?php echo "$sub3" ?></td> </tr>
        <tr> <td><h3> Paimon </h3></td> <td>₦7,500</td> <td><?php echo "$quantity4" ?></td> <td><?php echo "$sub4" ?></td> </tr>
        <tr> <td><h3> Barbatos </h3></td> <td>₦6,000</td> <td><?php echo "$quantity5" ?></td> <td><?php echo "$sub5" ?></td> </tr>
    </tbody>
    <tfoot>
        <tr> <td colspan="2"><h2>TOTAL:</h2></td> <td colspan="2"><?php echo "<h2> ₦$total</h2>"?></td></tr>
    </tfoot>

