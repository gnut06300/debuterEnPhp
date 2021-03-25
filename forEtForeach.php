<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<?php 


		$clients = [
			"ref1" => [
				"nom" => "COL",
				"prenom" => "Gérald"
			],
			"ref2" => [
				"nom" => "César",
				"prenom" => "Jules"
			]
		];
		//echo sizeof($clients);

		foreach ($clients as $key => $value) { // Ou foreach ($clients as $ref => $client) {
		 	# code...
		  	//var_dump($client);
		  	echo "<p>Référence client : $key</p>";
		  	echo "<p>{$value["prenom"]} {$value["nom"]}</p>";
		}

		for ($nombre= 0; $nombre <=100 ; $nombre += 5) { 
			echo "<p>$nombre</p>";
			# code...
		}

				
	 ?>

	
</body>
</html>