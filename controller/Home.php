<?php
//frontcontroller acccueil du site//
//include_once (CONTROLLER.'Home.php');



class Home // sert à montrer la page d'accueil
{
    public function showHome()
    {
        $manager = new ChapitreManager();
        $chapitres = $manager->findAll();

        $myView = new View('homeBlog');
        $myView->render(array('chapitres' => $chapitres));
    }

    public function showPropos()
    {
        $manager = new ChapitreManager();
        $chapitres = $manager->findAll();

        $myView = new View('apropos');
        $myView->render(array('chapitres' => $chapitres));
    }

   public function showChapitres()
    {
        $manager = new ChapitreManager();
        $chapitres = $manager->findAll();

        $myView = new View('chapitres');
        $myView->render(array('chapitres' => $chapitres));
    }

    public function showChapitre()
    {
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $manager = new ChapitreManager();
            $chapitre = $manager->find($id);
        }
        else{
            $chapitre = new Chapitre();

        }
     
        $myView = new View('chapitre');
        $myView->render(array('chapitre' => $chapitre));
    }

    public function showContact()
    {
        $manager = new ChapitreManager();
        $chapitres = $manager->findAll();

        $myView = new View('contact');
        $myView->render(array('chapitres' => $chapitres));

    }

    public function showBibliographie()
    {
        $manager = new ChapitreManager();
        $chapitres = $manager->findAll();

        $myView = new View('bibliographie');
        $myView->render(array('chapitres' => $chapitres));
    }

    public function showConnexion()
    {
        $myView = new View('admin');
        $myView->render(array('admin' => $admin));
    }
}

/*
function listChapters()
{
    $chapters = getChapters();
}

function viewchapter()
{
    $chapter = getChapter($_GET['id']);
    require(VIEW.'chapitre.php');
}

on crée un objet view, on lui attribue le template home et on lui rend sa vue
créer un objet vue qui gère la vue
je créer homeBlog et je l'appelle avec le render*/







