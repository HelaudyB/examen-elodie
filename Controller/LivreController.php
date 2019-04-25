<?php
class LivreController
{
    // Select all the Livres to display them
    public function renderLivres()
    {
        $livreManager = new livreManager();
        $Livres = $livreManager->selectAll();
        require 'Vue/newLivre.php';
    }

    // Display InsertForm
    public function renderInsert()
    {
        require 'Vue/newLivre.php';
    }

    // Insert Livre in DB and redirect
    public function insert()
    {
        $Livre = new Livre(null, $_POST['nom_livre'], $_POST['nom_auteur'], $_POST['type']);
        $livreManager = new LivreManager();
        $livreManager->insert($Livre);
        header('Location: http://localhost/evalMVC/index.php?controller=livre&action=selectAll');
    }

    // Display UpdateForm with data of selected Livre
    public function renderUpdate($id)
    {
        $livreManager = new LivreManager();
        $Livre = $livreManager->select($id);
        require 'Vue/update.php';
    }

    // Update Livre in DB and redirect
    public function update($id)
    {
        $Livre = new Livre($id, $_POST['nom_livre'], $_POST['nom_auteur'], $_POST['type']);
        $livreManager = new LivreManager();
        $livreManager->update($Livre);
        header('Location: http://localhost/evalMVC/index.php?controller=Livre&action=selectAll');
    }

    // Formulaire pour effacer
    public function renderDelete($id)
    {
        require 'Vue/delete.php';
    }

    // Efface le livre dans la database et redirige l'user
    public function delete()
    {
        $livreManager = new LivreManager();
        $livreManager->delete($_GET['target']);
        header('Location: http://localhost/evalMVC/index.php?controller=livre&action=selectAll');
    }


}
?>