<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<?php 
		// Constantes d'environnement
		define("DBHOST", "localhost");
		define("DBUSER", "root");
		define("DBPASS", "");
		define("DBNAME", "tutophp");

		// DSN de connexion
		$dsn="mysql:dbname=".DBNAME.";host=".DBHOST;

		// On va se connecter à la base
		try {
			// On instancie PDO
			$db = new PDO($dsn, DBUSER, DBPASS);

			//echo "On est connecter";
			// On s'assure d'envoyer les données en UTF8
			$db->exec("SET NAMES utf8");

			// On définit le mode de "fetch" par défaut
			$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			die("Erreur de connection : ".$e->getMessage());
			
		}

		// Ici on est connectés à la base
		// On peut récupérer la liste des utilisateurs (user)
		$sql = "SELECT * FROM `users` WHERE `id` =1";

		$requete = $db->query($sql);

		//var_dump($requete);

		// On récupère les données (fetch ou fechtAll)
		$user = $requete->fetch();

		echo "<pre>";
		var_dump($user["email"]);
		echo "</pre>";

		// Ajouter un utilisateur
		$sql = "INSERT INTO `users`(`email`,`pass`,`roles`) VALUES ('test3@gnut.eu','password','[\"[ROLE_USER\"]')";
		$requete = $db->query($sql);

		//Modifier un utilisateur 
		$sql = "UPDATE `users` SET `pass` = 'azerty' WHERE `id` = 3";

		$requete = $db->query($sql);

		// Supprimer des utilisateur
		$sql = "DELETE FROM `users` WHERE `id` > 2";
		$requete = $db->query($sql);

		// Savoir combien de lignes ont été supprimées

		echo $requete->rowCount();
				
	 ?>

	
</body>
</html>