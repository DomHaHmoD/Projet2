<!--*****************************************************************************************************
	*			      						"PAGE" INDEX / LOGIN										*
	*																									*
	*				Page HTML démarrage de l'application. L'appli débute avec le login      			*
	* 		Author = Equipe projet 2																	*
	* 		Version = 1.0																	            *
	* 		Date = 26/01/2018													        				*
	*****************************************************************************************************
-->

<!-- start de la session : appel seesion_start.php-->
<?php
require('pages/session_start.php');
if ((isset($_COOKIE['email']))&(isset($_COOKIE['password']))) {
//require('pages/session_destroy.php');
}

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
    <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
</head>

<!-- page index login -->
<body>
	<!-- bloc titre -->
	<?php include("pages/bloc_titre_index.php"); ?>

    <!-- bloc body login -->
	<?php include("pages/bloc_body_index.php"); ?>

    <script>
        $(document).ready(function(){
            // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
            $('.modal').modal(open);
        });
    </script>

</body>
</html>