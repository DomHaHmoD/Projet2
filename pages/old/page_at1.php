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
	
	<link href="../css/stapa2-template-style.css" rel="stylesheet" type="text/css">
	<link href="../images/bus.jpg" rel="shortcut icon" type="image/jpg">
	<!-- add bibliotheque Materialize -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
	<!-- bloc titre -->
	<nav id="row_bloc_titre">
    	<div class="nav-wrapper teal lighten">
    		<div id="titre_left">
      			<!--<a href="#" class="brand-logo center">STAPA2 Bus</a>-->
      		<!--</div>
      		<div id="titre_right">-->
	      		<ul id="nav-mobile" class="left show-on-large">
	        		<li><a href="pages/page_gestion.html">Admin</a></li>
	        		<li><a href="badges.html">Gestion</a></li>
	        		<li><a href="collapsible.html">User</a></li>
	        		<!--<li><a href="localhost/stapa2/index.html"><i class="material-icons">exit_to_app</i></a></li>-->
	      		</ul>
	      		<a href="#" class="brand-logo center">STAPA2 Bus</a>
	      		<ul id="nav-mobile" class="right show-on-large">
	        		<li><a href="../index.html"><i class="material-icons btn-right">exit_to_app</i></li>
	      		</ul>
	      		</a>
      		</div>
    	</div>
  	</nav>

	<fieldset id="bloc_config">
		<legend id="legend_other_page"><h4>STAPA User Configurateur</h4></legend>
		
		<!-- le .php est le lien avec le fichier php -->
		<form action="Immo2000.php" method="post">

			<div class="dropdown">
			    <input id="checkbox_toggle" type="checkbox" />
			    <label for="checkbox_toggle">Click to Expand</label>
				    <ul>
				      <li><a href="http://localhost/stapa/pages/page_resultat.html">choix 1</a> </li>
				      <li><a href="#">Link Two</a></li>
				      <li><a href="#">Link Three</a></li>
				      <li><a href="#">Link Four</a></li>
				    </ul>
			</div>

				<br />
			<p>
				<button type="button" class="btn btn-primary" ONCLICK="window.location.href='http://localhost/stapa/index.html'">Revenir à la page d'accueil</button>
			</p>
		</form>	
	</fieldset>

</body>
</html>

