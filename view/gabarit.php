<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset ="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Jean Forteroche</title>

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <!--css
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>

<body>



<div class="container col-lg-10 col-xs-10">

    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#">Jean Forteroche</a>
    <ul class="nav justify-center">

            <li class="nav-item">
                 <a class="nav-link active" href="<?php echo HOST;?>/index.php">Accueil</a>
            </li>


            <li class="nav-item">
                 <a class="nav-link" href="<?php echo HOST;?>/index.php?action=apropos">A propos</a>
            </li>

            <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle"  href="<?php echo HOST;?>/index.php?action=getChapitres" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Chapitres <span class="caret"></span> </a>
             <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php
                foreach ($chapitres as $chapitre)
                {
                 echo '<li><a href="' .  HOST . '/index.php?action=getChapitres&amp;idChapitre=' . $chapitre->getIdChapitre() . '">'.$chapitre->getTitreChapitre().'</a></li>';
                }
                 ?>

            </ul>

             </li>

             <li class="nav-item">
                <a class="nav-link" href="<?php echo HOST;?>/index.php?action=formulaireContact">Contact</a>
             </li>

              <li class="nav-item">
                 <a class="nav-link" href="<?php echo HOST;?>/index.php?action=bibliographie">Bibliographie</a>
              </li>


    </ul>

    </nav>



    <div class="titreAlaska">
        <div class="text-left col-lg-10 col-xs-10">
            <div class="row">

        <h1>Billet simple pour l'Alaska</h1>

            </div>
        </div>
    </div>

 <!--la page-->

<?php echo $contentPage?>




<footer class="sticky-footer">
    <div class="container-footer col-lg-12 col-xs-5">
        <ul class="nav-footer">

                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo HOST;?>/index.php">Accueil</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo HOST;?>/index.php?action=apropos">A propos</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="<?php echo HOST;?>/index.php?action=getChapitres" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Chapitres <span class="caret"></span> </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                            foreach ($chapitres as $chapitre)
                            {
                                echo '<li><a href="' .  HOST . '/index.php?action=getChapitres&amp;idChapitre=' . $chapitre->getIdChapitre() . '">'.$chapitre->getTitreChapitre().'</a></li>';
                            }
                            ?>

                        </ul>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo HOST;?>/index.php?action=formulaireContact">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo HOST;?>/index.php?action=bibliographie">Bibliographie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo HOST;?>/index.php?action=mentionsLegales">Mentions Légales</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo HOST;?>/indexAdmin.php?action=tableauBordAdmin">Administration</a>
                    </li>


        </ul>

                    <div class="copyright">
                <small>© 2019 Copyright: Carine GL Productions</small>

                    </div>

    </div>
</footer>
</div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>
