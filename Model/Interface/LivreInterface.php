<?php
interface LivreInterface {
    public function __construct($id = null, $title = null, $author = null, $type = null);
    public function getId();
    public function setId($id);
    public function getNomLivre();
    public function setNomLivre($title);
    public function getNomAuteur();
    public function setNomAuteur($author);
    public function getType();
    public function setType($type);

}