<?php
session_start();
setcookie('cart');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['userName'] = $_POST['userName'];
    header('Location: index.php');
    exit();
}else {
    include 'login.html.php';
}