<!-- file to push data in the txt file -->
<?php

$arr1 = array ('admin'=>'dominique.hathi@wanadoo.fr',
	'gestion'=>'dominique.hathi@gmail.fr',
	'user'=>'dominique.hathi@gmail.com',
	'user'=>'dominique.hathi@gmail.com',
	'gestion'=>'dominique.hathi@gmail.fr');
// methode serialize
file_put_contents('data/user_qualif1.txt',serialize($arr1));
// methode json
//file_put_contents('data/user_qualif1.txt', json_encode($arr1));

?>