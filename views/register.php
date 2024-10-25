<?php
//    // Paramètres de connexion
//    $host = '127.0.0.1';
//    $dbname = 'restify';
//    $user = 'root';
//    $pass = '';
//
//    // Connexion à la base de données
//    $connexion = mysqli_connect($host, $user, $pass, $dbname);
//
//    // Vérifier la connexion
//    if (!$connexion) {
//        die("Échec de la connexion : " . mysqli_connect_error());
//    }
//?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Enregistrez votre restaurant et soyez indexés.">
    <title>Restify</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/homepage.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.4.0/fonts/remixicon.css">
    <link rel="icon" href="../assets/img/logo.png">
</head>
<body class="body">
<header class="header">
    <nav class="navbar">
        <div class="brand">
            <img src="../assets/img/logo.png" alt="Logo Restify" class="logo">
            <h1 class="title">Restify</h1>
        </div>
        <ul class="elements-container">
            <li class="element">
                <a href="../index.php" class="link">Accueil</a>
            </li>
            <li class="element">
                <a href="./restaurant.php" class="link">Commander</a>
            </li>
            <li class="element">
                <a href="./register.php" class="button-primary">Enregistrer</a>
            </li>
        </ul>
    </nav>
</header>
<main class="main">

</main>
<footer class="footer">
    <p class="copyright">&copy;2025, Restify. Tous droits réservés.</p>
</footer>
<div class="cookies">
    <p class="content">En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de cookies.</p>
    <button id="close-cookies" class="button-primary">Accepter</button>
</div>
<script src="../assets/js/cookies.js"></script>
</body>
</html>