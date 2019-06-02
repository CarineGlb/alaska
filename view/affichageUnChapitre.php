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

//debug::printr($unChapitre);
            echo '<h5>' . $unChapitre->getTitreChapitre() . '</h5>';
            echo '<p>' . $unChapitre->getContenuChapitre() . '</p>';




         ?>

    </p>
         </div>
     </div>
</div>
    </section>

<section class="affichageCommentaires">

    <h5> Vos commentaires</h5>



    <strong><?php echo $messageResultat?></strong><br/>


   <?php
   if($commentaires!=null)
    {

   foreach( $commentaires as $key=>$contenu) // boucle sur mon tableau de chapitres : pour chaque element de mon tableau $chapitres, prends la valeur $ chapitre
     {
         echo '<strong>' . htmlspecialchars($contenu->getPseudoCommentaire()).'</strong> : '. htmlspecialchars($contenu->getContenuCommentaire()) .' <br/><a href='. HOST.'/blog_alaska/index.php?action=insertionCommentaireSignale&idCommentaire='.$contenu->getIdCommentaire() . '&idChapitre=' . $unChapitre->getIdChapitre() . '>Signaler le commentaire </a></button>
<br/>';
     echo '<br/>';}
    }

    else{
        echo 'Aucun commentaire à afficher';
    }

  ?>




</section>



    <div id="container-contact">
        <h5> Laissez vos commentaires</h5></br>



        <form method="post" action=" <?php echo HOST.'/index.php?action=insertionCommentaires&idChapitre=' . $unChapitre->getIdChapitre()?>">
<!--?action=lireCommentaireChapitre-->



                    <div class="form-group">

                        <input type="hidden" id="idCommentaire" name="idCommentaire" value="">

                        <label for="nom">Votre pseudo: </label>

                        <input type="text" id="pseudo" class="form-control" name="pseudoCommentaire"  required>

                    </div>

                    <div class="form-group">

                    <label for="mail">Votre mail : <br/> (Celui-ci ne sera pas affiché lors de la publication de votre commentaire) </label>

                    <input type="email"  id="mail" class="form-control" name="mailCommentaire"  required>

                    </div>

                    <div class="form-group">

                        <label for="prenom" >Votre commentaire: </label>

                        <textarea  class="form-control"  id="contenu" rows="3" name="contenuCommentaire"  required></textarea>

                        <input type='hidden' name='idChapitre' value='<?= $unChapitre->getIdChapitre() // attention champ caché ?>' >

                    </div>

                    <button type="submit" class="btn btn-primary formulaire" name="envoyer" value="Envoyer">Envoyer</button>


                </form>

            </div>




