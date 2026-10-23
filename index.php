<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$options = ['options' => ['min_range' => 0]];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (filter_var($_POST['quantity'], FILTER_VALIDATE_INT, $options)) {

        $bookName = $_POST['bookName'];
        $price = floatval($_POST['price']);
        $quantity = intval($_POST['quantity']);
        
        $bookFound = false;

        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['title'] === $bookName) {
                $_SESSION['cart'][$key]['quantity'] = $quantity;
                $bookFound = true;
                break;
            }
        }
        if (!$bookFound) {
            $_SESSION['cart'][] = [
                'title'    => $bookName,
                'price'    => $price,
                'quantity' => $quantity
            ];
        }
        header('Location: cart.php');
        exit();
    }    
}

include 'index.html.php';