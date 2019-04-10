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
                    <li class="active"><a href="#"><i class="fas fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Accueil</a> </li>
                    <li><a href=<?php echo HOST;?>/blog_alaska/index.php?action=tableauCommentaireAdmin><i class="fas fa-comments" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Commentaires</span></a></li>
                    <li><a href="#"><i class="fas fa-edit" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Contenu</span></a></li>




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
                                <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                        </nav>
                        <div class="search hidden-xs hidden-sm">
                            <input type="text" placeholder="Rechercher" id="search">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="header-rightside">
                            <ul class="list-inline header-top pull-right">


                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://jskrishna.com/work/merkury/images/user-pic.jpg" alt="Administrateur">
                                        <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="navbar-content">
                                                <span>Jean Forteroche</span>
                                                <p class="text-muted small">
                                                   jf@alaska.com
                                                </p>
                                                <div class="divider">
                                                </div>
                                                <a href="#" class="view btn-sm active">View Profile</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </header>
            </div>
            <div class="user-dashboard">
                <h1>Bonjour Jean</h1>
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12 gutter">

                        <div class="sales">
                            <h2>..... Nouveaux Commentaires</h2>
                            <br/>
                            <br/>
                            <a href=<?php echo HOST;?>/blog_alaska/index.php?action=tableauCommentaireAdmin>Voir le détail</a>

                            <!--<div class="btn-group">
                                <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span>Periode:</span> En cours
                                </button>
                                <div class="dropdown-menu">
                                    <a href="#">Mars</a>
                                    <a href="#">Février</a>
                                    <a href="#">Janvier</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12 gutter">

                        <div class="sales report">
                            <h2>...Chapitres en ligne</h2><br/>
                            <br/>
                            <a href="#">Voir le détail</a>
                            <!-- <div class="btn-group">
                                <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span>Periode:</span> En cours
                                </button>
                                <div class="dropdown-menu">
                                    <a href="#">Mars</a>
                                    <a href="#">Février</a>
                                    <a href="#">Janvier</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<!-- Modal -->
<div id="add_project" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header login-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Add Project</h4>
            </div>
            <div class="modal-body">
                <input type="text" placeholder="Project Title" name="name">
                <input type="text" placeholder="Post of Post" name="mail">
                <input type="text" placeholder="Author" name="passsword">
                <textarea placeholder="Desicrption"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="cancel" data-dismiss="modal">Close</button>
                <button type="button" class="add-project" data-dismiss="modal">Save</button>
            </div>
        </div>

    </div>
</div>

</body>

<?php echo $contentPageAdmin?>