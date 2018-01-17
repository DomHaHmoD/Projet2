<?php 

		// teste si c'est une requete avec un input
		if (isset($_POST['requete']) && $_POST['requete'] === '7') {
			if (!isset($_POST['requete_input'])) {
				
			}
		} else {
			
			}


		// table requete, search one of the 8 requets
		/*if (isset($_POST['requete'])) {
			$nbreq = $_POST['requete'];
			$req = $bdd->query("SELECT requetesql FROM requete WHERE numero = ".$nbreq.";");
			$nomreq = $bdd->query("SELECT nom FROM requete WHERE numero = ".$nbreq.";");
			} else { 
				echo 'ko';
			}*/
		
		//}
		// prepare the data

		/*$requete = $req->fetchAll(PDO::FETCH_ASSOC);
		foreach ($requete[0] as $key => $value) {
			$reponse = $bdd->query($value);
			$requete = str_replace('$requete_input', $requete_input, $value);
		}
		$nom_requete = $nomreq->fetchAll(PDO::FETCH_ASSOC);*/

		if (empty($_POST['requete_input'])) {	
			$requete = $req->fetchAll(PDO::FETCH_ASSOC);
			$nom_requete = $nomreq->fetchAll(PDO::FETCH_ASSOC);
		} else {
			$requete = $req->fetchAll(PDO::FETCH_ASSOC);
			foreach ($requete[0] as $key => $value1) {
				$reponse2 = $bdd->query($value1);
				$requete = str_replace('$requete_input', $requete_input, $value1);
				$requete = array('0' => Array('requetesql' => $requete));
				}
			$nom_requete = $nomreq->fetchAll(PDO::FETCH_ASSOC);

		}

		// verif si la requete est corecte
		/*echo '<pre>';
		print_r($requete);
		echo '</pre>';
		echo "<br/>";
		echo "-------";
		echo '<pre>';
        print_r($nom_requete);
		echo '</pre>';
		echo "<br/>";
		echo "-------";
		die();*/


		// display the title (one of 8 request)
		foreach ($nom_requete[0] as $key => $value) {
			$nom_requetetitre = $value;
		}
		echo '<p>voici le résultat pour : ' .$nom_requetetitre.'</p>';

		foreach ($requete[0] as $key => $value) {
			$reponse = $bdd->query($value);
		}

		// la vrai requete  pour les datas du tableau
		$line = $reponse->fetchAll(PDO::FETCH_ASSOC);

		/*echo '<pre>';
		print_r($reponse);
		echo '</pre>';
		echo "<br/>";
		echo "-------";
		echo '<pre>';
		print_r($line);
		echo '</pre>';
		echo "<br/>";
		echo "-------";
		echo '<pre>';
        echo $nom_requetetitre;
		echo '</pre>';
		echo "<br/>";
		echo "-------";
		die();*/

		//print_r($reponse->fetchAll(PDO::FETCH_ASSOC));
        /*echo '<pre>';
        print_r($line);
        echo '</pre>';
		die();*/

		// affichage du head du tableau
			echo '<table class="striped">
	    		<thead>';

	        	foreach ($line[0] as $key => $value) {
	        		echo '<th>'.$key.'</th>';
	        	}
		    echo '</thead>';

		 // display data of the tableau      
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