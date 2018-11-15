<?php

// contient les différentes méthodes communes aux autres classes

// methode de recuperation des informations de la table ac une classe abstraite car ne pourra pas être instanciée


// Récupère la connexion à la BDD

function getChapters()
{
$db = dbConnect();
$req = $db ->query ('SELECT id,title, content FROM blog ORDER BY id');
$results = array();
while($article = $req->fetch())
{
    $results[] = $article;
}
return $results; // tableau des resultats de la requête
}



function getChapter() // fonction qui récupère 1 chapitre
{
    $db = dbConnect();
    //$chapter = [];
    $req = $db->prepare('SELECT * FROM blog WHERE id= ?');
    $req->execute(array($_GET['id']));
    $chapter = $req->fetch();
   
    return $chapter;
    $req->closeCursor();
}


function dbConnect()
{
try
{
    $db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
    return $db;
}

 catch(Exception $e)
 {
    die('Erreur : '.$e->getMessage());
 }

}

  
    
    
   
    
    




