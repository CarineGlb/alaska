
<div id = "container">

    <h3> Découvrir mon livre, chapitre par chapitre</h3>

    <?php if($chapitre->getId()): ?> <!-- j'appelle mon objet chapitre car ce n'est plus un tableau-->
        <?php endif; ?>

    <h4><?php echo $chapitre->getTitle(); ?></h4> </br>

    <p> <?php echo $chapitre->getContent(); ?></p>

</div>

