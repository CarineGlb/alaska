<?php


class View
{
    private $template; //$template sera instancié lors du construct

    public function __construct($template) // le construc intègre mon template
    {
        $this ->template = $template;
    }

    public function render($chapters) // il fait le render et c'est lui qui fait le include
    {
        $template = $this->template;

        ob_start(); // on démarre le cache et tout ce qui est affichage, on le stocke dans la mémoire tampon
        include (VIEW.$template.'.php');
        $contentPage = ob_get_clean(); // on stocke tout le contenu dans $contentPage et ensuite on vide la cache
        include_once (VIEW.'gabarit.php');
    }
}