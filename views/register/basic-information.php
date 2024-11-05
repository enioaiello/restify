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

$nameError = '';
$addressError = '';
$categoryError = '';

// Si le formulaire est soumis
if (isset($_POST['submit'])) {
    // Si le nom n'est pas renseigné
    if (empty($_POST['name'])) {
        $nameError = '<p class="error">Veuillez saisir un nom.</p>';
    }
    // Si l'adresse n'est pas renseignée
    if (empty($_POST['address'])) {
        $addressError = '<p class="error">Veuillez saisir une adresse.</p>';
    }
    // Si la catégorie n'est pas renseignée
    if (empty($_POST['category'])) {
        $categoryError = '<p class="error">Veuillez sélectionner une catégorie.</p>';
    }
}

require '../components/header.php';
?>
<!--    <form class="form" action="contact.php" method="post">-->
<!--        <h2 class="title">Enregistrer un restaurant</h2>-->
<!---->
<!--        <div class="form-group">-->
<!--            <label for="name" class="label">Nom du restaurant</label>-->
<!--            <input type="text" id="name" name="name" class="form-control" placeholder="Obligatoire">-->
<!--            --><?php
//            echo $nameError;
//            ?>
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label for="address" class="label">Adresse</label>-->
<!--            <input type="text" id="address" name="address" class="form-control" placeholder="Obligatoire">-->
<!--            --><?php
//            echo $addressError;
//            ?>
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label for="category" class="label">Catégorie de mon restaurant</label>-->
<!--            <select name="category" id="category">-->
<!--                <option value="restaurant">Restaurant</option>-->
<!--                <option value="brewery">Brasserie</option>-->
<!--                <option value="fast-food">Fast-food</option>-->
<!--            </select>-->
<!--            --><?php
//            echo $categoryError;
//            ?>
<!--        </div>-->
<!--        <button type="submit" class="button-primary">Enregistrer</button>-->
<!--    </form>-->

<?php
require '../components/error.php';
?>

<?php
require '../components/footer.php';
?>