<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ma librairie</title>
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <?php
    include 'Parts/stylesheets.html';
    ?>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Ma librairie</h1>
            <p>Formulaire d'ajout d'un livre</p>
        </div>


        <form action="/ExamenPhpPooElodieBelguet/index.php?controller=livre&action=formLivre" method="post">
            <input name="titre" type="text" placeholder="Ici je mets le nom de mon livre">
            <input name="contenu" type="text" placeholder="Ici je mets l'auteur du livre">
            <input type="submit" value="Valider !">
        </form>

    </div>

</div>
<div class="container">
    <div class="row">
        <form action="/ExamenPhpPooElodieBelguet/index.php?controller=livre&action=formLivre" method="post">

        <div class="form-group">
                <label for="exampleFormControlInput1">Insérez le nom du livre</label>
                <input name="nom_livre" type="text" class="form-control" id="exampleFormControlInput1" placeholder="nom du livre">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Insérez le nom de l'auteur</label>
                <input name="nom_auteur" type="text" class="form-control" id="exampleFormControlInput1" placeholder="nom de l'auteur">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Genre du livre</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Roman</option>
                    <option>Conte</option>
                    <option>Nouvelle</option>
                    <option>Autres</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter un livre</button>
        </form>
    </div>
</div>

</body>
</html>