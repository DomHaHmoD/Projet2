
<!-- fichier page suivante
	générée en fonction du login -->

<!-- maj des cookies -->
<?php 
session_start();
//require('cookie_modify.php'); 
 print_r($_SESSION);

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
	
	<link href="../css/stapa3-template-style.css" rel="stylesheet" type="text/css">
	<link href="../images/bus.jpg" rel="shortcut icon" type="image/jpg">
	<!-- add bibliotheque Materialize -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>

<body>
	
	<!-- bloc titre commun à toutes les pages -->
	<?php include("page_bloc_titre_other.php"); ?>

    <!-- bloc requete -->
	<?php include("page_bloc_body_commun.php"); ?>

	<!-- bloc footer -->
	<?php include("page_footer.php"); ?>
	
</body>
</html>