<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<!-- Commentaire HTML -->
	<?php 
		/* On écrit Hello World*/
		echo "<h1>Hello World !!</h1>";
		// L'injection de variable fonctionne UNIQUEMENT avec "", pas les ''
		$nomPersonne="Gérald";
		echo "<p>Bonjour $nomPersonne, comment ça va ?</p>";
		// Les types de varibles
		// Entiers (integer)
		$nombre = 85;

		// Décimaux (float)
		$nombre2 = 85.2;

		// Chaîne de caractères (string)
		$chaine = "Ceci est un texte";

		// Booléen (boolean)
		$boolean = true; // false

		// Connaître le contenu et le type d'une variable
		var_dump($chaine);

	 ?>
	
	
</body>
</html>