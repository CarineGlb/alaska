<?php
/**
 * Created by PhpStorm.
 * User: stb26
 * Date: 26/03/2019
 * Time: 21:05
 */



//l'hydratation se fait de manière un peu particulière car PDO va instancier l'objet,
// le remplir avec les champs issus de la base de données puis appeler le constructeur.


abstract class HydrateEntityCommentaire
{

    public function __construct($donnees)
    {
        if(is_array($donnees))
        {
            $this->hydrate($donnees);
        }
    }

    protected function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.str_replace('_', '', ucwords($key, '_'));

            // Si le setter correspondant existe.
            if (method_exists($this, $method))
            {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }

}