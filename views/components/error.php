<?php
require '../components/header.php';
?>
<h2 class="title">Oups ! Impossible de traiter votre requête !</h2>
<p class="subtitle">Il s'est passé quelque chose de notre côté, nous en sommes désolé.</p>
<p class="content">Si vous contactez l'assistance, transmettez-leur le code d'erreur suivant :</p>
<code class="error"><?php if($_GET['erreur']) {echo $_GET['erreur'];} else {echo 'Erreur inconnue';}; ?></code>

<?php
if (strpos($_SERVER['REQUEST_URI'], 'register') !== false) {
    echo '<a href="../../index.php" class="primary-button">Retourner à l\'accueil</a>';
} else if (strpos($_SERVER['REQUEST_URI'], 'views') !== false) {
    echo '<a href="../index.php" class="primary-button">Retourner à l\'accueil</a>';
} else {
    echo '<a href="./index.php" class="primary-button">Retourner à l\'accueil</a>';
}
?>

<?php
require '../components/footer.php';
?>