<?php

// gère la connexion à la BDD = manager

Class ChapitreManager
{
    private $bdd;

    public function __construct() // on instancie $bdd au démarrage
    {
        $this->bdd = new PDO ('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
    }

    public function findAll()
    {
        $bdd = $this->bdd;

        $query = "SELECT * FROM blog";
        $req = $bdd ->prepare($query);
        $req ->execute();
        while ($row = $req->fetch(PDO::FETCH_ASSOC))
           {
               $chapitre = new Chapitre();

               $chapitre ->setId($row['id']); // on hydrate
               $chapitre ->setTitle($row['title']);
               $chapitre ->setContent($row['content']);
               $chapitre ->setDate($row['date']);

                $chapitre['id']       = $row['id'];
                $chapitre['title']    = $row['title'];
                $chapitre['content']  = $row['content'];
                $chapitre['date']     = $row['date'];

                $chapters[] = $chapitre;
            }
            return $chapitre;

    }

}
