<?php
include_once ('view/head.php');
include_once ('view/header.php');
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset ="utf-8"/>
	<title>Blog de Jean Forteroche</title>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-lg-8 col-xs-12">
	<h1>Billet simple pour l'Alaska</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-start ">
            <div class="col-sm-8 col-lg-8 col-xs-12">

                <img src="assets/img/alaska_avion.jpg" alt="paysage alaska avec des hydravions" id="photo"/>

            </div>

        </div>
    </div>

	<div class="chapitres">
		<p> "Billet simple pour l'Alaska est un nouveau récit d'aventures riche en rebondissements qui saura vous faire découvrir le milieu sauvage et hostile de la tant redoutée mystérieuse et indomptable Alaska." </p>
		<p>

		<h2 > Chapitres : </h2>

		<?php foreach ($chapters as $key => $value){?>
			<h2> <?= $value['title']; ?> </h2> 
			<p> <?= $value['content']; ?> </p>
			<a href="http://localhost/blog_alaska/index.php?action=chapter&id=<?= $value['id']; ?>"> Lire en entier</a>

		<?php  } ?>


		</p>
		
	</div>


</body>
</html>

