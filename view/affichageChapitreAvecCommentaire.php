<section>
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-lg-12">

                <img src="assets/img/glacier.jpg" id="photo" class="img-fluid" alt="Responsive image"/>

            </div>

        </div>
    </div>
</section>
<br>

<section>
    <div class="container-chapitre">
        <div class="row">
            <div class="col-lg-5">
                <h3> Billet simple pour l'Alaska</h3>
            </div>
        </div>
    </div>

    <br>
</section>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <p> Vous trouverez ci-dessous le premier chapitre du roman "Billet simple pour l'Alaska".</br>
                Si vous souhaitez lire les suivants, cliquez sur le chapitre en question dans le menu de navigation.</p>


            <p>

                <?php


                echo '<h5>' . $unChapitre->getTitreChapitre() . '</h5>' . '</br>';
                echo '<p>' . $unChapitre->getContenuChapitre() . '</p>';




                ?>

            </p>
        </div>
    </div>
</div>
</section>

<section class="affichageCommentaires">

    <h5> Vos commentaires</h5><br/>

    <?php

    /* foreach($commentaire as $key=> $value)
     {
         echo $pseudo.' :'. $commentaire;
     }*/

    //Debug::printr($tabCommentaire);

    echo $_POST['pseudoCommentaire'];

    /*foreach($lireCommentairesChapitre as $key=> $voirCommentaire)
    {
        echo '<p>'.'<strong>'.ucfirst($voirCommentaire->getPseudoCommentaire()). ': '.'</strong>'.$voirCommentaire->getContenuCommentaire().'<br/>'.'</p>';
    }*/

    ?>
