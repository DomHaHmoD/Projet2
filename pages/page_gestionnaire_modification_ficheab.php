<?php
session_start();

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

	<!-- bloc titre commun à toutes les pages -->
	<?php include("bloc_titre_other.php"); ?>
	<!-- bloc titre -->
	<!--<nav id="row_bloc_titre">
    	<div class="nav-wrapper teal lighten">
    		<div id="titre_left">
      			
	      		<ul id="nav-mobile" class="left show-on-large">
	        		<li><a href="pages/page_gestion.html">Admin</a></li>
	        		<li><a href="badges.html">Gestion</a></li>
	        		<li><a href="collapsible.html">User</a></li>
	        		
	      		</ul>
	      		<a href="#" class="brand-logo center">STAPA3 Bus</a>
	      		<ul id="nav-mobile" class="right show-on-large">
	        		<li><a href="../index.html"><i class="material-icons btn-right">exit_to_app</i></li>
	      		</ul>
	      		</a>
      		</div>
    	</div>
  	</nav>-->

    <!-- bloc requete -->
	<fieldset id="bloc_requete">
		<legend id="legend_other_page"><h4>STAPA | Gestionnaire</h4></legend>

		<label for="action_type"><h5>Merci de saisir les informations de l'abonné</h5></label>
		
		<!-- le .php est le lien avec le fichier php -->
		<form id="form1" action="code_gest_modif.php" method="post" name="rechercher">
			<p>
				<div class="row">
			    <div class="col s12">
				     <div class="row">
				     	<div class="input-field col s6">
					        <i class="material-icons prefix">account_circle</i>
					        <input id="nom" type="text" name="nom" placeholder="Nom de l'abonné" class="validate"
                                   value="<?php
                                    if (!empty($_SESSION['data_to_modify'])) {
                                    echo $_SESSION['data_to_modify'][0];
                                    } else {
                                        echo '';
                                    }
                            ?>">

					        <label for="nom"></label>
					  	</div>
				        <div class="input-field col s6">
				          <input id="prenom" type="text" name="prenom" placeholder="Prénom de l'abonné" class="validate"
                                 value="<?php
                                 if (!empty($_SESSION['data_to_modify'])) {
                                     echo $_SESSION['data_to_modify'][1];
                                 } else {
                                     echo '';
                                 }
                                 ?>">
				          <label for="prenom"></label>
				        </div>
				    </div>
			       	<div class="input-field col s6">
			          	<i class="material-icons prefix">Date de naissance</i>
			          	<input id="naissance" type="text" name="date" placeholder="" class="validate"
                               value="<?php
                            if (!empty($_SESSION['data_to_modify'])) {
                                echo $_SESSION['data_to_modify'][2];
                            } else {
                                echo '';
                                }
                            ?>">
			          	<label for="naissance"></label>
			        </div>
				    <div class="row">
				    	<div class="input-field col s12">
				        	<i class="material-icons prefix">email</i>
				          	<input id="email" type="text" name="email" placeholder="Email" class="validate"
                                   value="<?php
                                   if (!empty($_SESSION['data_to_modify'])) {
                                       echo $_SESSION['data_to_modify'][3];
                                   } else {
                                       echo '';
                                   }
                                   ?>">
				          	<label for="email"></label>
				        </div>
				     </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">id</i>
                            <input id="id_personne" type="text" name="id" placeholder="Id" class="validate" value="<?php
                            if (!empty($_SESSION['data_to_modify'])) {
                                echo $_SESSION['data_to_modify'][4];
                            } else {
                                echo '';
                            }
                            ?>">
                            <label for="id"></label>
                        </div>
                    </div>
			    </div>
			  </div>
			</p>
			
			<p>
				<button class="btn waves-effect waves-light" ONCLICK="window.location.href='http://localhost/stapa3php/projet2/pages/code_gest_modif.php'"
                    type="submit" name="enregistrer">Enregistrer

  				</button>
			</p>
        </form>
	</fieldset>

</body>
</html>