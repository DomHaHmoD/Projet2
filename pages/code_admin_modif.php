
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

if(isset($_POST['id']))      $id=$_POST['id'];
else      $id="";


// On vérifie si les champs sont vides 
if(empty($nom) OR empty($prenom) OR empty($login) OR empty($password) OR empty($privilege) OR empty($id))
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
    if (isset($_POST['enregistrer'])){
    $reponse = $bdd->prepare("UPDATE utilisateur SET nom_utilisateur = '$nom',
                                                     prenom_utilisateur = '$prenom',
                                                     login = '$login',
                                                     password_utilisateur = '$password',
                                                     id_utilisateur = '$privilege'
                                                     WHERE `utilisateur`.`id_utilisateur` = '$id';")
                         OR die ();
                         echo '
                         <script>
                                alert ("Vos informations ont bien été modifiées");
                                 document.location.replace("page2.php" );
                         </script>';
   
   
    
        }else if(isset($_POST['supprimer'])){
        
        $reponse = $bdd->prepare("DELETE FROM utilisateur WHERE id_utilisateur='$id'")
                         OR die ();
                         echo '
                         <script>
                                alert ("Vos informations ont bien été supprimiées");
                                 document.location.replace("page2.php" );
                         </script>';
}
    }
     
    // on insère les informations du formulaire dans la table 
    $reponse -> execute() or die(); 

    // on affiche le résultat pour le visiteur 
    

    //$req->closeCursor();  // on ferme la connexion ?????
    
    
?>
