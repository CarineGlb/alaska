

<div class="containertabChapitres">

    <?php
    if(!empty($message))
    {
        echo $message;
    }

    ?>


    <h3> Listes des chapitres</h3><br/>
  <div class="rowTabChapitres">
     <div class="tableau-chapitres">

<table class="table table-bordered">

        <thead class="thead-light">
<tr>
        <th scope="col">Titre</th>
        <th scope="col">Contenu</th>
        <th class="tabAction" scope="col">Action</th>
</tr>
        </thead>
       <!-- d'abord le foreach, ensuite le <tr> pour créer une ligne et le <td> pour créer une colonne. A la fin des <td>, on ferme l'accolade du foreach-->
    <tbody>

     <?php foreach( $chapitresAdmin as $key=>$contenu) {?>

        <tr> <!-- 1 ligne -->

             <td><!-- 1 colonne -->
                 <div class = "tabPseudoCommentaire">

                    <?php echo $contenu->getTitreChapitre(); ?> <br/>

                 </div>
             </td>

            <td>
                <div class = "tabContenuCommentaire">

                     <?php echo $contenu->getResumeChapitre().'<br/>'; ?>

                </div>
            </td>

            <td>
                <div class="tabAction">

                    <a href="<?php echo HOST.'/blog_alaska/index.php?action=modifierChapitre&idChapitre=' . $contenu->getIdChapitre();?>"><i class="fas fa-pencil-alt"></i></i><span class="hidden-xs hidden-sm"> Modifier</a><br/>
                    <a href=<?php echo HOST.'/blog_alaska/index.php?action=suppressionChapitre&idChapitre=' . $contenu->getIdChapitre();?>"><i class="fas fa-trash-alt" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Supprimer</a><br/>
                </div>
            </td>

    </tr>

    <?php } ?>

</tbody>

</table>

            </div>
        </div>
    </div>