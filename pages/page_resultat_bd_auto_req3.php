<?php 
// appel config.inc.php
session_start();
require('../config.inc.php');
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
	<nav id="row_bloc_titre">
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
	      			<!--<li><a><?php /*echo htmlspecialchars($_COOKIE['email']);*/ ?></a></li>
	      			<li><a>dominique.hathi@gmail.fr</a></li>-->
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
		 Les usagers ayant des abonnements en cours de validité</p>
		

		<!-- le tableau de résultat sera ici -->

		<?php 

		// ouverture de la bd
		try
		{
			$bdd = new PDO('mysql:host=' .DB_HOST. ';dbname=' .DB_NAME. ';charset=utf8', $_SESSION['email'], $_SESSION['password']);
			
		}
		catch (Exception $e)
		{
		        die('Erreur : ' . $e->getMessage());
		}

		// envoie de la requete et elle est placée ds $reponse
		$reponse = $bdd->query("/*Afficher la liste des selections suivantes*/ SELECT   personnes.id_personne    AS 'USAGER N°' ,personnes.prenom      AS 'PRENOM' ,personnes.nom      AS 'NOM' ,date_format(personnes.naissance ,'%d/%m/%Y') AS 'DATE DE NAISSANCE' ,concat( num_rue    ,'   ',    rue     ,'   ',    ifnull(residence, ''),    ifnull(batiment,  ''))   AS 'ADRESSE' ,nom_commune      AS 'VILLE' ,code_post       AS 'CODE POSTAL' 
 
			FROM carte_abonnement 
			 INNER JOIN personnes ON carte_abonnement.id_personne = personnes.id_personne  INNER JOIN habite ON personnes.id_personne = habite.id_personne      INNER JOIN adresse ON habite.id_adresse = adresse.id_adresse     INNER JOIN ville_cp ON adresse.id_ville = ville_cp.id_ville  LEFT JOIN resilie ON carte_abonnement.id_abonnement = resilie.id_abonnement          /*CONDITIONS POUR NE PRENDRE EN COMPTE QUE DES PERSONNES AVEC DES ABONNEMENTS QUI N'ONT PAS EXPIRE ET NON RESILIE */         WHERE carte_abonnement.date_fin_validite > now()    AND resilie.date_resiliation is null 
			 
			group by personnes.id_personne 
			 
			ORDER BY personnes.id_personne;");

			/*echo '<pre>';
			print_r($reponse->fetchAll(PDO::FETCH_ASSOC));
			die();*/
			// boucle commune pour affichage (commun à toute les requêtes)
			$line = $reponse->fetchAll(PDO::FETCH_ASSOC);

			echo '<table class="striped">
	    		<thead>';

	        	foreach ($line[0] as $key => $value) {
	        		echo '<th>'.$key.'</th>';
	        	}

		    echo '</thead>';
		       
	    	echo '<tbody>';
	    		foreach ($line as $key => $valArray) {
	    			echo '<tr>';
	    			foreach ($valArray as $key => $value) {
			            echo '<td>'.$value.'</td>';			       
	    			}
		          	echo '</tr>';
				}
			echo'</tbody>';
			

			$reponse->closeCursor();

			?>
		<p> <!-- il faudra revenir au user menu --> 
			<button type="button" class="btn btn-primary" ONCLICK="window.location.href='http://localhost/stapa3php/projet2/pages/page2.php'">Revenir à la page requête</button>
		</p>
	</fieldset>

</body>
</html>

