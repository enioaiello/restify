<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Enregistrez votre restaurant et soyez indexés.">
    <title>Restify</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <?php
        if (strpos($_SERVER['REQUEST_URI'], 'register.php')) {
            echo '<link rel="stylesheet" href="../assets/css/register.css">';
        } else if (strpos($_SERVER['REQUEST_URI'], 'restaurants.php')) {
            echo '<link rel="stylesheet" href="../assets/css/restaurant.css">';
        } else if (strpos($_SERVER['REQUEST_URI'], 'index.php')) {
            echo '<link rel="stylesheet" href="../assets/css/homepage.css">';
        }

        if (strpos($_SERVER['REQUEST_URI'], 'register')) {
            echo "<link rel='stylesheet' href='../../assets/css/style.css'>";
            echo '<link rel="stylesheet" href="../../assets/css/register.css">';
        }
        if (strpos($_SERVER['REQUEST_URI'], 'components')) {
            echo "<link rel='stylesheet' href='../../assets/css/style.css'>";
            echo '<link rel="stylesheet" href="../../assets/css/error.css">';
        }

    ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.4.0/fonts/remixicon.css">
    <?php
    if (strpos($_SERVER['REQUEST_URI'], 'register.php')) {
        echo '<link rel="stylesheet" href="../assets/css/register.css">';
    } else if (strpos($_SERVER['REQUEST_URI'], 'restaurant.php')) {
        echo '<link rel="stylesheet" href="../assets/css/restaurant.css">';
    } else if (strpos($_SERVER['REQUEST_URI'], 'index.php')) {
        echo '<link rel="stylesheet" href="../assets/css/homepage.css">';
    }

    if (strpos($_SERVER['REQUEST_URI'], 'register') || strpos($_SERVER['REQUEST_URI'], 'components')) {
        echo "<link rel='icon' href='../../assets/img/logo.png'>";
    } else {
        echo "<link rel='icon' href='../assets/img/logo.png'>";
    }
    ?>
</head>
<body class="body">
<header class="header">
    <nav class="navbar">
        <div class="brand">
            <?php
                if (strpos($_SERVER['REQUEST_URI'], 'register') || strpos($_SERVER['REQUEST_URI'], 'components')) {
                    echo '<img src="../../assets/img/logo.png" alt="Logo Restify" class="logo">';
                } else {
                    echo '<img src="../assets/img/logo.png" alt="Logo Restify" class="logo">';
                }
            ?>
            <h1 class="title">Restify</h1>
        </div>
        <ul class="elements-container">
            <li class="element">
                <?php
                    // Si l'URL contient "register"
                    if (strpos($_SERVER['REQUEST_URI'], 'register') || strpos($_SERVER['REQUEST_URI'], 'components')) {
                        echo '<a href="../../index.php" class="link">Accueil</a>';
                    } else {
                        echo '<a href="../index.php" class="link">Accueil</a>';
                    }
                ?>
            </li>
            <li class="element">
                <?php
                // Si l'URL contient "register"
                if (strpos($_SERVER['REQUEST_URI'], 'register') || strpos($_SERVER['REQUEST_URI'], 'components')) {
                    echo '<a href="../restaurants.php" class="link">Commander</a>';
                } else {
                    echo '<a href="./restaurants.php" class="link">Commander</a>';
                }
                ?>
            </li>
            <li class="element">
                <?php
                // Si l'URL contient "register"
                if (strpos($_SERVER['REQUEST_URI'], 'register') || strpos($_SERVER['REQUEST_URI'], 'components')) {
                    echo '<a href="../register.php" class="button-primary">Enregistrer</a>';
                } else {
                    echo '<a href="./register.php" class="link">Enregistrer</a>';
                }
                ?>
            </li>
        </ul>
    </nav>
</header>
<main class="main">