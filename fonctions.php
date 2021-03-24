<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<?php 
		
		function additionner($nb1, $nb2){
			return $nb1+$nb2;
		}
		function saluer($prenom, $nom, $civilite = "",$salutation = "Bonjour"){
			echo "$salutation $civilite $prenom $nom";
		}

		$total = additionner(18,8);
		var_dump($total);
				
	 ?>
	 <p><?php echo additionner(12,52); ?></p> //echo pas obligatoire
	 <p><?php echo additionner(15,2); ?></p>
	 <p><?php echo additionner(252,47); ?></p>

	 <h1><?php saluer("Gérald", "COL", "Mr", "Hello") ?></h1>
	
	
</body>
</html>