<?php
 //appel config.inc.php
session_start();
require('../config.inc.php');
//echo '<pre>';
//print_r($_SESSION['data_to_modify']);
//echo '</pre>';
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
</head>

<body>

<?php
  	require('bloc_titre_other.php');
?>

    <!-- bloc requete -->
	<fieldset id="bloc_requete">
		<legend id="legend_other_page"><h4>STAPA | Administrateur</h4></legend>

		<label for="action_type"><h5>Merci de saisir les informations de l'utilisateur</h5></label>
		
		<!-- le .php est le lien avec le fichier php -->
		<form id="form1" action="page_admin_resultat.php" method="post" name="rechercher">
            <div class="row">
                <div class="col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <label class="active" id="label_form" for="nom_user">Nom de l'utilisateur</label>
                    <input id="nom_user" type="text" name="nom_user" class="validate" required
                           value="<?php
                           if (!empty($_SESSION['data_to_modify'])) {
                               echo $_SESSION['data_to_modify'][0];
                           } else {
                               echo '';
                           }
                           ?>" />

                </div>
                <div class="col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <label class="active" id="label_form" for="nom_user">Nom de l'utilisateur</label>
                    <input id="nom_user" type="text" name="nom_user" class="validate" required
                           value="<?php
                           if (!empty($_SESSION['data_to_modify'])) {
                               echo $_SESSION['data_to_modify'][0];
                           } else {
                               echo '';
                           }
                           ?>" />

                </div>
                <div class="form-group">
                    <label for="InputEmail">Identifiant</label>
                    <input type="text" name="email" class="form-control" id="InputEmail" aria-describedby="emailHelp"
                           placeholder="Saisissez votre identifiant" size="50" required>

                </div>
            </div>
            <div class="row">
                <div class="col s6">
                    <button class="btn waves-effect waves-light tooltipped" type="submit"
                            ONCLICK="window.location.href='http://localhost/stapa3php/projet2/pages/page_admin_recherche.php'"
                            name="rechercher" data-position="top" data-delay="50" data-tooltip="valider votre recherche">
                        Rechercher
                    </button>
                </div>
            </div>
		</form>

        <!-- il faudra revenir au user menu -->
        <div></div>
			<button type="button" class="btn btn-primary" ONCLICK="window.location.href='http://localhost/stapa3php/projet2/pages/page2.php'">
                <i class="material-icons left">keyboard_arrow_left</i>
                Revenir à la page précédente</button>
        </div>
	</fieldset>

</body>
</html>