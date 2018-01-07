<?php 
// appel config.inc.php
session_start();
require('../config.inc.php');

echo $_SESSION['qualification'];
echo '<br />';

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
	<!-- bloc titre -->
	<!--<nav id="row_bloc_titre">
    	<div class="nav-wrapper teal lighten">
    		<div id="titre_left">
      			
	      		<ul id="nav-mobile" class="left show-on-large">
	        		<li><a href="http://localhost/stapa3/pages/page_admin.php">Administrateur</a></li>
	        		<li><a href="http://localhost/stapa3/pages/page_gestion.php">Gestionnaire</a></li>
	        		<li><a href="http://localhost/stapa3/pages/page_bloc_body_userrequete.php">Utilisateur</a></li>
	      		</ul>
	      		<a href="#" class="brand-logo center">STAPA3 Bus</a>
	      		<ul id="nav-mobile" class="right show-on-large">	
	      			<li><a><?php echo htmlspecialchars($_SESSION['email']); ?></a></li>	
	        		<li><a href="../index.php"><i class="material-icons btn-right">exit_to_app</i></a></li>
	      		</ul>
	      		</a>
      		</div>
    	</div>
  	</nav>-->
  	<?php
  	require('page_bloc_titre_other.php');
  	?>

	<fieldset id="bloc_config">
		<legend id="legend_other_page"><h4>STAPA Utilsateur</h4></legend>

		<!-- le tableau de résultat sera ici -->
		<?php 
		require('code_requete.php');
		?>
		
		<p> <!-- il faudra revenir au user menu --> 
			<button type="button" class="btn btn-primary" ONCLICK="window.location.href='http://localhost/stapa3php/projet2/pages/page2.php'">Revenir à la page requête</button>
		</p>

		
	</fieldset>

</body>
</html>

