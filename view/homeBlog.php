



  <div class="container">
        <div class="row justify-content-start ">
            <div class="col-sm-8 col-lg-8 col-xs-12">

                <img src="assets/img/alaska_avion_recadree.jpg" id="photo" class="img-fluid" alt="Responsive image"/>
                <button type="button" class="btn btn-info btn-lg">Découvrir le livre</button>

            </div>

        </div>
    </div>
<section class ="row">
    <div class="col-lg-12">
        <p> "Billet simple pour l'Alaska est un nouveau récit d'aventures riche en rebondissements qui saura vous faire découvrir le milieu sauvage et hostile de la tant redoutée mystérieuse et indomptable Alaska." </p>

    </div>
</section>

<section class="row">
    <aside class="col-sm-8">
        <h2 > Chapitres : </h2>

        <div class="container">
        <img src="assets/img/carre.png" alt="carre" class="rounded float-left"/>
        </div>

        <?php foreach ($chapters as $key => $value){?>
            <h2> <?= $value['title']; ?> </h2>
            <p> <?= $value['content']; ?> </p>
            <a href="http://localhost/blog_alaska/index.php?action=chapter&id=<?= $value['id']; ?>"> Lire en entier</a>

        <?php  } ?>
    </aside>
</section>






