<?php
require '../components/config.php';

$name = '';
$nameError = '';
$address = '';
$addressError = '';
$categoryError = '';
$opening = '';
$oTimeError = '';
$closing = '';
$cTimeError = '';

// Si le formulaire est soumis
if (isset($_POST['submit'])) {
    // Si le nom n'est pas renseigné
    if (empty($_POST['name']) && !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['name'])) {
        $nameError = '<p class="error">Veuillez saisir un nom.</p>';
    }
    // Si l'adresse n'est pas renseignée
    if (empty($_POST['address']) && !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['address'])) {
        $addressError = '<p class="error">Veuillez saisir une adresse.</p>';
    }

    if (empty($_POST['opening']) && !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['opening'])) {
        $oTimeError = '<p class="error">Veuillez saisir une heure d\'ouverture.</p>';
    }

    if (empty($_POST['closing']) && !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['closing'])) {
        $cTimeError = '<p class="error">Veuillez saisir une heure de fermeture.</p>';
    }

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['address'])) {
        $address = $_POST['address'];
    }
    if (isset($_POST['category'])) {
        $category = $_POST['category'];
    }
    if (isset($_POST['opening'])) {
        $opening = $_POST['opening'];
    }
    if (isset($_POST['closing'])) {
        $closing = $_POST['closing'];
    }

    // Si toutes les conditions sont remplies
    if (empty($nameError) && empty($addressError) && empty($oTimeError) && empty($cTimeError)) {
        if ($category === 'restaurant') {
            $category = 'restaurant';
        } elseif ($category === 'brewery') {
            $category = 'brewery';
        } elseif ($category === 'fast-food') {
            $category = 'fast-food';
        } elseif ($category === 'coffee') {
            $category = 'coffee';
        }

        // Génère un identifiant unique : si celui-ci est déjà utilisé par un autre restaurant, un autre sera choisi
        $id = uniqid();

        // Requête SQL
        $sql = "INSERT INTO restaurants (name, localisation, category, opens, close) VALUES ('$name', '$address', '$category', '$opening', '$closing')";

        // Exécution de la requête
        if (mysqli_query($connexion, $sql)) {
            // Renvoie vers contact.php en indiquant l'ID présent dans la bdd en method get
//            header('Location: ./contact.php?id=' . $name);
            header('Location: ./contact.php');
        } else {
            header('Location: ./error.php?erreur=' . mysqli_error($connexion));
        }
    }
}

require '../components/header.php';
?>
    <form class="form" method="post">
        <h2 class="title">Enregistrer un <span class="pretty">restaurant</span></h2>
        <p class="content">Vous allez enregistrer votre restaurant en quelques clics !</p>
        <div class="form-group">
            <label for="name" class="label">Nom du restaurant</label>
            <input type="text" id="name" name="name" class="form-control" <?php echo 'value="' . $name . '"'?>>
            <?php
                echo $nameError;
            ?>
        </div>
        <div class="form-group">
            <label for="address" class="label">Adresse</label>
            <input type="text" id="address" name="address" class="form-control" <?php echo 'value="' . $address . '"'?>>
            <p class="info"><small>Assurez-vous de spécifier la ville !</small></p>
            <?php
                echo $addressError;
            ?>
        </div>
        <div class="form-group">
            <label for="category" class="label">Catégorie de mon restaurant</label>
            <select name="category" id="category">
                <option value="restaurant" <?php echo ($category == 'restaurant') ? 'selected' : '' ?>>Restaurant</option>
                <option value="brewery" <?php echo ($category == 'brewery') ? 'selected' : '' ?>>Brasserie</option>
                <option value="coffee" <?php echo ($category == 'coffee') ? 'selected' : '' ?>>Café</option>
                <option value="fast-food" <?php echo ($category == 'fast-food') ? 'selected' : '' ?>>Fast-food</option>
            </select>
        </div>
        <div class="schedules">
            <div class="form-group">
                <label for="opening" class="label">Heure d'ouverture</label>
                <input type="time" id="opening" name="opening" class="form-control" <?php echo $opening;?>>
                <?php
                    echo $oTimeError;
                ?>
            </div>
            <div class="form-group">
                <label for="closing" class="label">Heure de fermeture</label>
                <input type="time" id="closing" name="closing" class="form-control" <?php echo $closing;?>>
                <?php
                    echo $cTimeError;
                ?>
            </div>
        </div>
        <input type="submit" name="submit" class="button-primary" value="Enregistrer">
    </form>

<?php
require '../components/footer.php';
?>