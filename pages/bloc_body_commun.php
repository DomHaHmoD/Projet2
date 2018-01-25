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
		foreach ($global as $key => $value) {
			if (array_search($email_averifier, $value))
			{
				if (array_search($password_averifier, $value))
				{
					$qualification = $value['QUALIFICATION'];
					$value_qualification = $value['QUALIFICATION'];
				} else { // add this execption if password is not correct
                    $_SESSION['email'] = '';
                    $_SESSION['password'] = '';
                    echo"<script>alert('mot de passe incorrect');</script>";
                    require('session_destroy.php');
                    echo"<script>document.location.replace('../index.php')</script>";
                    exit;
                }
			} 

			/*print_r($global);
			print_r($nbarray);
			
			if (array_search($email_averifier, $value) and array_search($password_averifier, $value))
			{
					echo 'je passe ds email trouvé et pass touvé';
					$qualification = $value['QUALIFICATION'];
					$value_qualification = $value['QUALIFICATION'];

				} else { // add this execption if password is not correct
                    $_SESSION['email'] = '';
                    $_SESSION['password'] = '';
                    echo"<script>alert('mot de passe incorrect');</script>";
                    //require('session_destroy.php');
                    echo"<script>document.location.replace('../index.php')</script>";
                    exit;
                }*/
			//} 
		}
}
else {
	/* si le login et password existe pas */
	echo"<script>alert('mot de passe et/ou identifiant incorrect');</script>";
	echo 'Mauvais email ou password ';
	$email_averifier = $_SESSION['email'];
	$password_averifier = $_SESSION['password'];
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
		foreach ($global as $key => $value) {
			if (array_search($email_averifier, $value))
			{
				if (array_search($password_averifier, $value))
				{
					$_SESSION['qualification'] = $value['QUALIFICATION'];
					/*echo '$value["QUALIFICATION"] = '.$value['QUALIFICATION'];
					echo '<br />';
					echo '$_SESSION["QUALIFICATION"] = '.$_SESSION['QUALIFICATION'];
					echo '<br />';*/
				}
			}
		}
}
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

