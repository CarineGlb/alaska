<!DOCTYPE html>
<html>
<head>
	<meta charset ="utf-8"/>
	<title>Blog de Jean Forteroche</title>

	<h1>Billet simple pour l'Alaska</h1>

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

