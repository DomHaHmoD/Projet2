<?php 
session_start();
//require('cookie_modify.php');

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
		<form id="form1" action="code_gest_modif.php" method="post">
			<p>
				<div class="row">
			    <form class="col s12">
				     <div class="row">
				     	<div class="input-field col s6">
					        <i class="material-icons prefix">account_circle</i>
					        <input id="nom" type="text" placeholder="Nom de l'abonné" class="validate">
					        <label for="nom"></label>
					  	</div>
				        <div class="input-field col s6">
				          <input id="prenom" type="text" placeholder="Prénom de l'abonné" class="validate">
				          <label for="prenom"></label>
				        </div>
				    </div>
			       	<div class="input-field col s6">
			          	<i class="material-icons prefix">Date de naissance</i>
			          	<input id="naissance" type="date" placeholder="" class="validate">
			          	<label for="naissance"></label>
			        </div>
				    <div class="row">
				    	<div class="input-field col s12">
				        	<i class="material-icons prefix">email</i>
				          	<input id="email" type="email" placeholder="Courrier éléctronique" class="validate">
				          	<label for="email">Courrier éléctronique</label>
				        </div>
				     </div>
			    </form>
			  </div>
			</p>
			
			<p>
				<button class="btn waves-effect waves-light" type="submit" name="action">Enregistrer
    			
  				</button>
			</p>
			
		</form>	
	</fieldset>

</body>
</html>