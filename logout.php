<?php
session_start();
setcookie('cart');
if (!empty($_SESSION['userName'])) {
    include 'logout.html';
}else {
    header('Location: index.php');
}

if (isset($_POST['logoutButton'])) {
    unset($_SESSION['userName']);
    unset($_SESSION['cart']);
    header('Location: index.php');
}