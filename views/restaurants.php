<?php
//require './components/config.php';
include_once URL . 'views/components/header.php';
?>

<div class="container">
    <div class="head">
        <h2 class="title">Qu'allons-nous <span class="pretty">manger</span> aujourd'hui ?</h2>
    </div>
    <div class="content">
        <div class="list">
<!--            <h3 class="title">Liste des restaurants</h3>-->
            <?php
            // Vérifier si des restaurants sont en base de données
            $query = "SELECT * FROM restaurants";
            $result = mysqli_query($connexion, $query);
            if (mysqli_num_rows($result) > 0) {
                // Afficher les restaurants
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="restaurant">';
                    if ($row['image'] != null) {
                        echo '<img src="' . $row['image'] . '" alt="' . $row['name'] . '" class="image">';
                    }
                    echo '<div class="head">';
                    echo '<div class="name">';
                    echo '<h3 class="title">' . $row['name'] . '</h3>';
                    echo '<p class="category">' . $row['category'] . '</p>';
                    echo '</div>';
                    echo '<div class="details">';
                    $now = date('H:i');
                    if ($now >= $row['opens'] && $now <= $row['close']) {
                        echo '<p class="status open">Ouvert</p>';
                    } else {
                        echo '<p class="status close">Fermé</p>';
                    }
                    echo '<a href="https://www.google.com/maps/search/?api=1&query=' . $row['localisation'] . '" class="localisation">Voir sur la carte</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="separator"></div>';
                    echo '<div class="content">';
                    echo '<h3 class="title">Détails</h3>';
                    echo '<p class="address">Adresse : ' . $row['localisation'] . '</p>';
                    if ($row['phone'] != null) {
                        echo '<p class="phone">' . $row['phone'] . '</p>';
                    }
                    if ($row['website'] != null) {
                        echo '<a href="' . $row['website'] . '" target="_blank" class="website">Visiter le site web</a>';
                    }
                    echo '<p class="opening">Ouvert de ' . $row['opens'] . ' à ' . $row['close'] . '</p>';

                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p class="content">Aucun restaurant n\'est disponible pour le moment.</p>';
            }
            ?>
        </div>
    </div>
</div>

<?php
require './components/footer.php';
?>