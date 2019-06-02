<?php

// objet chapitre dans lequel on crée 1 chapitre

class Chapitre extends AbstractEntity
{
    private $_idChapitre; // attributs de notre classe
    private $_titreChapitre;
    private $_contenuChapitre;



    /**
     * @return mixed
     */
    public function getIdChapitre()
    {
        return $this->_idChapitre;
    }

    /**
     * @param mixed $idChapitre
     */
    public function setIdChapitre($idChapitre)
    {
        $this->_idChapitre = $idChapitre;
    }

    /**
     * @return mixed
     */
    public function getTitreChapitre()
    {
        return $this->_titreChapitre;
    }

    /**
     * @param mixed $titreChapitre
     */
    public function setTitreChapitre($titreChapitre)
    {
        $this->_titreChapitre = $titreChapitre;
    }

    /**
     * @return mixed
     */
    public function getContenuChapitre()
    {
        return $this->_contenuChapitre;
    }

    /**
     * @param mixed $contenuChapitre
     */
    public function setContenuChapitre($contenuChapitre)
    {
        $this->_contenuChapitre = $contenuChapitre;
    }

    /**
     * @return mixed
     */
    public function getResumeChapitre()
    {
        $resumeChapitre = substr($this->getContenuChapitre(),0,200);
        return $resumeChapitre. '...';

    }








}