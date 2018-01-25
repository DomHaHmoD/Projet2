<!--*****************************************************************************************************
	*			      						"BLOC" du BODY COMMUN à tous les utilisateurs				*
	*						      bloc appelé dans page2                                                           			*
	*				                                                                         			*
	* 		Author = Equipe projet 2																	*
	* 		Version = 1.0																	            *
	* 		Date = 26/01/2018													        				*
	*****************************************************************************************************
-->

<?php 
// appel config.inc.php transfert le 21/01 à page2.php
require('../config.inc.php');
// si le login et password exist
if ((isset($_SESSION['email']))&(isset($_SESSION['password']))) {
	$email_averifier = $_SESSION['email'];
	$password_averifier = $_SESSION['password'];
	//echo $email_averifier;
	//echo $password_averifier;

	// connexion bd
	try
		{
			$bdd = new PDO('mysql:host=' .DB_HOST. ';dbname=' .DB_NAME. ';charset=utf8', DB_USER, DB_PASS);
		}
		catch (Exception $e)
		{
		        die('Erreur : ' . $e->getMessage());
		}
	// query sql pour la tables des utilisateurs
	$reponse = $bdd->query("/*chercher les utilisateurs*/ SELECT   utilisateur.login      AS 'LOGIN' ,utilisateur.password_utilisateur      AS 'PASSWORD',utilisateur.id_type_utilisateur	AS 'QUALIFICATION'
 
			/*venant de la table type_utilisateur: */ FROM  utilisateur      /*jointe avec les tables suivantes*/  INNER JOIN type_utilisateur ON utilisateur.id_type_utilisateur = type_utilisateur.id_type_utilisateur
		;");
	$global = $reponse->fetchAll(PDO::FETCH_ASSOC);
	$nbarray = count($global);
	/*var_dump($global);
	echo '-----';
	echo '<br/>';*/
	//echo $nbarray;

	foreach ($global as $key => $value) {
		/*$array_true = array_search($email_averifier, $value);
		echo 'var_dump($value)';
		var_dump($value);
		echo '-----';
		echo 'var_dump($array_true)';
		var_dump($array_true);
		echo '-----';
		echo '<br/>';
		echo 'var_dump($email_averifier)';
		var_dump($email_averifier);
		echo '-----';
		echo '<br/>';*/

		if (array_search($email_averifier, $value) != 'LOGIN')
			{
				//echo"<script>alert('mail incorrect');</script>";
				//require('session_destroy.php');
				//echo"<script>document.location.replace('../index.php')</script>";

				
			} else 
			{
				if ($password_averifier != $value['PASSWORD']) 
					{
						//echo 'pass ko';
						//break;
					} else 
						{
							$recuptoto = $value;
							//$qualification = $value['QUALIFICATION'];
							//$value_qualification = $value['QUALIFICATION'];
							break;
						}
			}
	}
 		
	//print_r($recuptoto);
	
	
	if (isset($recuptoto)) {
		if ($password_averifier == $recuptoto['PASSWORD']) {
			//echo 'mail et mdp ok';
			$qualification = $value['QUALIFICATION'];
			$value_qualification = $value['QUALIFICATION'];
		} else {
			//echo 'mail ou pss ko';
			echo"<script>alert('identifiant ou mot de passe incorrect');</script>";
			require('session_destroy.php');
			echo"<script>document.location.replace('../index.php')</script>";
			//exit;
		}
			
	} else {
		//echo 'mail ou pss ko';
		echo"<script>alert('identifiant ou mot de passe incorrect');</script>";
		require('session_destroy.php');
		echo"<script>document.location.replace('../index.php')</script>";
		//exit;
	}

	
}

	// connexion bd
	

// en fonction de la qualification > différent menu
//echo $qualification;
switch ($qualification) {
	case '2':
		$_SESSION['qualification'] = $qualification;
		//var_dump($_SESSION['qualification']);
		//echo $_SESSION['qualification'];
		include('page_gestionnaire_abonnes.php');
		break;
	case '3':
		$_SESSION['qualification'] = $qualification;
		//var_dump($_SESSION['qualification']);
		//echo $_SESSION['qualification'];
		include('page_adminold.php');
		break;
	case '1':
		$_SESSION['qualification'] = $qualification;
		//var_dump($_SESSION['qualification']);
		//echo $_SESSION['qualification'];
		include('bloc_body_userrequete.php');
		break;
	default:
		echo 'attention';
		break;
	}


?>

