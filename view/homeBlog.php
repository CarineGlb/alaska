


<section class="row">
    <aside class="col-sm-8">
        <div id="container">
            <h3 > Chapitres : </h3>
        </div>
    </aside>
</section>

<div class=row">
    <div class ="col-md-12">
            <?php
            foreach ($chapitres as $chapitre)
            {
                echo $chapitre->getTitle().'</br>';
                echo $chapitre->getContent().'</br>';
            }
            ?>
    </div>

        </br>
                <a href="https://localhost/blog_alaska/index.php?action=chapter" class="btn btn-primary">Lire en entier</a>

</div>








