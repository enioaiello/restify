<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Enregistrez votre restaurant et soyez indexés.">
    <title>Restify</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/homepage.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.4.0/fonts/remixicon.css">
    <link rel="icon" href="./assets/img/logo.png">
</head>
<body class="body">
    <header class="header">
        <nav class="navbar">
            <div class="brand">
                <img src="./assets/img/logo.png" alt="Logo Restify" class="logo">
                <h1 class="title">Restify</h1>
            </div>
            <ul class="elements-container">
                <li class="element">
                    <a href="./index.php" class="link">Accueil</a>
                </li>
                <li class="element">
                    <a href="./views/restaurant.php" class="link">Commander</a>
                </li>
                <li class="element">
                    <a href="./views/register.php" class="button-primary">Enregistrer</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="main">
        <div class="banner">
            <h2 class="title">Découvrez de nouvelles saveurs, grâce à <span class="service">Restify</span> !</h2>
            <a href="./views/restaurant.php" class="button-primary">Commander</a>
        </div>
        <div class="details">
            <h3 class="title">Pourquoi <span class="service">Restify</span> ?</h3>
            <div class="pros-container">
                <div class="pros">
                    <i class="ri-store-2-line icon"></i>
                    <h4 class="title">Enregistrez votre établissement</h4>
                    <p class="content">Avec <span class="service">Restify</span>, il devient plus facile d'être répertorié.</p>
                    <p class="content">C'est gratuit, simple et rapide !</p>
                    <p class="content">Vos clients pourront alors découvrir votre restaurant et commander !</p>
                </div>
                <div class="pros">
                    <i class="ri-building-2-line icon"></i>
                    <h4 class="title">Commandez localement</h4>
                    <p class="content">Avec <span class="service">Restify</span>, commander devient plus rapide.</p>
                    <p class="content">Parcourez une liste immense de restaurants, ou recherchez votre restaurant favori !</p>
                    <p class="content">Vous obtiendrez alors toutes les informations nécessaires à la commande en un clic.</p>
                </div>
            </div>
        </div>
        <div class="informations">
            <h3 class="title">Toujours pas convaincu ?</h3>
            <div class="infos-container">
                <div class="info">
                    <i class="ri-check-line icon"></i>
                    <h4 class="title">+5,000 restaurants enregistrés</h4>
                </div>
                <div class="info">
                    <i class="ri-building-2-line icon"></i>
                    <h4 class="title">+15,000 clients satisfaits</h4>
                </div>
            </div>
        </div>
        <div class="trusts">
            <h3 class="title">Ils nous font confiances.</h3>
            <div class="companies-container">

            </div>
        </div>
        <div class="start">
            <h3 class="title">Prêt à se lancer ?</h3>
            <div class="options-container">
                <div class="option">
                    <h4 class="title">Enregistrer mon restaurant</h4>
                    <p class="content">Parce que nous connaissons votre objectif, nous vous aiderons à l'atteindre !</p>
                    <a href="./views/register.php" class="button-secondary">C'est parti !</a>
                </div>
                <div class="option">
                    <h4 class="title">Parcourir les restaurants</h4>
                    <p class="content">Une petite faim ? Parcourez les restaurants enregistrés et commandez !</p>
                    <a href="./views/register.php" class="button-primary">C'est parti !</a>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <p class="copyright">&copy;2025, Restify. Tous droits réservés.</p>
    </footer>
    <div class="cookies">
        <p class="content">En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de cookies.</p>
        <button id="close-cookies" class="button-primary">Accepter</button>
    </div>
    <script src="./assets/js/cookies.js"></script>
    <script src="./assets/js/slider.js"></script>
</body>
</html>