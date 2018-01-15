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
  	require('page_bloc_titre_other.php');
?>

    <!-- bloc requete -->
	<fieldset id="bloc_requete">
		<legend id="legend_other_page"><h4>STAPA Administrateur</h4></legend>

		<label for="action_type"><h5>Merci de saisir les informations de l'utilisateur/gestionnaire</h5></label>
		
		<!-- le .php est le lien avec le fichier php -->
		<form id="form1" action="code_admin_modif.php" method="post" name="rechercher">
        
			<p>
				<div class="row">
			        <div class="col s12">
			    	    <div class="row">
				     	    <div class="input-field col s6">
					            <i class="material-icons prefix">account_circle</i>
					            <input id="nom_user" type="text" name="nom" class="validate"
                                   value="<?php
                                   if (!empty($_SESSION['data_to_modify'])) {
                                       echo $_SESSION['data_to_modify'][0];
                                   } else {
                                       echo '';
                                   }
                                   ?>">
					            <label class="active" id="label_form" for="nom_user">Nom de l'utilisateur/gestionnaire</label>
					  	    </div>
                            <div class="input-field col s6">
                                <input id="prenom_user" type="text" name="prenom" class="validate"
                                       value="<?php
                                       if (!empty($_SESSION['data_to_modify'])) {
                                           echo $_SESSION['data_to_modify'][1];
                                       } else {
                                           echo '';
                                       }
                                       ?>">
                                <label class="active" id="label_form"for="prenom_user">Prénom</label>
                            </div>
                        </div>
					</div>
                </div>
			       	<div class="row">
				        <div class="input-field col s12">
				          	<input id="login_user" type="text" name="login" class="validate"
                                   value="<?php
                                   if (!empty($_SESSION['data_to_modify'])) {
                                       echo $_SESSION['data_to_modify'][2];
                                   } else {
                                       echo '';
                                   }
                                   ?>">
				          	<label class="active" id="label_form" for="login">Login</label>
				        </div>
				    </div>
				   	
				    <div class="row">
				        <div class="input-field col s12">
				          	<input id="password_user" type="text" name="password" class="validate"
                                   value="<?php
                                   if (!empty($_SESSION['data_to_modify'])) {
                                       echo $_SESSION['data_to_modify'][3];
                                   } else {
                                       echo '';
                                   }
                                   ?>">
                            <label class="active" for="password_user">Password</label>
				        </div>
				    </div>

                    </div>
			       	<div class="row">
				        <div class="input-field col s12">
				          	<input id="privilege_user" type="text" name="privilege" class="validate"
                                   value="<?php
                                   if (!empty($_SESSION['data_to_modify'])) {
                                       echo $_SESSION['data_to_modify'][4];
                                   } else {
                                       echo '';
                                   }
                                   ?>">
				          	<label class="active" id="label_form" for="privilege_user">Privilege</label>
				        </div>
				    </div>
					<div class="row">
				        <div class="input-field col s12">
				          	<input id="id_user" type="text" name="id" class="validate"
                                   value="<?php
                                   if (!empty($_SESSION['data_to_modify'])) {
                                       echo $_SESSION['data_to_modify'][5];
                                   } else {
                                       echo '';
                                   }
                                   ?>">
				          	<label class="active" id="label_form" for="id_user">Id</label>
				        </div>
				    </div>
			    <!--</form>-->
			</p>
			
			<p>
            <button class="btn waves-effect waves-light tooltipped" type="submit"
                                name="enregistrer" data-position="top" data-delay="50" data-tooltip="valider votre modif">
                                Enregistrer les modifications
            </button>
			</p>
			
		</form>	
        <p> <!-- il faudra revenir au user menu --> 
			<button type="button" class="btn btn-primary" ONCLICK="window.location.href='http://localhost/stapa3php/projet2/pages/page2.php'">Revenir à la page précédente</button>
		</p>
	</fieldset>

</body>
</html>