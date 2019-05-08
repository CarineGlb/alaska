<script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>

    <!--    <form action="traitement.php" method="post"><textarea style="width: 100%;" name="content"><br /> </textarea>
            <input name="send" type="submit" value="Envoyer" /></form> -->

<form method="post" action="<?php echo HOST.'/blog_alaska/index.php?action=modifierChapitre&idChapitre=' . $chapitre->getIdChapitre();?>">

    <div id="container-modifierChapitres">
        <h5> Billet simple pour l'Alaska</h5></br>

    <input type="text" id="titreChapitre" class="form-control" name="titreChapitre"  value='<?= $chapitre->getTitreChapitre()?>'><br/>

        <textarea style="width: 100%;" name="contenuChapitre"><?= $chapitre->getContenuChapitre()?></textarea><br/>

    <!--textarea style="width: 100%;" name="content"  value='-->

    <input name="send" type="submit" value="Envoyer" />

</div>

</form>


