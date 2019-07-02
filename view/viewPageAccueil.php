
<!-- Anciennement homeBlog -->




<section>
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-12 col-xs-12">

                <img src="assets/img/alaska_avion_recadree.jpg" id="photo" class="img-fluid" alt="Responsive image"/>

            <div class="row">
                <div class="col-md-5">
                    <button type="button" class="btn btn-outline-secondary" id="bouton">Découvrir le livre </button><a href="<?php echo HOST;?>/index.php?action=accederChapitres"></a>
                 </div>
            </div>

            </div>

        </div>
    </div>

   <div class="bienvenue">
    <div class="col-lg-12 col-xs-12">
        <h4 class="text-sm-left bienvenue"> Bienvenue! </h4> <br/>
            <p class="text-sm-left bienvenue-texte"> Je suis ravi de vous accueillir sur mon blog pour partager avec vous mes dernières publications et vous faire décourvrir en avant-première les aventures de Martial,
            jeune homme engagé et moderne, en quête d'une vie meilleure, faite de découvertes sauvages et authentiques.</p><br/>
    </div>
   </div>

</section>



    <div class="bienvenue">
        <div class="col-lg-12 col-xs-12">
        <h4 class="text-sm-left titre"> Billet simple pour l'Alaska : </h4> <br/>
        </div>



    <div class="container-couv">
        <div class="ensemble col-lg-12 col-xs-12">
              <div class="col-lg-3 col-xs-4">
                 <img src="assets/img/couv-livre.png" alt="couverture livre" class="couv-livre">
              </div>



    <div class="texte-couv">

               <div class="col-lg-6 col-xs-5">
                   <p>Martial se retrouve seul face à ces larges étendues sauvages, et n’ose pas y aller. Car pour s'y rendre, il faut du courage. Et le courage, c'est ce qui l'a emmené jusqu'ici.
                    Il n’a désormais plus le choix…</p>
               </div>

    </div>


    </div>

    <div class="col-md-5">
                   <div class="bouton-chapitres">
                        <button type="button" class="btn btn-info">Lire les chapitres en entier</button><br/>
                   </div>

    </div>



<div class="container-couv col-lg-12 col-xs-12">

    <div class="chapitres">
        <div class="col-lg-12 col-xs-12">
         <h4 class="plusChapitres"> Pour vous donner envie d'en découvrir davantage... </h4> <br/>
         </div>
    </div>
        <div class="extraits">
            <div class="row">
                <div class="col-lg-10 col-xs-10">
                    <?php
                   foreach ($chapitres as $key=>$chapitre) // boucle sur mon tableau de chapitres : pour chaque element de mon tableau $chapitres, prends la valeur $ chapitre
                    {
                        echo '<h5>'.$chapitre->getTitreChapitre().'</h5>';
                        echo $chapitre->getResumeChapitre().'<a href="' . HOST .'/index.php?action=getChapitres&amp;idChapitre=' . $chapitre->getIdChapitre().'">(Lire la suite)</a><br/>'. "\n";
                        // ici action correspond au parametre decrit dans le routeur et idChapitre recupere automatiquement l'id avec le getter
                    }
                    ?>
                </div>
            </div>

        </div>


</div>

</div>



    </div>









