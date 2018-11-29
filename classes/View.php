<?php


class View
{
    private $template; //$template sera instancié lors du construct

    public function __construct($template) // le construc intègre mon template
    {
        $this->template = $template;
    }

    public function render($params = array())
     /*il fait le render et c'est lui qui fait le include il faut que tous les paramètres qui passent par le render passent ici en paramètres.
     Ce tableau permet de passer plusieurs variables car toutes renseinées dans mon render en Home*/
    {
           // on va parcourir tous les paramètres et on y intègre le nom que l'on va parcourir et sa valeur

            extract($params); // créer dynamiquement ma variable à partir de ce nom. Il va parcourir params et créer la variable dynamique avec sa valeur

        $template = $this->template;
        ob_start(); // on démarre le cache et tout ce qui est affichage, on le stocke dans la mémoire tampon
        include (VIEW.$template.'.php');
        $contentPage = ob_get_clean(); // on stocke tout le contenu dans $contentPage et ensuite on vide la cache
        include_once (VIEW.'gabarit.php');
    }
}
