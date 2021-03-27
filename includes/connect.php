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
?>