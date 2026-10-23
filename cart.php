<?php
session_start();
setcookie('cart');
if (!empty($_SESSION['userName'])) {
    include 'cart.html';
    echo '<pre>';
    var_dump($_COOKIE);
    echo '<pre>';
}else {
    header('Location: index.php');
}
