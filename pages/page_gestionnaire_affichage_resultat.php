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

<!-- bloc de requete -->
	<fieldset id="bloc_requete">
		<legend id="legend_other_page"><h4>STAPA | Gestionnaire</h4></legend>

		<label for="action_type"><h5>Merci de saisir les informations afin de rechercher l'abonné que vous souhaitez modifier</h5></label>

		<!-- le tableau de résultat sera ici -->
		<?php 
		include('resultat_abonne.php');
		?>

		<!-- il faudra revenir au user menu --> 
		<button type="button" class="btn btn-primary" ONCLICK="window.location.href='http://localhost/interface/projet2/pages/page_adminold.php'">Revenir à la page requête</button>
		

	</fieldset>
</body>
</html>