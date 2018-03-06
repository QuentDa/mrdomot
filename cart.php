<?php require_once 'tools/_db.php';

$_SESSION['cart'][$product['id']] = $product;

if (isset($_SESSION['cart'][])) {

    $totalPrice = 0;

    foreach ($_SESSION['cart'] as $product) {

        echo $product['image'];
        echo $product['title'];
        echo $product['price'];
        echo $product['qty'];

   $totalPrice += (float)$product['price'] * (int)$product['qty'];

 }
}

echo $totalPrice;
?>
