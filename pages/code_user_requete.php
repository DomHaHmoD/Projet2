<?php 

		/* ouverture de la bd */
		try
		{
			$bdd = new PDO('mysql:host=' .DB_HOST. ';dbname=' .DB_NAME. ';charset=utf8', $_SESSION["email"], $_SESSION["password"]);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); /* add for exception */
		}
		catch (Exception $e)
		{
		        die('Erreur : ' . $e->getMessage());
		}

		/* teste si c'est une requete avec un input */
		if (empty($_POST['requete_input'])) {
			$nbreq = $_POST['requete'];
			$req = $bdd->query("SELECT requetesql FROM requete WHERE numero = ".$nbreq.";");
			$nomreq = $bdd->query("SELECT nom FROM requete WHERE numero = ".$nbreq.";");

		} else {
			//$requete_name_minor = substr($_POST['requete7_name_minor'], 1);
			$requete_input = $_POST['requete_input'];
			$nbreq = $_POST['requete'];
			$req = $bdd->query("SELECT requetesql FROM requete WHERE numero = ".$nbreq.";");
			$nomreq = $bdd->query("SELECT nom FROM requete WHERE numero = ".$nbreq.";");
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

		/* prepare the data */
        // ligne ajoutée pour la pagination
        $dataParPage=5; //Nous allons afficher 5 messages par page.

		if (empty($_POST['requete_input'])) {
            $requete = $req->fetchAll(PDO::FETCH_ASSOC);
			$nom_requete = $nomreq->fetchAll(PDO::FETCH_ASSOC);
            // ligne ajoutée pour la pagination
            $donnees_total = $requete;
			$total = count($requete[0]);
		} else {
			$requete = $req->fetchAll(PDO::FETCH_ASSOC);
			foreach ($requete[0] as $key => $value1) {
				$reponse2 = $bdd->query($value1);
				$requete = str_replace('$requete_input', $requete_input, $value1);
				$requete = array('0' => Array('requetesql' => $requete));
                // ligne ajoutée pour la pagination
                $donnees_total = $requete;
                $total = count($requete[0]);
				}
			$nom_requete = $nomreq->fetchAll(PDO::FETCH_ASSOC);
		}
            /*print_r($req);
            echo '<br/>';
            print_r($donnees_total);
            echo '<br/>';
            echo $total;
            echo '<br/>';
            print_r($requete);*/



        // ligne ajoutée pour la pagination
        // compter le nombre de pages.
        $nombreDePages=ceil($total/$dataParPage);

        // ligne ajoutée pour la pagination
        if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
        {
            $pageActuelle=intval($_GET['page']);
            // Si la valeur de $pageActuelle (le numéro de la page) est plus grande que $nombreDePages...
            if($pageActuelle>$nombreDePages)
            {
                $pageActuelle=$nombreDePages;
            }
        }
        else
        {
            $pageActuelle=1; // La page actuelle est la n°1
        }

        $premiereEntree=($pageActuelle-1)*$dataParPage; // On calcul la première entrée à lire
        $donnees_total = substr($donnees_total[0]['requetesql'], 0,-1);
        $donnees_total = $donnees_total.' LIMIT '.$premiereEntree.', '.$dataParPage;
        $donnees_total = array('0' => array('requetesql' => $donnees_total));

        //$requete = $donnees_total->fetchAll(PDO::FETCH_ASSOC);
        $requete = $req->fetchAll(PDO::FETCH_ASSOC);

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

		/* affichage du head du tableau */

			echo '<table class="striped pagination">';
	    	echo '<thead>';
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
            echo '</table>';

            // ligne ajoutée pour la pagination
            echo '<p align="center">Page : '; //Pour l'affichage, on centre la liste des pages
            for($i=1; $i<=$nombreDePages; $i++) //On fait notre boucle
            {
                //On va faire notre condition
                if($i==$pageActuelle) //Si il s'agit de la page actuelle...
                {
                    echo ' [ '.$i.' ] ';
                }
                else //Sinon...
                {
                    echo ' <a href="page='.$i.'">'.$i.'</a> ';
                }
            }
            echo '</p>';
                // matérialize
            echo '<ul class="pagination">
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                <li class="active"><a href="#!">$i</a></li>
                <li class="waves-effect"><a href="#!">2</a></li>
                <li class="waves-effect"><a href="#!">3</a></li>
                <li class="waves-effect"><a href="#!">4</a></li>
                <li class="waves-effect"><a href="#!">5</a></li>
                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
              </ul>';
			$reponse->closeCursor();


		?>