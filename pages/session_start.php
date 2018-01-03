<?php
session_start(); // On démarre la session AVANT toute chose

// On écrit un cookie
// true pour valider httpOnly

/*$value_email = $_COOKIE['email'] = '';
$value_email_cookie = $_COOKIE['email'] ='';
$value_password = $_COOKIE['password'] ='';
$value_password_cookie = $_COOKIE['password']= '';
$value_qualification = $_COOKIE['qualification'] = '';

setcookie('email', $value_email, time() + 3600, null, null, false, true);
setcookie('email_cookie', $value_email_cookie, time() + 3600, null, null, false, true);
setcookie('password', $value_password, time() + 3600, null, null, false, true);
setcookie('password_cookie', $value_password_cookie, time() + 3600, null, null, false, true);  
setcookie('qualification', $value_qualification, time() + 3600, null, null, false, true);*/

$_SESSION['email'] = '';
$_SESSION['password'] ='';
$_SESSION['qualification'] = '';

/*setcookie('email', $value_email, time() + 3600, null, null, false, true);
setcookie('email_cookie', $value_email_cookie, time() + 3600, null, null, false, true);
setcookie('password', $value_password, time() + 3600, null, null, false, true);
setcookie('password_cookie', $value_password_cookie, time() + 3600, null, null, false, true);  
setcookie('qualification', $value_qualification, time() + 3600, null, null, false, true); */
?>
