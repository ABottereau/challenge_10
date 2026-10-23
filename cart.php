<?php
session_start();

if (!empty($_SESSION['userName'])) {
    include 'cart.html.php';
    if (!empty($_SESSION['cart'])) {
        echo '<pre>';
        var_dump($_SESSION['cart']);
        echo '<pre>';
    }
}else {
    header('Location: index.php');
    exit();
}