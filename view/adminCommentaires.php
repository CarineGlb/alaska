

<div class="containertabCommentaires">

    <?php
    if(!empty($message))
    {
        echo $message;
    }

    ?>

    <h3> Listes des commentaires</h3><br/>
  <div class="rowTabCommentaires">
     <div class="tableau-commentaires">



<table class="table table-bordered">

        <thead class="thead-light">
<tr>
        <th scope="col">Pseudo</th>
        <th scope="col">Commentaire</th>
        <th scope="col">Mail</th>
        <th scope="col">Signalement</th>
        <th class="tabAction" scope="col">Action</th>
</tr>
        </thead>
       <!-- d'abord le foreach, ensuite le <tr> pour créer une ligne et le <td> pour créer une colonne. A la fin des <td>, on ferme l'accolade du foreach-->
    <tbody>

     <?php foreach( $commentairesAdmin as $key=>$contenu) {?>

        <tr> <!-- 1 ligne -->

             <td><!-- 1 colonne -->
                 <div class = "tabPseudoCommentaire">

                    <?php echo $contenu->getPseudoCommentaire(); ?> <br/>

                 </div>
             </td>

            <td>
                <div class = "tabContenuCommentaire">

                     <?php echo $contenu->getContenuCommentaire().'<br/>'; ?>

                </div>
            </td>

            <td>
                <div class = "tabMailCommentaire">

                    <?php echo $contenu->getMailCommentaire().'<br/>'; ?>
                </div>

            </td>

            <td>
                <div class="tabCommentairesSignales">

                    <?php echo $contenu->getCommentaireSignale().'<br/>'; ?>

                </div>
            </td>

            <td>
                <div class="tabAction">

                    <a href="<?php echo HOST.'/indexAdmin.php?action=signalementCommentaire&idCommentaire=' . $contenu->getIdCommentaire();?>"><i class="fas fa-check" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Supprimer le signalement</a><br/>
                    <a href="<?php echo HOST;?>/indexAdmin.php?action=suppressionCommentaire&idCommentaire=<?php echo $contenu->getIdCommentaire();?>"><i class="fas fa-trash-alt" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Supprimer</a><br/>
                </div>
            </td>

    </tr>

    <?php } ?>

</tbody>

</table>

            </div>
        </div>
    </div>




