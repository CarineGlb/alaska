



<div id="container-signalementCommentaire">



<h3> Souhaitez-vous supprimer le signalement de ce commentaire ?</h3></br>

    <form method="post" action="<?php echo HOST.'/blog_alaska/index.php?action=signalementCommentaire&idCommentaire=' . $commentaire->getIdCommentaire();?>">

        <label for="nom"><strong>Contenu du commentaire signalé: </strong></label>

     <input type="text" id="commentaireSignale" class="form-control" name="commentaireSignale"  value='<?= $commentaire->getContenuCommentaire()?>'><br/>

     <input type="radio" name="choix" value="supprimer"> Oui, je supprime le signalement de ce commentaire<br/>
    <br><input checked type="radio" name="choix" value="conserver"> Non, je conserve le signalement de ce commentaire<br/>
    <br><input type="submit" name="envoi"><br/>
    </form>
</div>



</div>

<?php
if(!empty($message))
{
    echo  $messageSuppression;
}

else{
    echo 'Le signalement du commentaire a été conservé';
}
?>