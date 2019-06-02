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
    <link rel="stylesheet" type="text/css" href="assets/css/styleadmin.css">

    <script type ="texte/javascript" src="http://code.jquery.com/jquery.js"></script>
    <script type ="texte/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>


<body class="home">
<div class="container-fluid display-table">
    <div class="row display-table-row">
        <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">

            <div class="navigation">
                <a href="home.html"><span class="glyphicon glyphicon-grain" aria-hidden="true"></span>
                </a>
            </div>
            <div class="navi">
                <ul>
                    <li class="active"><a href=<?php echo HOST;?>/index.php?action=tableauBordAdmin><i class="fas fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Accueil</a> </li>
                    <li><a href=<?php echo HOST;?>/index.php?action=listCommentaires><i class="fas fa-comments" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Commentaires</span></a></li>
                    <li><a href=<?php echo HOST;?>/index.php?action=listChapitres><i class="fas fa-edit" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Chapitres du livre</span></a></li>
                    <li><a href= <?php echo HOST;?>/index.php?action=ajouterChapitre><i class="fas fa-user-edit" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Rédiger un nouveau chapitre</span></a></li>
                    <li><a href= <?php echo HOST;?>/index.php><i class="fas fa-arrow-left" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Revenir sur le site</span></a></li>


                </ul>
            </div>


        </div>
        <div class="col-md-10 col-sm-11 display-table-cell v-align">
            <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
            <div class="row">
                <header>
                    <div class="col-md-7">
                        <nav class="navbar-default pull-left">
                            <div class="navbar-header">

                                <span><p><i class="fas fa-user-cog"></i> Administrateur</p></span>

                            </div>
                        </nav>

                    </div>

                </header>
            </div>
            <div class="user-dashboard">
                <h1>Bonjour Jean</h1>
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12 gutter">



                        <div class="sales">
                            <h2><?php echo $nombreTotalCommentaires;?> Nouveaux Commentaires</h2>
                            <br/>
                            <br/>
                            <a href=<?php echo HOST;?>/index.php?action=listCommentaires>Voir le détail</a>


                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12 gutter">

                        <div class="sales report">
                            <h2><?php echo $nombreTotalChapitres;?> Chapitres en ligne</h2><br/>
                            <br/>
                            <a href=<?php echo HOST;?>/index.php?action=tableauChapitreAdmin>Voir le détail</a>


                        </div>
                    </div>

                </div>
            </div>
            <?php echo $contentPageAdmin?>
        </div>
    </div>



</div>





</body>

