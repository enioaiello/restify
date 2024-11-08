<?php
require '../components/config.php';
require '../components/header.php';
?>

<h2 class="title">Se connecter</h2>
<form method="post" class="form">
    <div class="form-group">
        <label for="username" class="label">Nom d'utilisateur</label>
        <input type="text" id="username" name="username" class="form-control">
    </div>
    <div class="form-group">
        <label for="password" class="label">Mot de passe</label>
        <input type="password" id="password" name="password" class="form-control">
    </div>
    <input type="submit" name="submit" class="button-primary" value="Se connecter">
</form>

<?php
require '../components/footer.php';
?>