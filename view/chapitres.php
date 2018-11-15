
<div class="chapitre">

    <?php
    foreach ($chapitres as $chapitre)
    {
        echo $chapitre->getTitle().'</br>';
        echo $chapitre->getContent().'</br>';
    }
    ?>

</div>


