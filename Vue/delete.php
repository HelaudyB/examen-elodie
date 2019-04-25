<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ma librairie</title>
    <?php include 'Vue/Parts/stylesheets.html'; ?>
</head>

<body>
<h2>Confirmation pour effacer</h2>
<div class='p-5 m-3'>
    <h2>êtes-vous sûr d'effacer ce livre <?php echo $id; ?> ? </h2>
    <a class='btn btn-secondary m-5' href='./index.php?controller=livre&action=selectAll'>Annuler</a>
    <a class='btn btn-danger m-5' href='./index.php?controller=livre&action=delete&target=<?php echo $id; ?>'>Confirmer</a>
</div>
</body>
</html>