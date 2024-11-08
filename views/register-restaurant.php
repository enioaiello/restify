<?php
require './components/header.php';
//Header ('Location: ./restaurant/basic-information.php');
?>
<h2 class="title">Enregistrer un compte de restaurant</h2>
<p class="content">Cette étape est cruciale : elle vous permet de modifier votre restaurant plus tard.</p>
<p class="content">Si vous avez déjà un compte : utilisez-le pour ajouter un nouveau restaurant à votre compte.</p>
<form method="post" class="form">
    <div class="form-group">
        <label for="name" class="label">Nom du compte</label>
        <input type="text" id="name" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="password" class="label">Mot de passe</label>
        <input type="password" id="password" name="password" class="form-control">
    </div>
    <div class="form-group">
        <a href="#" class="link">J'ai déjà un compte</a>
        <input type="submit" name="submit" class="button-primary" value="S'inscrire">
    </div>
</form>
<?php
require './components/footer.php';
?>