<?php
// On commence par récupérer les champs
if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
} else {
    $nom = "";
}

if (isset($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
} else {
    $prenom = "";
}

if (isset($_POST['date'])) {
    $date=$_POST['date'];
} else {
    $date="";
}

if (isset($_POST['email'])) {
    $email=$_POST['email'];
} else {
    $email="";
}

if (isset($_POST['id']))  {
    $id=$_POST['id'];
} else {
    $id="";
}




if(empty($nom) OR empty($prenom) OR empty($date) OR empty($email))
{
    echo '<color="red">Attention, aucun champs ne peut rester vide !</font>';
} else {
    // connexion à la base
    require('../config.inc.php');

    try {
        $bdd = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
        echo "Connexion réussie.<br />";
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }


    $reponse = $bdd->prepare("
        UPDATE `personnes` SET `nom`='$nom',`prenom`='$prenom',`naissance`='$date',`email`='$email' WHERE `id_personne` = $id");


    $reponse->execute();
    echo '
   <script>
          alert ("Vos informations ont bien été modifiées");
           document.location.replace("page2.php" );
   </script>';
}

?>
<p> <!-- il faudra revenir au user menu -->
    <button type="button" class="btn btn-primary" ONCLICK="window.location.href='http://localhost/stapa3php/projet2/pages/page2.php'">Revenir à la page Recherche/Ajouter</button>
</p>


