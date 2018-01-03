<?php

/*if ((isset($_POST['email']))&(isset($_POST['password']))) {
	$value_email = $_POST['email'];
	$value_email_cookie = $_COOKIE['email'] = $_POST['email'];
	$value_password = $_POST['password'];
	$value_password_cookie = $_COOKIE['password'] = $_POST['password'];
	//$value_qualification = $_COOKIE['qualification'];

	//setcookie('qualification', $value_qualification, time() + 3600, null, null, false, true); // On écrit un cookie

	echo '$_POST["email"] existe';
	echo '<br />';
}
else {
	$value_email = $_COOKIE['email'];
	$value_email_cookie = $_COOKIE['email'];
	$value_password = $_COOKIE['password'];
	$value_password_cookie = $_COOKIE['password'];
	//$value_qualification = $_COOKIE['qualification'];
	echo '$_POST["email"] existe pas';
	echo '<br />';

	setcookie('email', $value_email, time() + 3600, null, null, false, true);
	setcookie('password', $value_password, time() + 3600, null, null, false, true);
	//setcookie('qualification', $value_qualification, time() + 3600, null, null, false, true); // On écrit un cookie
}

//$value_email = $_POST['email'];
//$value_email_cookie = $_COOKIE['email'];
echo $value_email;
echo '<br />';
echo $value_password;
echo '<br />';
echo $value_email_cookie;
echo '<br />';
echo $value_password_cookie;
echo '<br />';
//echo $value_qualification;
echo '<br />';

setcookie('email', $value_email_cookie, time() + 3600, null, null, false, true);
setcookie('password', $value_password_cookie, time() + 3600, null, null, false, true);
//setcookie('qualification', $value_qualification, time() + 3600, null, null, false, true); // On écrit un cookie*/

if ((isset($_POST['email']))&(isset($_POST['password']))) {
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['password'] = $_POST['password'];
	$_SESSION['qualification'] = $_SESSION['qualification'];
} else {
	$_SESSION['email'] = $_SESSION['email'];
	$_SESSION['password'] = $_SESSION['password'];
	$_SESSION['qualification'] = $_SESSION['qualification'];

}


/*echo $_SESSION['email'];
echo '<br />';
echo $_SESSION['password'];
echo '<br />';
echo $_SESSION['qualification'];
echo '<br />';*/


?>