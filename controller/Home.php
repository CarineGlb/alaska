<?php
//frontcontroller acccueil du site//
//include_once (CONTROLLER.'Home.php');



class Home // sert à montrer la page d'accueil
{
    public function showHome ()
    {
        $manager = new ChapitreManager();
        $chapters = $manager->findAll();

        $myView = new View('homeBlog');
        $myView->render($chapters);
    }

    public function showContact ()
    {
        $myView = new View('contact');
        $myView->render($chapters);
        include(VIEW . 'contact.php');

    }
}

function listChapters()
{
    $chapters = getChapters();
}

function viewchapter()
{
    $chapter = getChapter($_GET['id']);
    require(VIEW.'chapterView.php');
}

/* on crée un objet view, on lui attribue le template home et on lui rend sa vue
créer un objet vue qui gère la vue
je créer homeBlog et je l'appelle avec le render*/







