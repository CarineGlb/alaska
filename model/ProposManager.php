<?php

Class ProposManager
{
    private $bddPropos;

    public function __construct() // on instancie $bdd au démarrage
    {
        $this->bddPropos = new PDO('mysql:host=localhost;dbname=propos;charset=utf8', 'root', '');
    }

    public function findAll() // fait la requete
    {
        $bddPropos = $this->bddPropos;

        $query = ('SELECT id,about FROM propos ORDER BY id');
        $req = $bddPropos->prepare($query);
        $req ->execute();
        while ($row = $req->fetch())   //PDO::FETCH_ASSOC
        {
            $propos = new Propos();
            $propos->setId($row['id']); // on hydrate
            $propos->setAbout($row['about']);

            $apropos[] = $propos; // tableau d'objet
        }
        return $propos;

    }

    public function find($id)
    {
        $query = ('SELECT id,about FROM propos WHERE id = :id');
        $req = $this->bddPropos->prepare ($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $row = $req->fetch(PDO::FETCH_ASSOC);

        $propos = new Propos();
        $propos->setId($row['id']); // on hydrate
        $propos->setAbout($row['about']);

        return $apropos;
    }

}
