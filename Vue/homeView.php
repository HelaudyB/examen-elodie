<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ma librairie</title>
    <?php
        include 'Parts/stylesheets.html';
    ?>
</head>

<body>
<div class="container">
    <div class="row">
        <h1> Ma super librairie!</h1>

    </div>
</div>
<div class="container">
    <div class="row">
        <p>Derniers bouquins de la librairie :</p>
        <div class="container">
            <a class='btn bg-success my-3  text-light' href='./index.php?controller=livre&action=insertForm' >
                <strong>Ajouter un livre</strong> <i class="fas fa-2x fa-plus-circle mt-2"></i>
            </a>
            <!--livres table-->
            <table class='table text-center'>
                <thead class='thead-dark'>
                <tr>
                    <th scope='col'>Id</th>
                    <th scope='col'>Nom du livre</th>
                    <th scope='col'>Auteur</th>
                    <th scope='col'>Type</th>
                    <th scope='col'>Actions</th>
                </tr>
                </thead>
                <tbody id='tableBook'>
                <?php
                foreach($livres as $livre){
                    echo "<tr>
                            <th class='align-middle'><h5>" . $livre->getId() . "</h5></th>
                            <td class='align-middle'><h5>" . $livre->getNomLivre() . "</h5></td>
                            <td class='align-middle'><h5>" . $livre->getNomAuteur() . "</h5></td>
                            <td class='align-middle'><h6>" . $livre->getType() . "</h6></td>
                            <td class='align-middle'>
                                <a class='btn btn-info m-2 p-3' href='./index.php?controller=livre&action=updateForm&target=". $livre->getId() ."'>Mettre à jour</a>
                                <a class='btn btn-danger m-2 p-3' href='./index.php?controller=livre&action=deleteForm&target=". $livre->getId() ."'><i class='fas fa-1x fa-dumpster'></i></a>
                            </td>
                        </tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <a href="/ExamenPhpPooElodieBelguet/index.php?controller=livre&action=formLivre">Ajouter un livre</a>

    </div>
</div>

<?php
  foreach ($livres as $livre){
?>

<div class="news">
    <h3>
     <?php echo $livre->getNomLivre(); ?>
<em> écrit par <?php echo $livre->getNomAuteur() ?></em> son genre est <?php echo $livre->getType() ?>
</h3>


</div>
<?php
 }
?>
</body>
</html>