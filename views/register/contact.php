<?php
require '../components/config.php';

$last_id = $connexion->insert_id;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    Header('Location: ../components/error.php?erreur=Veuillez+renseigner+le+nom+du+restaurant.');
}

require '../components/header.php';
?>
<form class="form" method="post">
    <h2 class="title">Enregistrer des informations de contact ?</h2>
    <p class="content">Facilitez la communication : laissez des informations de contact !</p>
    <div class="form-group">
        <label for="id" class="label">ID du restaurant</label>
        <input type="text" id="id" name="id" class="form-control" <?php echo 'value="' . $last_id . '"';?> disabled>
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
        <input type="submit" name="submit" class="button-primary" value="Enregistrer">
    </div>
</form>

<?php
require '../components/footer.php';
?>