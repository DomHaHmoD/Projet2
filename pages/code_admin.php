<!--*****************************************************************************************************
    *                                       "CODE" de l' ADMINISTRATEUR                                 *
    *                            Code administrateur permet de dialoguer avec la BDD                    *
    *                                 et affiche le résultat de la recherche d'un utilisateur           *
    *       Author = Equipe projet 2                                                                    *
    *       Version = 1.0                                                                               *
    *       Date = 26/01/2018                                                                           *
    *****************************************************************************************************
-->

<?php

//require('../config.inc.php');

		// ouverture de la bd
		try
		{
			//$bdd = new PDO('mysql:host=' .DB_HOST. ';dbname=' .DB_NAME. ';charset=utf8', $_SESSION["email"], $_SESSION["password"]);
			$bdd = new PDO('mysql:host=' .DB_HOST. ';dbname=' .DB_NAME. ';charset=utf8', DB_USER, DB_PASS);
		}
		catch (Exception $e)
		{
		        die('Erreur : ' . $e->getMessage());
		}

		
		
		if (isset($_POST['nom_user'])) {
			/*echo 'voila le nom récupéré =';
			echo $recupnom = $_POST['nom_user'];
			echo '<br/>';*/
			$recupnom = $_POST['nom_user'];
        	$recupnom = '"'.$recupnom.'"';
			
			$req = $bdd->query("SELECT utilisateur.nom_utilisateur AS 'NOM AGENT', 
                                                utilisateur.prenom_utilisateur AS 'PRENOM', 
                                                utilisateur.login AS 'LOGIN',
                                                utilisateur.password_utilisateur AS 'PASSWORD',
												utilisateur.id_type_utilisateur AS 'PRIVILEGE',
												utilisateur.id_utilisateur AS 'ID'
                                                FROM utilisateur WHERE nom_utilisateur = ".$recupnom.";");
			/*echo '<pre>';
			print_r($req);
			echo '</pre>';
			echo '<br/>';*/
		} else {
			
			echo"<script>alert('Merci de saisir le nom ou la date de naissance');</script>";
        /*require('session_destroy.php';
        echo"<script>document.location.replace('../index.php')</script>";*/
        /*echo'<div id="modal1" class="modal">
                    <div class="modal-content">
                        <h4>Modal Header</h4>
                        <p>A bunch of text</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
                    </div>
                </div>';*/
        /*require('session_destroy.php');*/
        	echo"<script>document.location.replace('page_admin_recherche.php')</script>";
        exit;
			}
			//die();
			
		
		// prepare the data
		$requete = $req->fetchAll(PDO::FETCH_ASSOC);
		//$nom_requete = $nomreq->fetchAll(PDO::FETCH_ASSOC);

		// test si la réponse est vide > l'utilisateur n'existe pas
    if (empty($requete)) {
        echo"<script>alert('aucun utilisateur existe avec ce nom');</script>";
        echo"<script>document.location.replace('page_admin_recherche.php')</script>";
    }

		//print_r($requete);
		//echo $nom_requete
		//die();
		// display the title (one of 8 request)
		/*foreach ($nom_requete[0] as $key => $value) {
			$nom_requetetitre = $value;
		}
		echo '<p>voici le résultat pour : ' .$nom_requetetitre.'</p>';*/

		
		foreach ($requete[0] as $key => $value) {
			/*echo 'requete[0] =';
			echo '<pre>';
			print_r($requete[0]);
			echo '<pre>';
			echo '<br/>';
			echo '--------------';
			echo '$key =';
			echo '<pre>';
			print_r($key);
			echo '<pre>';
			echo '<br/>';
			echo '--------------';
			echo '$value =';
			echo '<pre>';
			print_r($value);
			echo '<pre>';
			echo '<br/>';
			echo '--------------';*/
			//$reponse = $bdd->query($value);
		}

		// la vrai requete 
		//$reponse = $bdd->query($value);
		//$line = $reponse->fetchAll(PDO::FETCH_ASSOC);

		/*print_r($reponse);
		echo "<br/>";
		echo "-------";
		print_r($reponse->fetchAll(PDO::FETCH_ASSOC));
		print_r($line);
		die();*/

		// affichage du head du tableau
        echo '<form  action="page_admin_resultat.php" method="POST">';
			echo '<table class="striped">
	    		<thead>';

	        	foreach ($requete[0] as $key => $value) {
	        		echo '<th>'.$key.'</th>';
	        	}
		    echo '</thead>';

		 // display data of the tableau      
	    	echo '<tbody>';
	    		foreach ($requete as $key => $valArray) {
	    			echo '<tr>';
	    			foreach ($valArray as $key => $value) {
			            echo '<td>'.$value.'</td>';
                        $array_data[] = $value;
                        $_SESSION['data_to_modify'] = $array_data;
	    			}
                    echo '<td><a class="btn-floating btn-large waves-effect waves-light red" type="submit" onclick="window.location.href=\'http://localhost/stapa3php/projet2/pages/page_admin_modif.php\'"><i class="material-icons">mode_edit</i></a></td>';
                    echo '</tr>';
		          	echo '</tr>';
				}
			echo'</tbody>';
        echo '</form>';
        /*var_dump($array_data);*/
				
			$req->closeCursor();

		?>