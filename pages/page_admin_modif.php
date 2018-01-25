<!--*****************************************************************************************************
    *                                       "PAGE" de ADMIN                                             *
    *                             Page Aministrateur affiche le formulaire de modification              *
    *                                                                                                   *
    *       Author = Equipe projet 2                                                                    *
    *       Version = 1.0                                                                               *
    *       Date = 26/01/2018                                                                           *
    *****************************************************************************************************
-->
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

		<label for="action_type"><h5>Merci de saisir les informations de l'utilisateur/gestionnaire:</h5></label>
		
		<!-- le .php est le lien avec le fichier php -->
		<?php
		if (isset($_POST['enregistrer'])){
		}
		?>
		<form id="form1" action="code_admin_modif.php" method="post" name="rechercher">	
		
		
		<!--<form id="form1" action="code_admin_delete_user.php" method="post" name="rechercher">-->
        


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


							<div class="row">
								<div class="input-field col s6">
                                    <i class="material-icons prefix">account_box</i>
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
							    <div class="input-field col s6">
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

			       	<div class="row">
				        <div class="input-field col s16">
                            <i class="material-icons prefix">vpn_key</i>
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
                        <div class="input-field col s16">
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

			
			<div class="row">
                <div class="col s3">
                <button class="btn waves-effect waves-light tooltipped modal-trigger" type="submit" onclick="window.location.href='http:/localhost/stapa3php/pages/page_admin_modif.php'"  href="#modal1" target="_self"
                        data-target="modal1" name="enregistrer" data-position="top" data-delay="50" data-tooltip="valider votre modif">
                    Enregistrer
                </button>
                </div>
                <div class="col s3">
                    <button class="btn waves-effect waves-light tooltipped" type="submit" onclick="window.location.href='http:/localhost/stapa3php/pages/page2.php'" href="#modal1" target="_parent"
                            name="supprimer" data-position="top" data-delay="50" data-tooltip="valider la suppression">
                        Supprimer
                    </button>
                </div>
                
            </div>
            <div class="row">
                <div class="col s6">
             <!-- il faudra revenir au user menu --> 
			        <button type="button" class="btn btn-primary" ONCLICK="window.location.href='http://localhost/stapa3php/projet2/pages/page2.php'">
                    <i class="material-icons left">keyboard_arrow_left</i>
                    Revenir à la page précédente</button>
                </div>
            </div>

			
		</form>	
        
        
	</fieldset>

<div class="col s3"> <!-- zone d'iformations de droite -->
    <fieldset id="bloc_infos">
        <legend><h5>Informations</h5></legend>
        <form>
            <p>Pour les privilèges, utiliser les codes:
                <br />
                1- utilisateur
                <br />
                2- gestionnaire
                <br />
                3- adminsitrateur
                <br/>
                <br/>

                Vous aurez un bouton "revenir" à la page précédente.
            </p>
            <form>
    </fieldset>
</div>

<!-- modal -->
<div id="modal1" class="modal">
    <div class='modal-content'>
        <h4>Modal Header</h4>
        <p>Vos informations ont bien été enregistrées</p>
    </div>
    <div class='modal-footer'>
        <a href='#!' class='modal-action modal-close waves-effect waves-green btn-flat'>Agree</a>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.tooltipped').tooltip({delay: 50});
    });
    $(document).ready(function(){
        // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
        $(".modal").modal();
    });
</script>
<!-- bloc footer -->
<?php include("bloc_footer.php"); ?>
</body>
</html>