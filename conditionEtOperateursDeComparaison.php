<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<?php 
		// On pose une question
		$reponse=true;
		// Pour comparer ==,
		if ($reponse) { // if ($reponse == true)
			// Alors
				echo "Bravo";
			}
			else{
				// Sinon
				echo "Puni";
			}
			$variable = 17;
		// Pour comparer ==, === égal triste, <, <=, >, >=, != différent de, !== tristemen différent, <=>
		if ($variable === 17) { // if ($reponse == true)
			// Alors
				echo "Egal";
			}
			else{
				// Sinon
				echo "Différent";
			}
			$a =58;
			$b =17;
			echo ($a <=> $b);
			/*
			< -> -1 a<b
			= -> 0 a=b
			> -> 1 a>b
			*/
			$animal ="Chat";
			switch ($animal) {
				case 'Chat':
					echo "Félin";
					break;
				case 'Poisson Rouge':
					echo "Poisoon";
					break;
				case 'Perroquet':
					echo "Oiseau";
					# code...
					break;
			}
			switch ($a<=>$b) {
				case -1:
					echo "a plus petit que b";
					break;
				case 0:
					echo "a égal b";
					break;
				case 1:
					echo "a plus grand que b";
					# code...
					break;
			}

				
	 ?>

	
</body>
</html>