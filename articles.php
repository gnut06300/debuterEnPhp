<?php 
	// On va chercher les articles dans la base
	// On se connecte à la base
	require_once 'includes/connect.php';

	// On écrit la requête
	$sql = "SELECT * FROM `articles` ORDER BY `created_at` DESC";

	// On exécute la requête
	$requete = $db->query($sql);

	// On récupère leqs données
	$articles = $requete->fetchAll();


	// On definit le titre
	$titre = "Liste des articles";

	// on inclut le header
	include 'includes/header.php';

	// On inclut la navbar
	include 'includes/navbar.php';
	// Diviser le code

	//  On écrit le contenu de la page
?>
<h1>Liste des articles</h1>
<section>
	 <?php foreach($articles as $article):  ?>
		<article>
			<h1><a href="article.php?id=<?= $article["id"]?>"><?= strip_tags($article["title"])  ?></a></h1>
			<p>	Publié le <?= $article["created_at"]?></p>
			<div><?= strip_tags($article["content"])  ?></div>
		</article>
	<?php endforeach; ?>
</section>
	<?php
	// On inclut le footer
	include 'includes/footer.php';
	 ?>
