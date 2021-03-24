<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<?php 
		
		echo "<pre>";

		// Déclarer un tableau
		$tableau = ["Bonjour", 15, true, 58.15, "Brouette", 45, false];

		// Ajouter des valeurs
		// A la fin (push)
		//array_push($tableau, "Fin", 89);
		$tableau[] = "Fin";

		// Au début (unshft)
		array_unshift($tableau, "Début");

		// Supprimer des valeurs
		// A la fin (pop)
		$valeur = array_pop($tableau);

		// Au début (shift)
		$valeur = array_shift($tableau);

		// Diviser le tableau en plusieurs parties de 2 valeurs
		$tableau2 = array_chunk($tableau,2, true);
//true pour conserver les index de l'ancien tableau option

		// Mélanger un tableau
		shuffle($tableau);

		//,tableau associtif
		$tableauMulti=[
			0 =>[
				"nom" => "COL",
				"prenom" => "Gérald",
				"age" => 54
			],
			1 => [
				"nom" => "Ninet",
				"prenom" => "Patricia",
				"age" => 74
			]
			
		];


		var_dump($tableauMulti[1]['nom']);
		echo $valeur;
		echo "</pre>";

		
	 ?>
	
	
</body>
</html>