<?php

// objet chapitre dans lequel on crée 1 chapitre

class Chapitre
{
    private $id; // attributs de notre classe
    private $title;
    private $content;
    private $date;

    /**
     * @return mixed
     */
    public function getId ()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId ($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle ()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle ($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getContent ()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent ($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getDate ()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate ($date)
    {
        $this->date = $date;
    }




}