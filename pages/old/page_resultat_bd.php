
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
	        		<li><a href="http://localhost/stapa3/pages/page_admin.html">Admin</a></li>
	        		<li><a href="http://localhost/stapa3/pages/page_gestion.html">Gestion</a></li>
	        		<li><a href="http://localhost/stapa3/pages/page2.html">User</a></li>
	        		<!--<li><a href="localhost/stapa2/index.html"><i class="material-icons">exit_to_app</i></a></li>-->
	      		</ul>
	      		<a href="#" class="brand-logo center">STAPA3 Bus</a>
	      		<ul id="nav-mobile" class="right show-on-large">	
	      			<!--<li><a><?php echo htmlspecialchars($_POST['email']); ?></a></li>-->
	      			<li><a>dominique.hathi@gmail.fr</a></li>
	        		<li><a href="../index.php"><i class="material-icons btn-right">exit_to_app</i></a></li>
	      		</ul>
	      		</a>
      		</div>
    	</div>
  	</nav>

	<fieldset id="bloc_config">
		<legend id="legend_other_page"><h4>STAPA User Résultat</h4></legend>

		<p>voici le résultat pour :
		<!-- en suivant nous placerons le nom de la requette en variable -->
		 Les propriétés des usagers</p>
		

		<!-- le tableau de résultat sera ici -->

		<?php 
		$filebrut = file_get_contents('../data/personnes.json');
		$filedecode = json_decode($filebrut, true);
		
		echo '<table class="striped">
        		<thead>
		          	<tr>
			            <th>PRENOM</th>
			            <th>NOM</th>
			            <th>DATE DE NAISSANCE</th>
			            <th>ADRESSE</th>
			            <th>VILLE</th>
			            <th>CODE POSTAL</th>
			            <th>NUMERO DE TELEPHONE</th>
			            <th>TYPE DE TELEPHONE</th>
		          	</tr>
        		</thead>';
		foreach ($filedecode as $line => $value) {
		echo '<tbody>
		          	<tr>
			            <td>'.$value["PRENOM"].'</td>
			            <td>'.$value["NOM"].'</td>
			            <td>'.$value["DATE DE NAISSANCE"].'</td>
			            <td>'.$value["ADRESSE"].'</td>
			            <td>'.$value["VILLE"].'</td>
			            <td>'.$value["CODE POSTAL"].'</td>
			            <td>'.$value["NUMERO DE TELEPHONE"].'</td>
			            <td>'.$value["TYPE DE TELEPHONE"].'</td>
			      	</tr>
			    </tbody>';
		}
		?>
		<p> <!-- il faudra revenir au user menu --> 
			<button type="button" class="btn btn-primary" ONCLICK="window.location.href='http://localhost/stapa3php/index.html'">Revenir à la page d'accueil</button>
		</p>
	</fieldset>

</body>
</html>

