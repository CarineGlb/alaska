

<section>
    <div class="container">
        <div class="row">
            <div class="tableau-commentaires col-lg-12">
                <h3> Listes des commentaires</h3>


    <br>


<table class="table">
  <thead class="thead-light">

        <th scope="col">Pseudo</th>
        <th scope="col">Commentaire</th>
        <th scope="col">Mail</th>
        <th scope="col">Signalement</th>
        <th scope="col">Action</th>

        <tr>
            <td>
        <?php
        foreach( $commentairesAdmin as $key=>$contenu)
        {
        ?>

         <?php echo $contenu->getPseudoCommentaire().'<br/>'; ?>

            <?php
            }
            ?>

            </td>

            <td>
                <?php
                foreach( $commentairesAdmin as $key=>$contenu)
                {
                    ?>

                    <?php echo $contenu->getContenuCommentaire().'<br/>'; ?>

                    <?php
                }
                ?>

            </td>

            <td>
                <?php
                foreach( $commentairesAdmin as $key=>$contenu)
                {
                    ?>

                    <?php echo $contenu->getMailCommentaire().'<br/>'; ?>

                    <?php
                }
                ?>

            </td>

            <td>
                <?php
                foreach( $commentairesAdmin as $key=>$contenu)
                {
                    ?>

                    <?php echo $contenu->getCommentaireSignale().'<br/>'; ?>

                    <?php
                }
                ?>

            </td>

            <td>
                <?php
                if(!empty($contenu))
                {
 ?>
                <a href="#"><i class="fas fa-check" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Valider</a>
                <a href="#"><i class="fas fa-trash-alt" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Supprimer</a>
                <?php }?>
            </td>

        </tr>





  </thead>

            </div>
        </div>
    </div>
</section>