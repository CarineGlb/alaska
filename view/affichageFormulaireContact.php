
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xs-12">

                <img src="assets/img/contact.jpg" id="photo" class="img-fluid" alt="Responsive image"/>

            </div>

        </div>
    </div>



<div class="container-contact justify-content-center col-lg-10 col-xs-10">
    <h3> Vous souhaitez me contacter ?</h3><br/>


<p> Vous souhaitez me poser une question sur mon livre, mes chapitres, mes aventures ?</p>
<p> Remplissez le formulaire et je vous répondrai dans les meilleurs délais.</p>

<br/>



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

            <label for="email">Email : </label>

            <input type="email" id="email" class="form-control" name="email" required>

        </div>


        <div class="form-group">

            <label for="texteMessage">Votre message: </label>

            <textarea  class="form-control" id="texteMessage" rows="3" name="texteMessage" required></textarea>

        </div>

     <div class="form-check">
         <input class="form-check-input" type="checkbox" required value="mentionsLegales" id="defaultCheck1">
         <label class="form-check-label" for="defaultCheck1">
             J'accepte que les données saisies dans ce formulaire soient utilisées pour vous contacter dans le cadre de votre demande, conformément à nos <a href="<?php echo HOST;?>/index.php?action=mentionsLegales">mentions légales</a>
         </label>
     </div>


        <button type="submit" class="btn btn-primary formulaire">Envoyer</button>

     <br/>





    </form>

</div>













