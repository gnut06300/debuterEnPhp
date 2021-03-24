<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<?php 


		// Chaîne de caractères (string)
		$chaine = "Ceci est une chaîne de caractères";
		//echo $chaine;

		// Afficher 1 caractère de la chaîne
		//echo $chaine[3];

		// Modifier un caractère de la chaîne
		//$chaine[0]= "F";
		 //echo $chaine;

		 // Extraire une partie de la chaine caractére
		 echo substr($chaine, 0,4);
		 var_dump(substr($chaine, 13,7));
		 var_dump(substr($chaine, -11));

		 // Remplacer une partie de la chaîne
		 //$chaine= str_replace('Ceci', 'Celà', $chaine);
		 $chaine= str_ireplace('ceci', 'Celà', $chaine);
		 var_dump($chaine);

		 // PHP 8
		 //var_dump(str_contains($chaine, 'une')); //boolean

	 ?>
	
	
</body>
</html>