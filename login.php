<?php
session_start();
setcookie('cart');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['userName'] = $_POST['userName'];
    header('Location: index.php');
}else {
    include 'login.html';
}