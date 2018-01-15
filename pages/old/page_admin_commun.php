<!-- fichier page admin
	bloc commun -->

<!-- start de la seesion -->
<?php 
// appel config.inc.php
session_start();
require('../config.inc.php');

echo $_SESSION['qualification'];
echo '<br />';

?>

<!-- le html -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma super page PHP</title>
    </head>
    <body>
    
    <!DOCTYPE html>
<html lang="fr">
<head>
	<title>STAPA3</title>

	<!-- meta -->
	<meta charset="utf-8">
	<meta name="description=" content="appli STAPA">
	<meta name="author" content="Prénom HA-THI">
	
	<meta name="category" content="template">
	<meta name="copyright" content="STAPA Bordeaux">
	<meta name="google" content="translate">
	
	<link href="../../css/stapa3-template-style.css" rel="stylesheet" type="text/css">
	<link href="../../images/bus.jpg" rel="shortcut icon" type="image/jpg">
	<!-- add bibliotheque Materialize -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
	<!-- test de cookie -->

	<fieldset id="bloc_config">
		<legend id="legend_other_page"><h4>STAPA Administrateur</h4></legend>
	

	<!-- bloc titre commun à toutes les pages -->
	<?php include("bloc_titre_other.php"); ?>

    <!-- bloc admin commun -->
	<?php include("bloc_body_commun.php"); ?>
	
	</fieldset>
</body>
</html>