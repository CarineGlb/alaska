<?php

class Bibliographie
{
    private $id; // attributs de notre classe
    private $bibliography;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getBibliography()
    {
        return $this->bibliography;
    }

    /**
     * @param mixed $bibliography
     */
    public function setBibliography($bibliography)
    {
        $this->bibliography = $bibliography;
    }

}
