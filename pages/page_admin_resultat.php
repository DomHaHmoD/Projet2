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
	
	<link href="../css/stapa3-template-style.css" rel="stylesheet" type="text/css">
	<link href="../images/bus.jpg" rel="shortcut icon" type="image/jpg">
	<!-- add bibliotheque Materialize -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>



<!-- bloc titre -->
  	<?php
  	require('bloc_titre_other.php');
  	?>

    <div id="bloc_body_global">
        <div class="col s9">
            <fieldset id="bloc_requete">
                <legend id="legend_other_page"><h4>STAPA administrateur</h4></legend>

                <!-- le tableau de résultat sera ici -->
                <?php
                require('code_admin.php');
                ?>

                <p> <!-- il faudra revenir au user menu -->
                    <button type="button" class="btn btn-primary" ONCLICK="window.location.href='http://localhost/stapa3php/projet2/pages/page2.php'">Revenir à la page requête</button>
                </p>

            </fieldset>
        </div>

        <div class="col s3"> <!-- zone d'iformations de droite -->
            <fieldset id="bloc_infos">
                <legend><h5>Informations</h5></legend>
                <form>
                    <p>cliquez sur la requête que vous souhaitez
                        visualisez.

                        Vous aurez un bouton "revenir" aux requêtes,
                        pour revenir sur cette page.
                    </p>
                    <form>
            </fieldset>
        </div>
    </div>
</body>
</html>