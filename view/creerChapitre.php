


    <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>


    <div id="container-modifierChapitres">
        <h5> Billet simple pour l'Alaska</h5></br>



        <form name="redigerNouveauChapitre" id="redigerNouveauChapitre" action="<?php echo HOST;?>/indexAdmin.php?action=ajouterChapitre" method="post">

            <label for="texte" >Titre : </label>
            <input type="text" id="titreChapitre" class="form-control" name="titreChapitre">
            <br/>

            <label for="contenu" >Contenu : </label>
            <textarea style="width: 100%; id="contenuChapitre" name="contenuChapitre" rows="5" ></textarea>
            <br/>

             <input name="send" type="submit" value="Envoyer" />

    </div>

    </form>

