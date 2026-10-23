<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$options = ['options' => ['min_range' => 0]];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (filter_var($_POST['quantity'], FILTER_VALIDATE_INT, $options)) {
        $_SESSION['cart'][] = [
            'title' => $_POST['bookName'],
            'price' => $_POST['price'],
            'quantity' => $_POST['quantity']
        ];
        header('Location: cart.php');
    }    
}

include 'index.html.php';