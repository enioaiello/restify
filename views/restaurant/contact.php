<?php
require '../components/config.php';

//if (isset($_GET['id'])) {
//    $id = $_GET['id'];
//} else {
//    Header('Location: ../components/error.php?erreur=Restaurant inexistant.');
//}

// Récupère l'ID du restaurant enregistré
$query = "SELECT id FROM restaurants ORDER BY id DESC LIMIT 1";
$result = mysqli_query($connexion, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $result = $row['id'];
} else {
    $result = 1;
}

if (isset($_POST['submit'])) {
    if (isset($_POST['phone'])) {
        $phone = $_POST['phone'];
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    if (isset($_POST['website'])) {
        $website = $_POST['website'];
    }

    $sql = "INSERT INTO contacts (phone, email, website) VALUES ('$phone', '$email', '$website')";

    if (mysqli_query($connexion, $sql)) {
        header('Location: ./success.php');
    } else {
        header('Location: ./error.php?erreur=' . mysqli_error($connexion));
    }
}

require '../components/header.php';
?>
<form class="form" method="post">
    <h2 class="title">Enregistrer des informations de contact ?</h2>
    <p class="content">Facilitez la communication : laissez des informations de contact !</p>
    <div class="form-group">
        <label for="id" class="label">ID du restaurant</label>
        <input type="text" id="id" name="id" class="form-control" <?php echo 'value="' . $result . '"';?> disabled>
    </div>
    <div class="form-group">
        <label for="phone" class="label">Téléphone</label>
        <input type="tel" id="phone" name="phone" class="form-control">
    </div>
    <div class="form-group">
        <label for="email" class="label">Adresse e-mail</label>
        <input type="email" id="email" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="website" class="label">Site Web</label>
        <input type="text" id="website" name="website" class="form-control">
    </div>
    <div class="form-group">
        <a href="./success.php" class="link">Ignorer</a>
        <input type="submit" name="submit" id="submit" class="button-primary" value="Enregistrer">
    </div>
</form>

<?php
require '../components/footer.php';
?>