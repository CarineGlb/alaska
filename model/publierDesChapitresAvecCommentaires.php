<?php

// objet chapitre dans lequel on crée 1 chapitre

class publierDesChapitresAvecCommentaires
{

    private $_idChapitre;
    private $_pseudoCommentaire;
    private $_contenuCommentaire;
    private $_dateCommentaire;
    private $_idCommentaire;

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
    public function getPseudoCommentaire()
    {
        return $this->_pseudoCommentaire;
    }

    /**
     * @param mixed $pseudoCommentaire
     */
    public function setPseudoCommentaire($pseudoCommentaire)
    {
        $this->_pseudoCommentaire = $pseudoCommentaire;
    }

    /**
     * @return mixed
     */
    public function getContenuCommentaire()
    {
        return $this->_contenuCommentaire;
    }

    /**
     * @param mixed $contenuCommentaire
     */
    public function setContenuCommentaire($contenuCommentaire)
    {
        $this->_contenuCommentaire = $contenuCommentaire;
    }

    /**
     * @return mixed
     */
    public function getDateCommentaire()
    {
        return $this->_dateCommentaire;
    }

    /**
     * @param mixed $dateCommentaire
     */
    public function setDateCommentaire($dateCommentaire)
    {
        $this->_dateCommentaire = $dateCommentaire;
    }

    /**
     * @return mixed
     */
    public function getIdCommentaire()
    {
        return $this->_idCommentaire;
    }

    /**
     * @param mixed $idCommentaire
     */
    public function setIdCommentaire($idCommentaire)
    {
        $this->_idCommentaire = $idCommentaire;
    }


}
