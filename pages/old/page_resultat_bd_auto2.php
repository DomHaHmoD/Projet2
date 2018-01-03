
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
		 Le nombre d’usagers mineurs ayant un abonnement en cours de validité</p>
		

		<!-- le tableau de résultat sera ici -->

		<?php 
		
		// ouverture de la bd
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=stapa;charset=utf8', 'user', 'user');
		}
		catch (Exception $e)
		{
		        die('Erreur : ' . $e->getMessage());
		}

		// envoie de la requete et elle est placée ds $reponse
		$reponse = $bdd->query('select  year(now())       AS "POUR L ANNEE" ,count(distinct carte_abonnement.id_personne)  AS "MINEURS AVEC ABO VALIDE" 
		from carte_abonnement inner join personnes on carte_abonnement.id_personne = personnes.id_personne left join resilie on carte_abonnement.id_abonnement = resilie.id_abonnement 
		where personnes.naissance > (now() - interval 18 year)  and carte_abonnement.date_fin_validite > now()  and date_resiliation is null;');

		// on tronçonne $reponse par ligne 
		/*while($donnees = $reponse->fetch())
		{
			echo '<table class="striped">
        		<thead>
		          	<tr>
			            <th>'.$donnees['POUR L ANNEE'].'</th>
			            
		          	</tr>
        		</thead>';
        		echo '<tbody>
		          	<tr>
			            <td>'.$donnees['MINEURS AVEC ABO VALIDE'].'</td>
			            
			      	</tr>
			    </tbody>';
		}*/

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
			<button type="button" class="btn btn-primary" ONCLICK="window.location.href='http://localhost/stapa3php/index.html'">Revenir à la page d'accueil</button>
		</p>
	</fieldset>

</body>
</html>

