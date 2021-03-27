<?php 
	// on inclut le fichier functions.php
	require_once 'includes/functions.php';
	// on inclut le header
	@include 'includes/header.php';
	
	// On inclut la navbar
	include_once 'includes/navbar.php';
	include_once 'includes/navbar.php';

	//  On écrit le contenu de la page
?>


 <p>Contenu de la page d'accueil</p>

<?php 

	require_once 'includes/connect.php';

	$username = "admin"; //  injection $username ="admin'; --";
	$password = "password";// ou $password = "azerty' OR 1=1; --"

	//$sql= "SELECT * FROM `users` WHERE `username` = 'test' AND `pass` = 'password'";
	//$sql= "SELECT * FROM `users` WHERE `username` = '$username' AND `pass` = '$password'";
	// $sql= "SELECT * FROM `users` WHERE `username` =? AND `pass` =?";

	$sql= "SELECT * FROM `users` WHERE `username` =:username AND `pass` =:pass";

	// On prépare la requête
	$requete = $db->prepare($sql);

	// On injecte les valeur "bindValue"
	//$requete->bindValue(1, $username, PDO::PARAM_STR);
	//$requete->bindValue(2, $password, PDO::PARAM_STR);
	$requete->bindValue(":username", $username, PDO::PARAM_STR); // $requete->bindParam(":username", $username, PDO::PARAM_STR);
	$requete->bindValue(":pass", $password, PDO::PARAM_STR);

	// On exécute
	$requete->execute();

	//$requete = $db->query($sql);
	$user = $requete->fetchAll();

	echo "<pre>";
	var_dump($user);
	echo "</pre>";


	// On inclut le footer
	include 'includes/footer.php';
?>
