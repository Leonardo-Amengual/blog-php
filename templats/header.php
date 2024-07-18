<?php
include_once("helpers/url.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
            <img src="<?= $BASE_URL ?>/img/logo.svg" alt="blog">
        </a>
        <nav>
            <ul id="navBar">
                <li><a href="<?= $BASE_URL ?>" class="navLink">Home</a></li>
                <li><a href="<?= $BASE_URL ?>" class="navLink">Categorias</a></li>
                <li><a href="<?= $BASE_URL ?>" class="navLink">Sobre</a></li>
                <li><a href="<?= $BASE_URL ?>" class="navLink">Contato</a></li>
            </ul>
        </nav>
    </header>