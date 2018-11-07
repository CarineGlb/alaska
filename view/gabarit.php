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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ASSETS;?> style.css"/>

    <script type ="texte/javascript" src="js/jquery-1.12.3.min.js"></script>
    <script type ="texte/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar fixed-top navbar-light bg-light">
    <div class=""container>

        <div class="navbar navbar-default">
            <div class=navbar-header">
                <a class="navbar-brand" href="#">Jean Forteroche</a>
            </div>



            <ul class="nav navbar-nav">

                <li class="active"><a href="#">Accueil</a></li>

                <li><a href="#">A propos</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Chapitres <span class="caret"></span> </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li> <a href="#"> Chapitre 1</a></li>
                        <li> <a href="#"> Chapitre 2</a></li>
                        <li><a href="#"> Chapitre 3</a></li>
                        <li>  <a href="#"> Chapitre 4</a></li>
                    </ul>
                </li>

                <li><a href="index.php?action=contact">Contact</a></li>

                <li><a href="#">Bibliographie</a></li>

            </ul>

        </div>


</nav>

<div class="container">

    <header class="page-header">
        <h1>Billet simple pour l'Alaska</h1>
    </header>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</div>
 <!--la page-->

<?php echo $contentPage.':'?>


</body>
</html>