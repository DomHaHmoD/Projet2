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
	<nav id="row_bloc_titre">
    	<div class="nav-wrapper teal lighten">
    		<div id="titre_left">
      			
	      		<ul id="nav-mobile" class="left show-on-large">
	        		<li><a href="http://localhost/stapa3/projet2/pages/page_admin.html">Administration</a></li>
	        		<li><a href="http://localhost/stapa3/projet2/pages/page_gestion.html">Supervision</a></li>
	        		<li><a href="http://localhost/stapa3/projet2/pages/page2.html">Opération de saisie</a></li>
	        		<!--<li><a href="localhost/stapa2/index.html"><i class="material-icons">exit_to_app</i></a></li>-->
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
		 Les propriétés des usagers</p>
		

		<!-- le tableau de résultat sera ici -->

		<?php 
		
		// ouverture de la bd
		try
		{
			$bdd = new PDO('mysql:host=' .DB_HOST. ';dbname=' .DB_NAME. ';charset=utf8', $_SESSION["email"], $_SESSION["password"]);
		}
		catch (Exception $e)
		{
		        die('Erreur : ' . $e->getMessage());
		}

		// envoie de la requete et elle est placée ds $reponse
		$reponse = $bdd->query("/*Afficher la liste des selections suivantes*/ SELECT   personnes.prenom      AS 'PRENOM' ,personnes.nom      AS 'NOM' ,date_format(personnes.naissance ,'%d/%m/%Y') AS 'DATE DE NAISSANCE'   /* fonction 'date_format()' utilisée pour changer la forme de la date en jj/mm/aaa */ ,concat( adresse.num_rue    ,' ',        /* fonction 'concat()' utilisée pour rassembler differentes données dans une seule colonne */    adresse.rue     ,'   ',    ifnull(adresse.residence, ''),         /* fonction 'ifnull()' utilisée pour remplacer les valeurs 'null' par la valeur souhaitée */    ifnull(adresse.batiment,  '')     )          AS 'ADRESSE' ,ville_cp.nom_commune    AS 'VILLE' ,ville_cp.code_post     AS 'CODE POSTAL' ,telephone.num_telephone    AS 'NUMERO DE TELEPHONE' ,type_telephone.denom_typ_tel   AS 'TYPE DE TELEPHONE' 
 
			/*venant de la table personnes: */ FROM  personnes      /*jointe avec les tables suivantes*/  INNER JOIN joindre ON personnes.id_personne = joindre.id_personne  INNER JOIN telephone ON joindre.id_tel = telephone.id_tel  INNER JOIN type_telephone ON telephone.id_type_tel = type_telephone.id_type_tel  INNER JOIN habite ON personnes.id_personne = habite.id_personne  INNER JOIN adresse ON habite.id_adresse = adresse.id_adresse  INNER JOIN ville_cp ON adresse.id_ville = ville_cp.id_ville       /* DESACTIVER LES BALISES POUR CHERCHER UNE PERSONNE PRECISE */ # where nom =  'Bouzigon' # and prenom = 'Matthieu' 
			 
			/*regroupe les lignes qui ont la même valeur*/ # GROUP BY nom 
			 
			/*Classe le résultat par ordre croissant de la valeur*/ ORDER BY personnes.nom ASC
			;");

			/*echo '<pre>';
			print_r($reponse->fetchAll(PDO::FETCH_ASSOC));
			die();*/

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

