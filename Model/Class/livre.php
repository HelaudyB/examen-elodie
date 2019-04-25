<?php
class Livre extends LivreManager implements LivreInterface
{   private $_nomLivre;
    private $_nomAuteur;
    private $_type;
    private $_id;

    /**
     * Livre constructor.
     * @param $_nomLivre
     * @param $_nomAuteur
     * @param $_type
     * @param $_id
     */
    public function __construct($_id, $_nomLivre, $_nomAuteur, $_type)
    {
        $this->_nomLivre = $_nomLivre;
        $this->_nomAuteur = $_nomAuteur;
        $this->_type = $_type;
        $this->_id = $_id;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getNomLivre()
    {
        return $this->_nomLivre;
    }

    /**
     * @param mixed $nomLivre
     */
    public function setNomLivre($nomLivre)
    {
        $this->_nomLivre = $nomLivre;
    }

    /**
     * @return mixed
     */
    public function getNomAuteur()
    {
        return $this->_nomAuteur;
    }

    /**
     * @param mixed $nomAuteur
     */
    public function setNomAuteur($nomAuteur)
    {
        $this->_nomAuteur = $nomAuteur;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->_type = $type;
    }
    public function getAll(){
        return parent::selectAll();
    }

}