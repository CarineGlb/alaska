
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xs-12">

                <img src="assets/img/glacier.jpg" id="photo" class="img-fluid" alt="alaska"/>

            </div>

        </div>



<div class="container-chapitres">

        <div class="col-lg-10 col-xs-10">
        <h3 class="titreChapitre"> Billet simple pour l'Alaska</h3>

             <p> Vous trouverez ci-dessous le premier chapitre du roman "Billet simple pour l'Alaska".<br/>
             Si vous souhaitez lire les suivants, cliquez sur le chapitre en question dans le menu de navigation.</p>




         <?php

//debug::printr($unChapitre);
            echo '<h5>' . $unChapitre->getTitreChapitre() . '</h5>';
            echo '<p>' . $unChapitre->getContenuChapitre();




         ?>






<div class="affichageCommentaires col-lg-10 col-xs-10">

    <h5 class="commentaires"> Vos commentaires</h5>

<div class="messageResultat">

    <strong><?php echo $messageResultat?></strong><br/>

</div>



   <?php
   if($commentaires!=null)
    {

   foreach( $commentaires as $key=>$contenu) // boucle sur mon tableau de chapitres : pour chaque element de mon tableau $chapitres, prends la valeur $ chapitre
     {
         echo '<strong>' . htmlspecialchars($contenu->getPseudoCommentaire()).'</strong> : '. htmlspecialchars($contenu->getContenuCommentaire()) .' <br/><a href="'. HOST.'/index.php?action=insertionCommentaireSignale&idCommentaire='.$contenu->getIdCommentaire() . '&idChapitre=' . $unChapitre->getIdChapitre() . '">Signaler le commentaire </a>
<br/>';
     echo '<br/>';}
    }

    else{
        echo 'Aucun commentaire à afficher';
    }

  ?>


</div>





    <div class="container-contact col-lg-10 col-xs-10">
        <h5> Laissez vos commentaires</h5><br/>



        <form method="post" action=" <?php echo HOST.'/index.php?action=insertionCommentaires&idChapitre=' . $unChapitre->getIdChapitre()?>">
<!--?action=lireCommentaireChapitre-->



                    <div class="form-group">

                        <input type="hidden" id="idCommentaire" name="idCommentaire" value="">

                        <label for="pseudo">Votre pseudo: </label>

                        <input type="text" id="pseudo" class="form-control" name="pseudoCommentaire"  required>

                    </div>

                    <div class="form-group">

                    <label for="mail">Votre mail : <br/> (Celui-ci ne sera pas affiché lors de la publication de votre commentaire) </label>

                    <input type="email"  id="mail" class="form-control" name="mailCommentaire"  required>

                    </div>

                    <div class="form-group">

                        <label for="contenuCommentaire">Votre commentaire: <br/></label>

                        <br/><textarea  class="form-control" id="contenuCommentaire" rows="3" name="contenuCommentaire"  required  cols="33"></textarea>
                    </div>

                     <div>

                        <input type="hidden" name="idChapitre" value='<?= $unChapitre->getIdChapitre() // attention champ caché ?>' >

                    </div>

                    <button type="submit" class="btn btn-primary formulaire" name="envoyer" value="Envoyer">Envoyer</button>


                </form>

            </div>

    </div>


</div>

    </div>