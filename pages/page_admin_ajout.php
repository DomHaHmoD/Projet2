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
	<meta name="author" content="Benjamin Barillot">
	
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

		<label for="action_type"><h5>Merci de saisir les informations de l'utilisateur/gestionnaire</h5></label>
		
		<!-- le .php est le lien avec le fichier php -->
            
            <form method="POST" action="code_admin_test.php">

                <div class="row">
                    <div class="col s6">
                        <input type="text" name="nom" placeholder="nom" size="20" value="" maxlength="35" class="validate">
                    </div>
                    <div class="col s6">
                        <input class="validate" type="text" name="prenom"  placeholder="prénom" size="20" value="" maxlength="35">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col s6">
                        <input type="text" name="login"  placeholder="identifiant" size="20" value="" maxlength="70" class="validate">
                    </div>
                    <div class="col s6">
                        <input class="validate" type="text"  placeholder="mot de passe" name="password" size="20" value="" maxlength="11">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col s6">
                        <input type="text" name="privilege"  placeholder="privilège" size="20" value="" maxlength="70" class="validate">
                    </div>
                </div>
			    <br>
                <button class="btn waves-effect waves-light tooltipped" type="submit"  onclick="window.location.href='http:/localhost/stapa3php/pages/page2.php'" target="_parent"
                                name="ajouter" data-position="top" data-delay="50" data-tooltip="valider votre ajout">
                                Ajouter
                </button>

            </form>
            </html>
			    <!--</form>-->
			
		</form>
		<p> <!-- il faudra revenir au user menu --> 
			<button type="button" class="btn btn-primary" ONCLICK="window.location.href='http://localhost/stapa3php/projet2/pages/page2.php'">Revenir à la page précédente</button>
		</p>	
	</fieldset>
    <?php include("bloc_footer.php"); ?>
</body>
</html>