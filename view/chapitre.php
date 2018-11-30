<section>
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-lg-12">

                <img src="assets/img/glacier.jpg" id="photo" class="img-fluid" alt="Responsive image"/>

            </div>

        </div>
    </div>
</section>
</br>

<section>
<div class="container">
    <div class="row justify-content-start">
        <div class="col-lg-5">
        <h3> Billet simple pour l'Alaska</h3>
        </div>
</div>
</br>
</section>

<section>
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-lg-12">
             <br> Vous trouverez ci-dessous les 3 premiers chapitres du roman "Billet simple pour l'Alaska". Vous pouvez acheter le roman sur Amazon.</p>
         </div>
      </div>
 </div>
</section>

    <p>
        <?php

            echo '<h5>'.$chapitre->getTitle().'</h5>'.'</br>';
            echo '<p>'.$chapitre->getContent().'</p>';

        ?>
    </p>


</div>

