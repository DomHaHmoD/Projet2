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
		<legend id="legend_other_page"><h4>STAPA Administrateur</h4></legend>

		<label for="action_type"><h5>Merci de saisir les informations de l'utilisateur/gestionnaire</h5></label>
		
		<!-- le .php est le lien avec le fichier php -->
		
        
			
            
            <form method="POST" action="code_admin_test.php">
            <center>
            <input type="text" name="nom" size="20" value="nom" maxlength="35" class="validate"> <input class="validate" type="text" name="prenom" size="20" value="prenom" maxlength="35"><br>
            <input type="text" name="login" size="20" value="login" maxlength="70" class="validate"> <input class="validate" type="text" name="password" size="20" value="password" maxlength="11"><br>
            <input type="text" name="privilege" size="20" value="privilege" maxlength="70" class="validate">
			<br>
            <button class="btn waves-effect waves-light tooltipped" type="submit"  onclick="window.location.href='http:/localhost/stapa3php/pages/page2.php'" target="_parent"
                                name="ajouter" data-position="top" data-delay="50" data-tooltip="valider votre ajout">
                                Ajouter
            </button>
            </center>
            </form>
            </html>
			    <!--</form>-->
			
		</form>
		<p> <!-- il faudra revenir au user menu --> 
			<button type="button" class="btn btn-primary" ONCLICK="window.location.href='http://localhost/stapa3php/projet2/pages/page2.php'">Revenir à la page précédente</button>
		</p>	
	</fieldset>

</body>
</html>