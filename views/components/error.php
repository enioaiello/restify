<style>
    .main {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

        .title {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .subtitle {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .primary-button {
            padding: 0.5% 5%;
            background-color: var(--primary);
            border: 1px solid var(--primary);
            color: var(--text-white);
            border-radius: var(--radius);
            cursor: pointer;
            text-decoration: none;
            font-size: 1.4rem;
        }

        .primary-button:hover {
            background-color: var(--secondary);
            border: 1px solid var(--secondary);
        }
    }
</style>

<h2 class="title">Oups ! Impossible de traiter votre requête !</h2>
<p class="subtitle">Il s'est passé quelque chose de notre côté, nous en sommes désolé.</p>
<!--<a href="../../index.php" class="primary-button">Retourner à l'accueil</a>-->
<?php
if (strpos($_SERVER['REQUEST_URI'], 'views') !== false) {
    echo '<a href="../index.php" class="primary-button">Retourner à l\'accueil</a>';
} else if (strpos($_SERVER['REQUEST_URI'], 'register') !== false) {
    echo '<a href="../index.php" class="primary-button">Retourner à l\'accueil</a>';
} else {
    echo '<a href="./index.php" class="primary-button">Retourner à l\'accueil</a>';
}