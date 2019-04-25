<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ma librairie</title>
    <?php include 'Vue/Parts/stylesheets.html'; ?>
</head>
<body>
<h2>Mettre à jour un livre</h2>
<div class='row p-5 m-3'>
    <form class='form-group col-md-3 col-sm-6' method='post' action='/index.php?controller=livre&action=update&target=<?php echo $livre->getId(); ?>'>
        <label>Titre</label><input class='form-control' type='text' name='title' value='<?php echo $livre->getNomLivre(); ?>'>
        <label>Auteur</label><input class='form-control' type='text' name='author' value='<?php echo $livre->getNomAuteur(); ?>'>
        <label for="type">type</label>
        <select name="type">
            <option value="roman">Roman</option>
            <option value="compte">Compte</option>
            <option value="nouvelle">Nouvelle</option>
            <option value="autres">Autres</option>
        </select>
        <button class='btn btn-success'>Mettre à jour</button>
        <a class='btn btn-secondary' href='/index.php?controller=livre&action=selectAll'>Retour</a>
    </form>

</div>
</body>