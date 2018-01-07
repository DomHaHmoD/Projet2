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

		
		// table requete, search one of the 8 requets
		if (isset($_POST['requete1'])) {
			$nbreq = $_POST['requete1'];
			$req = $bdd->query("SELECT requetesql FROM requete WHERE numero = ".$nbreq.";");
			$nomreq = $bdd->query("SELECT nom FROM requete WHERE numero = ".$nbreq.";");
			} else if (isset($_POST['requete2'])) {
				$nbreq = $_POST['requete2'];
				$req = $bdd->query("SELECT requetesql FROM requete WHERE numero = ".$nbreq.";");
				$nomreq = $bdd->query("SELECT nom FROM requete WHERE numero = ".$nbreq.";");
				} else if (isset($_POST['requete3'])) {
					$nbreq = $_POST['requete3'];
					$req = $bdd->query("SELECT requetesql FROM requete WHERE numero = ".$nbreq.";");
					$nomreq = $bdd->query("SELECT nom FROM requete WHERE numero = ".$nbreq.";");
					} else if (isset($_POST['requete4'])) {
						$nbreq = $_POST['requete4'];
						$req = $bdd->query("SELECT requetesql FROM requete WHERE numero = ".$nbreq.";");
						$nomreq = $bdd->query("SELECT nom FROM requete WHERE numero = ".$nbreq.";");
						} else if (isset($_POST['requete5'])) {
							$nbreq = $_POST['requete5'];
							$req = $bdd->query("SELECT requetesql FROM requete WHERE numero = ".$nbreq.";");
							$nomreq = $bdd->query("SELECT nom FROM requete WHERE numero = ".$nbreq.";");
							} else if (isset($_POST['requete6'])) {
								$nbreq = $_POST['requete6'];
								$req = $bdd->query("SELECT requetesql FROM requete WHERE numero = ".$nbreq.";");
								$nomreq = $bdd->query("SELECT nom FROM requete WHERE numero = ".$nbreq.";");
								} else if (isset($_POST['requete7'])) {
									$nbreq = $_POST['requete7'];
									$req = $bdd->query("SELECT requetesql FROM requete WHERE numero = ".$nbreq.";");
									$nomreq = $bdd->query("SELECT nom FROM requete WHERE numero = ".$nbreq.";");
									} else if (isset($_POST['requete8'])) {
										$nbreq = $_POST['requete8'];
										$req = $bdd->query("SELECT requetesql FROM requete WHERE numero = ".$nbreq.";");
										$nomreq = $bdd->query("SELECT nom FROM requete WHERE numero = ".$nbreq.";");
										}
		
		// prepare the data
		$requete = $req->fetchAll(PDO::FETCH_ASSOC);
		$nom_requete = $nomreq->fetchAll(PDO::FETCH_ASSOC);

		// display the title (one of 8 request)
		foreach ($nom_requete[0] as $key => $value) {
			$nom_requetetitre = $value;
		}
		echo '<p>voici le résultat pour : ' .$nom_requetetitre.'</p>';

		
		foreach ($requete[0] as $key => $value) {

		}

		// la vrai requete 
		$reponse = $bdd->query($value);
		$line = $reponse->fetchAll(PDO::FETCH_ASSOC);

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