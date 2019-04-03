<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset ="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog de Jean Forteroche</title>

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--css-->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <script type ="texte/javascript" src="http://code.jquery.com/jquery.js"></script>
    <script type ="texte/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</head>

<body>

<header class="page-header">
  <header class="col-lg-10">
    <h1>Billet simple pour l'Alaska</h1>
</header>



    <!--div class="row">
            <nav class="col-lg-9">
                <!--div class="navbar navbar-default">
                    <div class="navbar-item">

                    </div-->

            <ul class="navbar fixed-top navbar-light bg-light justify-content-end">

                <a class="navbar-brand" href="#">Jean Forteroche</a>

                <ul>
                <li class="nav-item">
                    <a href="#">Accueil</a>
                </li>
                </ul>

                <ul>
                <li class="nav-item">
                    <a href="<?php echo HOST;?>/blog_alaska/index.php?action=apropos">A propos</a>
                </li>
                </ul>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?php echo HOST;?>/blog_alaska/index.php?action=lireChapitres" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Chapitres <span class="caret"></span> </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php

                        foreach ($chapitres as $chapitre)
                        {
                            echo '<li> <a href="' .  HOST . '/blog_alaska/index.php?action=lireChapitres&idChapitre=' . $chapitre->getIdChapitre() . '">'.$chapitre->getTitreChapitre().'</a></li>';
                        }
                        ?>
                    </ul>
                </li>

                <ul>
                <li class="nav-item">
                    <a href="<?php echo HOST;?>/blog_alaska/index.php?action=formulaireContact">Contact</a>
                </li>
                </ul>

                <ul>
                <li class="nav-item">
                    <a href="<?php echo HOST;?>/blog_alaska/index.php?action=bibliographie">Bibliographie</a>
                </li>
                </ul>

            </ul>

</nav>


 <!--la page-->

<?php echo $contentPage?>

    <footer>

        <div class="container-fluid">
            <ul class="foote_bottom_ul_amrc">
                <li><a href="#">Accueil</a></li>

                <li><a href="#">A propos</a></li>

                <li><a href="#">Chapitres</a></li>

                <li><a href="#">Bibliographie</a></li>

                <li><a href="#">Contact</a></li>
            </ul>
            <!--foote_bottom_ul_amrc ends here-->
            <p class="text-center">Copyright @2018 | Réalisé par <a href="#">Carine GL Productions</a></p>
            <p class="text-center"><a href="#">Connexion</a></p>
            </p>


            <ul class="social_footer_ul">
                <li><a href="#"><img src="assets/img/twitter.png" alt="twitter"/></a></li>
                <li><a href="#"><img src="assets/img/In-2C-14px.png" alt="linkedIn"/></a></li>
                <li><a href="#"><img src="assets/img/instagram.png" alt="instagram"></a></li>
            </ul>

            <!--social_footer_ul ends here-->
        </div>
    </footer>


    <!--footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class=" col-lg-11">
                    <p class="text-center">Copyright @2017 | Designed by <a href="#">Carine GL Productions </a></p>
                </div>
                <div class=" col-lg-1">
                    <p class="connexion"><a href="<?php echo HOST;?>/blog_alaska/admin.php">Connexion</a></p>
                </div>

            </div>
        </div>


</footer-->



</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>