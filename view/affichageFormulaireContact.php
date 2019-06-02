<section>
    <div class="container">
        <div class="row justify-content-start ">
            <div class="col-lg-12">

                <img src="assets/img/contact.jpg" id="photo" class="img-fluid" alt="Responsive image"/>

            </div>

        </div>
    </div>
</section>


<div id="container-contact">
    <h3> Vous souhaitez me contacter ?</h3></br>


<p> Vous souhaitez me poser une question sur mon livre, mes chapitres, mes aventures ?</p>
<p> Remplissez le formulaire et je vous répondrai dans les meilleurs délais.</p>

</br>



 <form action="<?php echo HOST;?>/index.php?action=formulaireContact" method="post">

        <div class="form-group">

            <label for="nom">Votre nom: </label>

            <input type="text" id="nom" class="form-control" name="nom" required>

        </div>

        <div class="form-group">

            <label for="prenom" >Votre prénom: </label>

            <input type="text" id="prenom" class="form-control" name="prenom" required>

        </div>

        <div class="form-group">

            <label for="mail">Email : </label>

            <input type="email"  id="email" class="form-control" name="email" required>


        </div>

        <div class="form-group">

            <label for="Votre message">Votre message: </label>

            <textarea  class="form-control"  id="message" rows="3" name="message" required></textarea>


        </div>


        <button type="submit" class="btn btn-primary formulaire">Envoyer</button>


    </form>

</div>













