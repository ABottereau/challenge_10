<?php
if (!empty($_SESSION['userName'])) {
    include 'logout.html';
}else {
    header('Location: index.php');
}