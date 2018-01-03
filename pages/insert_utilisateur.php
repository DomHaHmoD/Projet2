<?php

// ouverture de la bd
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=stapa;charset=utf8', 'Administrateur', 'Administrateur');
		}
		catch (Exception $e)
		{
		        die('Erreur : ' . $e->getMessage());
		}

// écriture

		$bdd = "INSERT INTO utilisateur(`id_utilisateur`,`nom_utilisateur`,`prenom_utilisateur`,`login`,`password_utilisateur`,`id_type_utilisateur`) VALUES (2, \'HA-THI\', \'dominique2\', \'dominique.hathi@gmail.fr\', \'b\', 2)";

		echo 'operateur a bien été ajouté !';

		//$req->closeCursor();

?>
