<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $_SESSION['userName'] = $_POST['userName'];
    header('Location: index.php');
}else {
    include 'login.html';
}