<!-- fichier de démarrage
	login -->

<!-- start de la session : appel seesion_start.php-->
<?php 
if ((isset($_CCOKIE['email']))&(isset($_COOKIE['password']))) {
require('pages/session_destroy.php');
}
require('pages/session_start.php');
?>

<!-- le html -->
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
	
	<link href="css/stapa3-template-style.css" rel="stylesheet" type="text/css">
	<link href="images/bus.jpg" rel="shortcut icon" type="image/jpg">
	<!-- add bibliotheque Materialize -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<!-- page index login -->
<body>
	<!-- bloc titre -->
	<?php include("pages/page_bloc_titre_index.php"); ?>

    <!-- bloc body login -->
	<?php include("pages/page_bloc_body_index.php"); ?>
	<!--<a href="pages/page2.php?email=dominique.hathi@gmail.com">coucou</a>-->
</body>
</html>