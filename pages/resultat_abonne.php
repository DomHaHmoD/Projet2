<!--*****************************************************************************************************
	*			      			PROFIL "GESTIONNAIRE" - AFFICHAGE RESULTATS RECHERCHE					*
	*																									*
	*						Le gestionnaire peut voir l'aboutissement de sa recherche.					*
	* 																									*	*****************************************************************************************************
-->

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>STAPA</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta name="description=" content="appli STAPA">
    <meta name="author" content="Prénom HA-THI">

    <meta name="category" content="template">
    <meta name="copyright" content="STAPA Bordeaux">
    <meta name="google" content="translate">

    <link href="../css/stapa3-template-style.css" rel="stylesheet" type="text/css">
    <link href="../images/bus.jpg" rel="shortcut icon" type="image/jpg">
    <!-- add bibliotheque Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



</head>


<body>

<!-- bloc titre commun à toutes les pages -->
<?php include("bloc_titre_other.php"); ?>
<?php include("bloc_footer.php"); ?>
<!-- bloc de requete -->
<fieldset id="bloc_requete">
    <legend id="legend_other_page"><h4>STAPA | Gestionnaire</h4></legend>

    <label for="action_type"><h5>Merci de sélectionner l'abonné que vous souhaitez modifier</h5></label>

    <?php
    // récupere la configuration afin d'accèder a la base de données
    require('../config.inc.php');
    // ouverture de la base de données
    try
    {
        $bdd = new PDO('mysql:host=' .DB_HOST. ';dbname=' .DB_NAME. ';charset=utf8', DB_USER, DB_PASS);
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

    // table requete, search one of the 8 requets
    if (isset($_POST['nom'])) {
        /*echo 'voila le nom récupéré =';
        echo $recupnom = $_POST['nom'];
        echo '<br/>';*/
        $recupnom = $_POST['nom'];
        $recupnom = '"'.$recupnom.'"';
        $req = $bdd->query("SELECT personnes.nom AS 'NOM', 
                                                personnes.prenom AS 'PRENOM', 
                                                personnes.naissance AS 'DATE NAISSANCE',
                                                personnes.email AS 'EMAIL',
                                                personnes.id_personne AS 'ID'
                                                FROM personnes WHERE personnes.nom = ".$recupnom.";");
    } else {
        
        echo"<script>alert('Merci de saisir le nom ou la date de naissance');</script>";
        /*require('session_destroy.php';
        echo"<script>document.location.replace('../index.php')</script>";*/
        /*echo'<div id="modal1" class="modal">
                    <div class="modal-content">
                        <h4>Modal Header</h4>
                        <p>A bunch of text</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
                    </div>
                </div>';*/
        /*require('session_destroy.php');*/
        echo"<script>document.location.replace('page2.php')</script>";
        exit;
    }
    //die();


    // prepare the data
    $requete = $req->fetchAll(PDO::FETCH_ASSOC);
    //$nom_requete = $nomreq->fetchAll(PDO::FETCH_ASSOC);
    //print_r($requete);
    //echo $nom_requete
    //die();
    // display the title (one of 8 request)
    /*foreach ($nom_requete[0] as $key => $value) {
        $nom_requetetitre = $value;
    }
    echo '<p>voici le résultat pour : ' .$nom_requetetitre.'</p>';*/

    foreach ($requete[0] as $key => $value) {
        /*echo 'requete[0] =';
        echo '<pre>';
        print_r($requete[0]);
        echo '<pre>';
        echo '<br/>';
        echo '--------------';
        echo '$key =';
        echo '<pre>';
        print_r($key);
        echo '<pre>';
        echo '<br/>';
        echo '--------------';
        echo '$value =';
        echo '<pre>';
        print_r($value);
        echo '<pre>';
        echo '<br/>';
        echo '--------------';*/
        //$reponse = $bdd->query($value);
    }
    // la vrai requete
    //$reponse = $bdd->query($value);
    //$line = $reponse->fetchAll(PDO::FETCH_ASSOC);
    /*print_r($reponse);
    echo "<br/>";
    echo "-------";
    print_r($reponse->fetchAll(PDO::FETCH_ASSOC));
    print_r($line);
    die();*/
    // affichage du head du tableau
    echo '<form  action="resultat_abonne.php" method="POST">';
    echo '<table class="striped">
	    		<thead>';
    foreach ($requete[0] as $key => $value) {
        echo '<th>'.$key.'</th>';
    }
    echo '</thead>';
    // display data of the tableau
    echo '<tbody>';
    foreach ($requete as $key => $valArray) {
        echo '<tr>';
        foreach ($valArray as $key => $value) {
            echo '<td>'.$value.'</td>';
            $array_data[] = $value;
            $_SESSION['data_to_modify'] = $array_data;
        }
        echo '<td><a class="btn-floating btn-large waves-effect waves-light red" type="submit" onclick="window.location.href=\'http://localhost/stapa3php/projet2/pages/page_gestionnaire_modification_ficheab.php\'"><i class="material-icons">mode_edit</i></a></td>';
        echo '</tr>';
        echo '</tr>';
    }
    echo'</tbody>';
    echo '</form>';
    /*var_dump($array_data);*/
    $req->closeCursor();
    ?>
</body>

</html>