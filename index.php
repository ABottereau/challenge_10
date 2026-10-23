<?php
session_start();
setcookie('cart');
include 'index.html';
var_dump($_SESSION);


if (!empty($_SESSION['userName'])) {
    if (isset($_POST['addEragon'])) {
        $_COOKIE = ['Eragon' => [
            'title' => 'Eragon',
            'price' => 20]];
    }
        if (isset($_POST['addAine'])) {
        $_COOKIE = ['Aine' => [
            'title' => "L'ainé",
            'price' => 20]];
    }
    if (isset($_POST['addBrisingr'])) {
        $_COOKIE = ['Brisingr' => [
            'title' => 'Brisingr',
            'price' => 20]];
    }
    if (isset($_POST['addHeritage'])) {
        $_COOKIE = ['Heritage' => [
            'title' => "L'héritage",
            'price' => 20]];
    }
}