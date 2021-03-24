<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<?php 
		$nombre1 = 14;
		$nombre2 = 85;

		// Addition
		$resultat = $nombre1 + $nombre2;

		// Soustraction
		$resultat =$nombre1-$nombre2;

		// Multiplication
		$resultat =$nombre1*$nombre2;

		// Division
		$resultat =$nombre1/$nombre2;

		// Calcul "complexe"
		$resultat = $nombre1 + $nombre2/5;

		// Modulo
		$resultat = $nombre2 % $nombre1;

		// 9 est-il un multiple de 3 ?
		//var_dump(9%3);

		// Incrémenter (ajouter 1)
		//$nombre1 += 1;
		//$nombre1++;
		var_dump(++$nombre1);

		var_dump($resultat);

		// Décrémenter
		// $nombre1 -= 1;
		// $nombre1--

		
	 ?>
	
	
</body>
</html>