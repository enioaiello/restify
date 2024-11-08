</main>
<footer class="footer">
    <p class="copyright">&copy;2025, Restify. Tous droits réservés.</p>
</footer>
<div class="cookies">
    <p class="content">En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de cookies.</p>
    <button id="close-cookies" class="button-primary">Accepter</button>
</div>
    <?php
        if (strpos($_SERVER['REQUEST_URI'], 'restaurant') || strpos($_SERVER['REQUEST_URI'], 'components')) {
            echo '<script src="../../assets/js/cookies.js"></script>';
        } else if(strpos($_SERVER['REQUEST_URI'], 'register-restaurant.php')) {
            echo '<script src="../assets/js/cookies.js"></script>';
        } else {
            echo '<script src="../assets/js/cookies.js"></script>';
        }
    ?>
</body>
</html>