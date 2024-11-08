<?php
require 'config.php';
echo URL;
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Enregistrez votre restaurant et soyez indexés.">
    <title>Restify</title>
    <link rel="stylesheet" href="<?php echo URL . 'assets/css/style.css'; ?>">
    <?php

        if (strpos($_SERVER['REQUEST_URI'], 'register.php')) {
            ?>
            <link rel="stylesheet" href="<?php echo URL . 'assets/css/register.css'; ?>">
        <?php
        } else if (strpos($_SERVER['REQUEST_URI'], 'restaurants.php')) {
            ?>
            <link rel="stylesheet" href="<?php echo URL . 'assets/css/restaurant.css'; ?>">
        <?php
        } else if (strpos($_SERVER['REQUEST_URI'], 'index.php')) {
            ?>
            <link rel="stylesheet" href="<?php echo URL . 'assets/css/homepage.css'; ?>">
        <?php
        } else if (strpos($_SERVER['REQUEST_URI'], 'success.php')) {
            ?>
            <link rel="stylesheet" href="<?php echo URL . 'assets/css/success.css'; ?>">
        <?php
        } else {
            ?>
            <link rel="icon" href="<?php echo URL . 'assets/img/logo.png'; ?>">
        <?php
        }

        if (strpos($_SERVER['REQUEST_URI'], 'restaurant')) {
            ?>
            <link rel="stylesheet" href="<?php echo URL . 'assets/css/style.css'; ?>">
            <link rel="stylesheet" href="<?php echo URL . 'assets/css/register.css'; ?>">
        <?php
        }
        if (strpos($_SERVER['REQUEST_URI'], 'components')) {?>
            <link rel="stylesheet" href="<?php echo URL . 'assets/css/error.css'; ?>">
            <link rel="stylesheet" href="<?php echo URL . 'assets/css/'; ?>">
        <?php } ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.4.0/fonts/remixicon.css">
    <?php
    if (strpos($_SERVER['REQUEST_URI'], 'register.php')) {?>
        <link rel="stylesheet" href="<?php echo URL . 'assets/css/register.css';?>">
    <?php
    } else if (strpos($_SERVER['REQUEST_URI'], 'restaurant.php')) {?>
    <link rel="stylesheet" href="<?php echo URL . 'assets/css/restaurant.css';?>">
    <?php
    } else if (strpos($_SERVER['REQUEST_URI'], 'index.php')) {?>
    <link rel="stylesheet" href="<?php echo URL . 'assets/css/homepage.css';?>">
    <?php
    }?>
    <link rel='icon' href='<?php echo URL . "assets/img/logo.png";?>'>
</head>
<body class="body">
<header class="header">
    <nav class="navbar">
        <div class="brand">
            <img src="<?php echo URL . 'assets/img/logo.png';?>" alt="Logo Restify" class="logo">
            <h1 class="title">Restify</h1>
        </div>
        <ul class="elements-container">
            <li class="element">
                <a href="<?php echo URL;?>" class="link">Accueil</a>
            </li>
            <li class="element">
                <a href="<?php echo URL . 'views/restaurants.php';?>" class="link">Commander</a>
            </li>
            <li class="element">
                <a href="<?php echo URL . 'views/register-restaurant.php';?>" class="link">Enregistrer</a>
            </li>
        </ul>
    </nav>
</header>
<main class="main">