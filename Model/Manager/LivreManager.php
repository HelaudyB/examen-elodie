<?php
class livreManager extends DbManager {

    public function __construct(){
        parent::__construct();
    }
//    sélectionne tout les livres dans la base de données
    public function selectAll(){
        $query ='SELECT * FROM `livre`';
        $res = $this->bdd->query($query);
        $livres = [];
        foreach  ($res as $data) {
            $livres[] = new livre($data['id_livre'], $data['nom_livre'], $data['nom_auteur'], $data['type']);
        }
        return $livres;
    }
    //    sélectionne un livre dans la base de données
    public function select($id_livre){
        $query = $this->bdd->prepare('SELECT * FROM `livre` WHERE id_livre=?');
        $query->bindParam(1, $id_livre);
        $query -> execute();
        $data = $query -> fetch();
        $livre = new livre($data['id_livre'], $data['nom_livre'],$data['nom_auteur'], $data['type']);
        return $livre;
    }
    //    insère un livre
    public function insert(livre $livre){
        $query = "INSERT INTO `livre`(`nom_livre`, `nom_auteur`, `type`) VALUES  ('". $livre->getNomLivre() ."', '". $livre->getNomAuteur() ."','". $livre->getType() ."')";
        $this->bdd->query($query);
    }
    //    efface un livre
    public function delete($id_livre){
        $query = "DELETE FROM `livre` WHERE id_livre =" .$id_livre;
        $this->bdd->query($query);
    }
    //  Mets à jour la base de données
    public function update(livre $livre){
        $query = "UPDATE `livre` SET `nom_livre`='". $livre->getNomLivre() ."', `nom_auteur`='". $livre->getNomAuteur() ."', `type`='". $livre->getType() ."' WHERE id_livre =". $livre->getAll();
        $this->bdd->query($query);
    }
}