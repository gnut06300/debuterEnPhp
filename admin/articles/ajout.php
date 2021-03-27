<?php 
	//var_dump($_POST);
	if(!empty($_POST)){
		// POST n'est pas vide, on verifie toutes les données sont présentes
		if (
			isset($_POST['titre'], $_POST['contenu'])
			&& !empty($_POST['titre']) && !empty($_POST["contenu"])
		) {
			// Le formulaire est complet
			// On récupère les données en les protégeant (failles XSS)
			// On retire toute balise du contenu
			$titre=strip_tags($_POST['titre']);

			//On neutralise toute balise du contenu
			$contenu = htmlspecialchars($_POST['contenu']);
			// On peut les enregister
			// On se connecte à la base
			require_once '../../includes/connect.php';

			// On écrit la requête
			$sql = "INSERT INTO `articles`(`title`, `content`) VALUES (:title, :content)";

			// On prépare la requête
			$query = $db->prepare($sql);

			// On injecte les valeurs
			$query->bindValue(":title", $titre, PDO::PARAM_STR);
			$query->bindValue(":content", $contenu, PDO::PARAM_STR);
			//On exécute la requête
			if(!$query->execute()){
				die("Une erreur est survenue");
			}

			// On récupère l'id de l'article
			$id=$db->lastInsertId();

			die("Article ajouté sous le numéro $id");
			# code...
		}else{
			die("Le formulaire est incomplet");
		}

	}

	$titre= "Ajouter un article";
	// On inclut le header
	include_once '../../includes/header.php';
	
	include_once '../../includes/navbar.php';
?>
<h1>Ajouter un article</h1>

	<form method="post">
		<div>
			<label for="titre">Titre</label>
			<input type="text" name="titre" id="titre">
		</div>
		<div>
			<label for="contenu">Contenu</label>
			<textarea name="contenu" id="contenu"></textarea>
		</div>
		<button type="submit">Enregistrer</button>
	</form>


<?php

	include_once '../../includes/footer.php';

 ?>