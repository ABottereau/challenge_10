<?php
session_start();
if (!empty($_SESSION['userName'])) {
    include 'cart.html';
    if (!empty($_SESSION['cart'])) {
        echo '<pre>';
        var_dump($_SESSION['cart']);
        echo '<pre>';
    }
}else {
    header('Location: index.php');
}
