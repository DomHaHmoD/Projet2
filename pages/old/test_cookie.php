<?php
	echo "je passe dans le test";

		// on teste la déclaration de notre cookie
	if (isset($_COOKIE['pseudo'])) {
		echo "ouais c bon";
		$monfichier = fopen('../data/compteur.txt', 'a+');
		fputs($monfichier, $_COOKIE['pseudo']);
		fclose($monfichier);
	} 
	else {
		echo 'Notre cookie n\'est pas déclaré.';
		require('../index.php');
	}
	
?>