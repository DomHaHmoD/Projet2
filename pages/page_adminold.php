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

    <!-- bloc requete -->
	<fieldset id="bloc_requete">
		<legend id="legend_other_page"><h4>STAPA Administrateur</h4></legend>

		<label for="action_type"><h5>Merci de saisir les informations de l'utilisateur/gestionnaire</h5></label>
		
		<!-- le .php est le lien avec le fichier php -->
		<form id="form1" action="Immo2000.php" method="post">
			<p>
				<!--<div class="row">-->
			    <form class="col s12">
			    	<div class="row">
				     	<div class="input-field col s6">
					        <i class="material-icons prefix">account_circle</i>
					        <input id="nom" type="text" class="validate">
					        <label for="nom">Nom de l'utilisateur/gestionnaire</label>
					  	</div>
				        <div class="input-field col s6">
				          <input id="prenom" type="text" class="validate">
				          <label for="prenom">Prénom de l'utilisateur/gestionnaire</label>
				        </div>
					</div>     
			       	<div class="row">
				        <div class="input-field col s12">
				          	<input id="login_client" type="text" class="validate">
				          	<label for="login_client">login</label>
				        </div>
				    </div>
				   	<div class="row">
				        <div class="input-field col s12">
				          <input id="password" type="password" class="validate">
				          <label for="password">Password</label>
				        </div>
				    </div>
				    <div class="row">
				        <div class="input-field col s12">
				          	<input id="email" type="email" class="validate">
				          	<label for="email">Email</label>
				        </div>
				    </div>
			    </form>
			  
			</p>
			
			<p>
				<button class="btn waves-effect waves-light" type="submit" name="action">Valider
    			
  				</button>
			</p>
			
		</form>	
	</fieldset>

</body>
</html>