<?php
class indexController{
    public function renderIndexAction(){
        $livreManager = new LivreManager();
        $livres = $livreManager->selectAll();

        require 'Vue/homeView.php';
    }
}
?>