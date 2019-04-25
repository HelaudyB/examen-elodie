<?php
include 'include.php';
// j'ai tout cassé dans l'index, enfin en tout je n'arrive plus à naviguer entre les pages, rien ne affiche et pas le temps de m'en occuper
if($_GET['controller'] === 'livre' && isset($_GET['action'])) {

    $LivreController = new LivreController();

    if ($_GET['action'] == 'selectAll') {
        $LivreController->renderLivres();
    } elseif ($_GET['action'] == 'formLivre') {
        $LivreController->renderInsert();
    } elseif ($_GET['action'] == 'insert') {
        $LivreController->insert();
    } elseif ($_GET['action'] == 'deleteForm' && isset($_GET['target'])) {
        $LivreController->renderDelete($_GET['target']);
    } elseif ($_GET['action'] == 'delete') {
        $LivreController->delete();
    } elseif ($_GET['action'] == 'updateForm' && isset($_GET['target'])) {
        $LivreController->renderUpdate($_GET['target']);
    } elseif ($_GET['action'] == 'update' && isset($_GET['action'])) {
        $LivreController->update($_GET['target']);
    } else {
        $exception = new Exception("La page demandée n'existe pas", 404);
        throw  $exception;
    }
}

?>