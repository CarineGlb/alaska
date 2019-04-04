<?php


class commentaire extends HydrateEntityCommentaire
{
    private $_idCommentaire;
    private $_pseudoCommentaire;
    private $_contenuCommentaire;
    private $_mailCommentaire;
    private $_idChapitre;
    private $_commentaireSignale = +1;

    /**
     * @return mixed
     */
    public function getCommentaireSignale()
    {
        return $this->_commentaireSignale;
    }

    /**
     * @param mixed $commentaireSignale
     */
    public function setCommentaireSignale($commentaireSignale)
    {
        $this->_commentaireSignale = $commentaireSignale;
    }


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



    /**
     * @return mixed
     */
    public function getPseudoCommentaire()
    {
        return $this->_pseudoCommentaire;
    }

    /**
     * @param mixed $pseudo
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
     * @param mixed $commentaire
     */
    public function setContenuCommentaire($contenuCommentaire)
    {
        $this->_contenuCommentaire = $contenuCommentaire;
    }

    /**
     * @return mixed
     */
    public function getMailCommentaire()
    {
        return $this->_mailCommentaire;
    }

    /**
     * @param mixed $date
     */
    public function setMailCommentaire($mailCommentaire)
    {
        $this->_mailCommentaire = $mailCommentaire;
    }


}