<?php
    // Paramètres de connexion
    $host = '127.0.0.1';
    $dbname = 'restify';
    $user = 'root';
    $pass = '';

    // Connexion à la base de données
    $connexion = mysqli_connect($host, $user, $pass, $dbname);

    // Vérifier la connexion
    if (!$connexion) {
        die("Échec de la connexion : " . mysqli_connect_error());
    }

require './components/header.php';
?>

<div class="container">
    <div class="head">
        <h2 class="title">Qu'allons-nous <span class="pretty">manger</span> aujourd'hui ?</h2>
    </div>
    <div class="content">
        <?php
        // Vérifier si des restaurants sont en base de données
        $query = "SELECT * FROM restaurants";
        $result = mysqli_query($connexion, $query);
        if (mysqli_num_rows($result) > 0) {
            // Afficher les restaurants
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="restaurant">';
                echo '<h3 class="title">' . $row['name'] . '</h3>';
                echo '<p class="address">' . $row['address'] . '</p>';
                echo '<p class="category">' . $row['category'] . '</p>';
                echo '<p class="opening">Ouvert de ' . $row['opening'] . ' à ' . $row['closing'] . '</p>';
                echo '</div>';
            }
        } else {
            echo '<p class="content">Aucun restaurant n\'est disponible pour le moment.</p>';
        }
        ?>
    </div>
</div>

<?php
require './components/footer.php';
?>