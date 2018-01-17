<?php 
// appel config.inc.php
session_start();
require('../config.inc.php');

//print_r($_SESSION['qualification']);
//echo '<br />';

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="materialize-pagination.min.js"></script>
</head>

<body>
	<!-- bloc titre -->
  	<?php require('bloc_titre_other.php'); ?>

    <div class="row" id="bloc_body_global">
        <div class="row">
            <div class="col s9">
                <fieldset id="bloc_config">
                    <legend id="legend_other_page"><h4>STAPA Utilisateur</h4></legend>
                        <div  id="pagination">

                            <!-- le tableau de résultat sera ici -->
                            <?php
                            require('code_user_requete.php');
                            ?>
                        </div>
                    <p> <!-- button user menu back-->
                        <button type="button" class="btn btn-primary" ONCLICK="window.location.href='http://localhost/stapa3php/projet2/pages/page2.php'">Revenir à la page requête</button>
                    </p>
                </fieldset>

             <div class="col s3" id="bloc_infos"> <!-- zone d'iformations de droite -->
                    <fieldset>
                        <label for="action_type"><h5>Informations</h5></label>
                        <form>
                            <p>Pour revenir à la page des requêtes,
                                cliquez sur le bouton.
                            </p>
                            <form>
                    </fieldset>
             </div>
            </div>
        </div>
    </div>

    <!-- bloc footer -->
    <?php include("bloc_footer.php"); ?>

</body>
</html>

