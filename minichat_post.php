<?php
// Effectuer ici la requête qui insère le message
	session_start(); // On démarre la session AVANT toute chose
	$_SESSION['login'];
	$bdd = new PDO('mysql:host=localhost;dbname=logs', 'root', '');
	$requete = $bdd->prepare('INSERT INTO logs(pseudo, message) VALUES (?,?)');
	$requete->execute(array($_SESSION['login'], $_POST['message']));
// Puis rediriger vers minichat.php comme ceci :
header('Location: Forum.php');
?>