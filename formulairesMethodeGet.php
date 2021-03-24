<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<form method="get">
		<div>
			<label for="nombre1">nombre 1 :</label>
			<input type="number" id="nombre1" name="nb1">
		</div>
		<div>
			<label for="nombre2">nombre 2 :</label>
			<input type="number" id="nombre2" name="nb2">
		</div>
		<button type="submit">Calculer</button>
	</form>
	<?php 
		// http://localhost/nouvelleTechno/debuterPhp/formulairesMethodeGet.php?nb1=124&nb2=36

		echo "<pre>";
		var_dump($_GET["nb1"]);
		echo "</pre>";
		$total = $_GET["nb1"]+$_GET["nb2"];
		echo "<p>Total : $total</p>";
	 ?>
	
</body>
</html>