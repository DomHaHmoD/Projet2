<?php 
// appel config.inc.php
session_start();
require('../config.inc.php');

print_r($_SESSION['qualification']);
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
	
	<link href="../css/stapa3-template-style.css" rel="stylesheet" type="text/css">
	<link href="../images/bus.jpg" rel="shortcut icon" type="image/jpg">
	<!-- add bibliotheque Materialize -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
	<!-- bloc titre -->
  	<?php
  	require('page_bloc_titre_other.php');
  	?>

	<fieldset id="bloc_config">
		<legend id="legend_other_page"><h4>STAPA Utilisateur</h4></legend>

		<!-- le tableau de résultat sera ici -->
		<?php 
		require('code_requete.php');
		?>
		
		<p> <!-- il faudra revenir au user menu --> 
			<button type="button" class="btn btn-primary" ONCLICK="window.location.href='http://localhost/stapa3php/projet2/pages/page2.php'">Revenir à la page requête</button>
		</p>

		
	</fieldset>

	<!-- bloc footer -->
	<?php include("page_footer.php"); ?>

</body>
</html>

