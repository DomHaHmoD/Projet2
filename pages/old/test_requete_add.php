<?php 
// appel config.inc.php
session_start();
require('../config.inc.php');

echo $_SESSION['qualification'];
echo '<br />';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>STAPA</title>

	<!-- meta -->
	<meta charset="utf-8">
	<meta name="description=" content="appli STAPA">
	<meta name="author" content="Prénom HA-THI">
	
	<meta name="category" content="template">
	<meta name="copyright" content="STAPA Bordeaux">
	<meta name="google" content="translate">
	
	<link href="../../css/stapa3-template-style.css" rel="stylesheet" type="text/css">
	<link href="../images/bus.jpg" rel="shortcut icon" type="image/jpg">
	<!-- add bibliotheque Materialize -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<?php
// connexion bd
	try
		{
			$bdd = new PDO('mysql:host=' .DB_HOST. ';dbname=' .DB_NAME. ';charset=utf8', DB_USER, DB_PASS);
			/*$bdd = new PDO('mysql:host=localhost;dbname=stapa;charset=utf8', 'user', 'password');*/
		}
		catch (Exception $e)
		{   
		        die('Erreur : ' . $e->getMessage());
        }
        
    //recuperation des informations

    if (isset($_POST['data_to_modify'][2]) && isset($_POST['data_to_modify'][3]) && isset($_POST['data_to_modify'][1]) && isset($_POST['data_to_modify'][0])) {
        // Le formulaire a été soumis : récupération des informations
        $login = $_POST['data_to_modify'][2];
        $mdp = $_POST['data_to_modify'][3];
        $nom = $_POST['data_to_modify'][0];
        $prenom = $_POST['data_to_modify'][1];
        
        
         
    } 
    

	// query sql pour l'ajout de données
	$reponse = $bdd->query("INSERT INTO `utilisateur`(`nom_utilisateur`, `prenom_utilisateur`, `login`, `password_utilisateur`) 
    VALUES (".$nom.",".$prenom.",".$login.",".$mdp.");");
?>