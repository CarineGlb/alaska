/*$req = $this->objectPDO->query( 'SELECT pseudo, commentaire,mail FROM commentaire ORDER BY idChapitre'); // where = lorsque
$req->bindValue(':idChapitre', $idChapitre, PDO::PARAM_INT);
$req->execute();
$row = $req->fetch(PDO::FETCH_ASSOC);*/

/*

$req = $this->objectPDO->prepare( 'SELECT pseudo, commentaire,mail FROM commentaire WHERE idChapitre = :idChapitre ORDER BY :idChapitre'); // where = lorsque
$req->bindValue('idChapitre', $idChapitre, PDO::PARAM_INT);
$req->execute();
$row = $req->fetchAll();

$commentaire = new Commentaire(); // on trabsforme ici le tableau isssu de fetchAll en objets
//on va créer un tableau d'objets
$commentaire ->setIdChapitre ($row['idChapitre']);
$commentaire ->setIdCommentaire ($row['idCommentaire']);// on hydrate
$commentaire ->setPseudo($row['pseudo']);
$commentaire ->setCommentaire($row['commentaire']);
$commentaire ->setMail($row['mail']);

return $commentaire ;
*/


/* methode emmanuelle

Ok, on va partir du principe que c'est la méthode readAll qui va chercher tes commentaires et que la fonction read va disparaitre :sourire:

Lorsque ta requête est exécutée, tu dois faire le fetchAll à ce moment et enregistrer le résultat dans une variable (modifié)

Par exemple : $results = $pdoStat->fetchAll() (modifié)

A ce moment la, ta variable $results contient un tableau avec les résultats renvoyés par la bdd et c'est sur elle que tu va boucler

Avec un foreach c'est mieux

foreach ($results as $row) -> et la tu crées tes objets Commentaire :clin_d'œil:

Cette méthode (où tu lui passes un idChapitre), elle va te servir à récupérer tous les commentaires liés à un article.

Si tu veux une méthode qui te récupère tous les commentaires en bdd, il te faut faire pareil, mais en supprimant le WHERE


Dans l'idée c'est ça, mis à part que $row ne contient que trois données, et que dans ta boucle, à chaque tour $commentaire sera réinitialisée par le new Commentaire(),

il faut que tu fasses comme sur ton code précédent, tu crées un tableau et à chaque tour tu ajoutes ton commentaire au tableau et c'est ce tableau que tu retourneras

à ton contrôleur

Et pour ma part, aucun support ne m'a aidée plus qu'un autre, c'est juste la pratique, à force de faire et refaire, c'est rentré et c'est devenu une "évidence"

Mais si ça peut te rassurer, j'ai passé plusieurs semaines à lire et relire le cours sur la POO, à regarder des vidéos de Grafikart, et quand je voulais commencer mon projet

je bloquais

C'est un pas difficile pour beaucoup d'entre nous :clin_d'œil: Et comme te le disais Damien hier, un jour tu regarderas en arrière,

et cet apprentissage sera un mauvais souvenir !/*

/* $query = ('SELECT pseudo, commentaire, mail FROM commentaire WHERE idChapitre = :idChapitre');
$req = $this->objectPDO->prepare($query);
$req->bindValue(':idChapitre', $idChapitre, PDO::PARAM_INT);
$req ->execute();
// $chapitres = array();
while ($row = $req->fetchAll())   //PDO::FETCH_ASSOC
{
$commentaire = new Commentaire();
//$commentaire->setIdChapitre($row['idChapitre']); // on hydrate
$commentaire->setPseudo($row['pseudo']);
$commentaire->setCommentaire($row['commentaire']);
$commentaire->setMail($row['mail']);
//$chapitre ->setDate($row['date']);

$commentaires[] = $commentaire; // tableau d'objet
}

$req->closeCursor();

return $commentaires;
}*/


/* public function readAll($idChapitre)
{  $query = ('SELECT pseudo, commentaire, mail FROM commentaire WHERE idChapitre = :idChapitre');
$req = $this->objectPDO->prepare($query);
$req->bindValue(':idChapitre', $idChapitre, PDO::PARAM_INT);
$req ->execute();

$commentaires = array();
while ($row = $req->fetchAll())
{
$commentaires= [] ; // tableau d'objet
/* $commentaire = new Commentaire();
$commentaires->setIdChapitre($row['idChapitre']);
$commentaires->setIdCommentaire($row['idCommentaire']);// on hydrate
$commentaires->setPseudo($row['pseudo']);
$commentaires->setCommentaire($row['commentaire']);
$commentaires->setMail($row['mail']);
//$commentaire->setidChapitre($row['idChapitre']);//setIdChapitre

$req->closeCursor();

return $commentaires;

}*/


/* récupère tous les objets de la BDD
retourne un tableau d'objets commentaire ou un tableau vide

$this->pdoStatement = $this->objectPDO > query('SELECT*FROM commentaire ORDER BY pseudo');

// tableau d'objets de type commentaire

$commentaires = [];

//boucle

while ($commentaire = $this->pdoStatement->fetchObject('blog_alaska/model/Commentaire')) // on veut des objets qui respectent la classe commentaire
{
// on récupère l'objet courant et on place le curseur sur l'objet suivant

$commentaires[] = $commentaire;

}

// on retourne le tableau de commentaires, vides si rien ou rempli si données en bdd

return $commentaires;*/



/*
$this->pdoStatement = $this->objectPDO->query('SELECT*FROM commentaire ORDER BY pseudo, commentaire, date');

$commentaires =[];


while($commentaire = $this->pdoStatement->fetchObject('blog_alaska\model\Commentaire'))
{
$commentaires[] = $commentaire;
}

return $commentaires;*/


