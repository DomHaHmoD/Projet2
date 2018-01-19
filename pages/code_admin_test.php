<?php 
// On commence par récupérer les champs 
if(isset($_POST['nom']))      $nom=$_POST['nom'];
else      $nom="";

if(isset($_POST['prenom']))      $prenom=$_POST['prenom'];
else      $prenom="";

if(isset($_POST['login']))      $login=$_POST['login'];
else      $login="";

if(isset($_POST['password']))      $password=$_POST['password'];
else      $password="";

if(isset($_POST['privilege']))      $privilege=$_POST['privilege'];
else      $privilege="";


// On vérifie si les champs sont vides 
if(empty($nom) OR empty($prenom) OR empty($login) OR empty($password) OR empty($privilege))
    { 
    echo '<font color="red">Attention, seul le champs <b>password</b> peut rester vide !</font>'; 
    } 

// Aucun champ n'est vide, on peut enregistrer dans la table 
else      
    { 
       // connexion à la base
       require('../config.inc.php');

       // ouverture de la bd
       try
       {
           //$bdd = new PDO('mysql:host=' .DB_HOST. ';dbname=' .DB_NAME. ';charset=utf8', $_SESSION["email"], $_SESSION["password"]);
           $bdd = new PDO('mysql:host=' .DB_HOST. ';dbname=' .DB_NAME. ';charset=utf8', DB_USER, DB_PASS);
       }
       catch (Exception $e)
       {
               die('Erreur : ' . $e->getMessage());
       }
// sélection de la base  

    
     
    // on écrit la requête sql 
    $reponse = $bdd->prepare("INSERT INTO utilisateur(nom_utilisateur,prenom_utilisateur,login,password_utilisateur,id_type_utilisateur)
                         VALUES ('$nom', '$prenom', '$login', '$password', '$privilege');")
                         OR die (mysql_error()); 
    
       
     
    // on insère les informations du formulaire dans la table 
    $reponse -> execute() or die(); 
    
    if ($privilege =1){
    $reponse = $bdd->prepare('CREATE USER "'.$login.'"@"localhost" IDENTIFIED WITH mysql_native_password AS "'.$password.'";GRANT SELECT ON *.* TO "'.$login.'"@"localhost" REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0');
    $reponse -> execute() or die();

    }else if($privilege =2){
        $reponse = $bdd->prepare('CREATE USER "'.$login.'"@"localhost" IDENTIFIED WITH mysql_native_password AS "'.$password.'";GRANT SELECT, INSERT ON *.* TO "'.$login.'"@"localhost" REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0');
        $reponse -> execute() or die();
    

    }else if($privilege =3){
        $reponse = $bdd->prepare('CREATE USER "'.$login.'"@"localhost" IDENTIFIED WITH mysql_native_password AS "'.$password.'";GRANT SELECT, INSERT, UPDATE, DELETE, FILE ON *.* TO "'.$login.'"@"localhost" REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0');
        $reponse -> execute() or die();
    }
    // on affiche le résultat pour le visiteur 
    echo 'Vos infos on été ajoutées.'; 
    
    //$req->closeCursor();  // on ferme la connexion ?????
    }  
    
?>
<p> <!-- il faudra revenir au user menu --> 
	<button type="button" class="btn btn-primary" ONCLICK="window.location.href='http://localhost/stapa3php/projet2/pages/page2.php'">Revenir à la page Recherche/Ajouter</button>
</p>
