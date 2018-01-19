<?php
//require('../config.inc.php'

$passwordUser = md5($_POST["InputPassword"]);

$password = md5("password_utilisateur");


if ($password === $passwordUser)
    echo "code bon !";
else
    echo "code faux !";



?>