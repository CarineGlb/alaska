<?php

class formulaireContact{

    private $_nom;
    private $_prenom;
    private $_message;

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->_prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->_message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->_message = $message;
    }



}