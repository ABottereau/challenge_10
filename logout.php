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
    header('Location: index.php');
}