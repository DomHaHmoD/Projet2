<?php

session_start();

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

	<link href="../css/stapa3-template-style.css" rel="stylesheet" type="text/css">
	<link href="../images/bus.jpg" rel="shortcut icon" type="image/jpg">
	<!-- add bibliotheque Materialize -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>


<body>

<!-- bloc titre commun à toutes les pages -->
<?php include("bloc_titre_other.php"); ?>

<!-- bloc de requete -->
<fieldset id="bloc_requete">
    <legend id="legend_other_page"><h4>STAPA | Gestionnaire</h4></legend>

    <label for="action_type"><h5>Modification de la fiche "personne"</h5></label>

    <?php

// On commence par récupérer les champs
if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
} else {
    $nom = "";
}

if (isset($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
} else {
    $prenom = "";
}

if (isset($_POST['date'])) {
    $date=$_POST['date'];
} else {
    $date="";
}

if (isset($_POST['email'])) {
    $email=$_POST['email'];
} else {
    $email="";
}

if (isset($_POST['id']))  {
    $id=$_POST['id'];
} else {
    $id="";
}




if(empty($nom) OR empty($prenom) OR empty($date) OR empty($email))
{
    echo '<color="red">Attention, aucun champs ne peut rester vide !</font>';
} else {
    // connexion à la base
    require('../config.inc.php');

    try {
        $bdd = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
        echo "Connexion réussie.<br />";
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }


    $reponse = $bdd->prepare("
        UPDATE `personnes` SET `nom`='$nom',`prenom`='$prenom',`naissance`='$date',`email`='$email' WHERE `id_personne` = $id");


    $reponse->execute();
    echo 'Vos informations on été ajoutées.<br />';
}

?>
<p> <!-- il faudra revenir au user menu -->
    <button type="button" class="btn btn-primary" ONCLICK="window.location.href='http://localhost/stapa3php/projet2/pages/page2.php'">Revenir à la page Recherche/Ajouter</button>
</p>

