<?php

// classe qui gère la connexion à la BDD = manager


Class ChapitreManager
{
    private $bdd;

    public function __construct() // on instancie $bdd au démarrage
    {
        $this->bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
    }

    public function findAll() // fait la requete
    {
        $bdd = $this->bdd;

        $query = ('SELECT id,title, content FROM blog ORDER BY id');
        $req = $bdd->prepare($query);
        $req ->execute();
        while ($row = $req->fetch())   //PDO::FETCH_ASSOC
           {
               $chapitre = new Chapitre();
               $chapitre ->setId($row['id']); // on hydrate
               $chapitre ->setTitle($row['title']);
               $chapitre ->setContent($row['content']);
               //$chapitre ->setDate($row['date']);

                $chapitres[] = $chapitre; // tableau d'objet
            }
            return $chapitres;

    }

    public function find($id)
    {
        $query = ('SELECT id,title, content FROM blog WHERE id = :id');
        $db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
        $req = $bdd->prepare ($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $row = $req->fetch(PDO::FETCH_ASSOC);

        $chapitre = new Chapitre();
        $chapitre ->setId($row['id']); // on hydrate
        $chapitre ->setTitle($row['title']);
        $chapitre ->setContent($row['content']);

        return $chapitre;
    }


}
