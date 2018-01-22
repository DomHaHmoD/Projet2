<?php
session_start(); // On démarre la session AVANT toute chose

$_SESSION['email'] = '';
$_SESSION['password'] ='';
$_SESSION['qualification'] = '';
$_SESSION['data_to_modify'] = [];
$_SESSION['page'] = 1;
$_SESSION['requete'] = '';

/*echo '$_SESSION["page"]'.$_SESSION['page'];
echo '---------';
echo '<br/>';
echo '$_SESSION[\'email\']'.$_SESSION['email'];
echo '---------';
echo '<br/>';
echo '$_SESSION[\'password\']'.$_SESSION['password'];
echo '---------';
echo '<br/>';
echo '$_SESSION[\'qualification\']'.$_SESSION['qualification'];
echo '---------';
echo '<br/>';
echo '$_SESSION["data_to_modify"]';
print_r($_SESSION['data_to_modify']);
echo '---------';
echo '<br/>';
echo '$_POST[\'requete\']'.$_POST['requete'];+
echo '---------';
echo '<br/>';
echo '$_SESSION["requete"]'.$_SESSION['requete'];
echo '---------';
echo '<br/>';*/
?>
