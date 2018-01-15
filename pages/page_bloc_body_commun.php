<!-- page : bloc body commun 
	qui contientra les bodies communs de 
	admin, gestion, user
-->
<?php 

// appel config.inc.php
require('../config.inc.php');

// si le login et password exist
if ((isset($_SESSION['email']))&(isset($_SESSION['password']))) {

	/*$email_averifier = $_COOKIE['email'];
	$password_averifier = $_POST['password'];*/
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

	/*echo '<pre>';
	echo 'hello';
	print_r($reponse->fetchAll(PDO::FETCH_ASSOC));
	//print_r(array_values($reponse->fetchAll(PDO::FETCH_ASSOC)));
	die();*/

	$global = $reponse->fetchAll(PDO::FETCH_ASSOC);
	$nbarray = count($global);

		foreach ($global as $key => $value) {
			/*print_r($value);
			echo '<br />';
			echo $key;
			echo '<br />';*/
			if (array_search($email_averifier, $value))
			{
				if (array_search($password_averifier, $value))
				{
					/*echo 'login = '.$value['LOGIN'];
					echo 'password = '.$value['PASSWORD'];
					echo 'qualification = '.$value['QUALIFICATION'];
					echo '<br />';*/
					$qualification = $value['QUALIFICATION'];
					$value_qualification = $value['QUALIFICATION'];
				}
			}
		}
}
else {
	/* si le login et password existe pas */

	echo 'Mauvais email ou password ';
	/*$email_averifier = $_COOKIE['email'];
	$password_averifier = $_COOKIE['password'];*/
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

	/*echo '<pre>';
	echo 'hello';
	print_r($reponse->fetchAll(PDO::FETCH_ASSOC));
	//print_r(array_values($reponse->fetchAll(PDO::FETCH_ASSOC)));
	die();*/

	$global = $reponse->fetchAll(PDO::FETCH_ASSOC);
	$nbarray = count($global);

		foreach ($global as $key => $value) {
			/*print_r($value);
			echo '<br />';
			echo $key;
			echo '<br />';*/
			if (array_search($email_averifier, $value))
			{
				if (array_search($password_averifier, $value))
				{
					/*echo 'login = '.$value['LOGIN'];
					echo 'password = '.$value['PASSWORD'];
					echo 'qualification = '.$value['QUALIFICATION'];
					echo '<br />';*/
					//$qualification = $value['QUALIFICATION'];
					//$value_qualification = $value['QUALIFICATION'];
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
		include('page_supervision.php');
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
		include('page_bloc_body_userrequete.php');
		break;
	default:
		echo 'attention';
		break;
}

?>