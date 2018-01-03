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
	<nav id="row_bloc_titre">
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
  	</nav>

	<fieldset id="bloc_config">
		<legend id="legend_other_page"><h4>STAPA User Résultat</h4></legend>

		<p>voici le résultat pour :
		<!-- en suivant nous placerons le nom de la requette en variable -->
		 le nombre d’usagers mineurs ayant un abonnement en cours de validité</p>
		

		<!-- le tableau de résultat sera ici -->
		<table class="striped">
        	<thead>
		          <tr>
		              <th>Name</th>
		              <th>Abonnement</th>
		              <th>Date de fin</th>
		          </tr>
        	</thead>

        	<tbody>
		          <tr>
			            <td>Alvin</td>
			            <td>3 Zones</td>
			            <td>14/12/2018</td>
		          </tr>
		          <tr>
			            <td>Alan</td>
			            <td>1 Zone</td>
			            <td>14/12/2018</td>
		          </tr>
		          <tr>
			            <td>Jonathan</td>
			            <td>5 Zones</td>
			            <td>14/12/2018</td>
		          </tr>
        	</tbody>
      	</table>
			
		<p>
			<button type="button" class="btn btn-primary" ONCLICK="window.location.href='http://localhost/stapa/index.html'">Revenir à la page d'accueil</button>
		</p>
	</fieldset>

</body>
</html>

