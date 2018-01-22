<?php
//require('session_start.php');

/* OUVERTURE DE LA BD */
try {
    $bdd = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', $_SESSION["email"], $_SESSION["password"]);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
if (isset($_POST['requete'])) {
    $_POST['requete'] = $_POST['requete'];
} else {
    $_POST['requete'] = $_SESSION['requete'];
}


/* TEST SI REQUETE AVEC INPUT (cas de la requete 7) */
if (empty($_POST['requete_input'])) {
    $nbreq = $_POST['requete'];
    $req = $bdd->query("SELECT requetesql FROM requete WHERE numero = " . $nbreq . ";");
    $nomreq = $bdd->query("SELECT nom FROM requete WHERE numero = " . $nbreq . ";");
    $tablereq = $bdd->query("SELECT table_request FROM requete WHERE numero = " . $nbreq . ";");
    $tablereq = $tablereq->fetchAll(PDO::FETCH_ASSOC);
} else {
    //$requete_name_minor = substr($_POST['requete7_name_minor'], 1);
    $requete_input = $_POST['requete_input'];
    $nbreq = $_POST['requete'];
    $req = $bdd->query("SELECT requetesql FROM requete WHERE numero = " . $nbreq . ";");
    $nomreq = $bdd->query("SELECT nom FROM requete WHERE numero = " . $nbreq . ";");
    $tablereq = $bdd->query("SELECT table_request FROM requete WHERE numero = " . $nbreq . ";");
    $tablereq = $tablereq->fetchAll(PDO::FETCH_ASSOC);
}


// avant yavait le decompte de page et autre
/* ligne ajoutée pour la pagination */


//Nous allons afficher 5 messages par page.
//$dataParPage = 5; 
//Nous récupérons le contenu de la requête dans $retour_total
//$retour_total = $bdd->query("SELECT COUNT(*) AS total FROM " . $tablereq[0]['table_request'] . ";");
//On range retour sous la forme d'un tableau. 
//$donnees_total = $retour_total->fetchAll(PDO::FETCH_ASSOC);
//On récupère le total pour le placer dans la variable $total.
//$total = $donnees_total[0]['total'];
//echo $total;
//Nous allons maintenant compter le nombre de pages.
//$nombreDePages = ceil($total/$dataParPage);
//echo '$nombreDePages :'.$nombreDePages;

// vérif de la page
/*if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
{
     $pageActuelle = $_GET['page'];

     if($pageActuelle > $nombreDePages) // Si la valeur de $pageActuelle (le numéro de la page) est plus grande que $nombreDePages...
     {
          $pageActuelle = $nombreDePages;
          $_SESSION['page'] = $pageActuelle;
     }
}
else // Sinon
{
     $pageActuelle = 1; // La page actuelle est la n°1
    $_SESSION['page'] = $pageActuelle;
}
/* On calcul la première entrée à lire pour le LIMIT*/
/*$premiereEntree = ($pageActuelle-1)*$dataParPage; */





/* VERIFY SI UN INPUT EXISTE EN PLUS DE LA REQUETE (request 7) */
if (empty($_POST['requete_input'])) {
    $requete = $req->fetchAll(PDO::FETCH_ASSOC);
    
    // calcul du nombre total max à afficher
    $toto = $bdd->query($requete[0]['requetesql']);
    $tutu = $toto->fetchAll(PDO::FETCH_ASSOC);
    $tutu2 = $tutu;
    $tutu_total = count($requete[0]['requetesql']);
    $total = count($tutu2);

        //Nous allons afficher 5 messages par page.
        $dataParPage = 5; 
       
        //Nous allons maintenant compter le nombre de pages.
        $nombreDePages = ceil($total/$dataParPage);
        //echo '$nombreDePages :'.$nombreDePages;

        // vérif de la page
        if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
        {
             $pageActuelle = $_GET['page'];

             if($pageActuelle > $nombreDePages) // Si la valeur de $pageActuelle (le numéro de la page) est plus grande que $nombreDePages...
             {
                  $pageActuelle = $nombreDePages;
                  $_SESSION['page'] = $pageActuelle;
             }
        }
        else // Sinon
        {
             $pageActuelle = 1; // La page actuelle est la n°1
            $_SESSION['page'] = $pageActuelle;
        }
        /* On calcul la première entrée à lire pour le LIMIT*/
        $premiereEntree = ($pageActuelle-1)*$dataParPage; 


    
    $nom_requete = $nomreq->fetchAll(PDO::FETCH_ASSOC);
        $donnees_total = $requete;
        $donnees_total = substr($donnees_total[0]['requetesql'], 0,-1);
        $donnees_total = $donnees_total.' LIMIT '.$premiereEntree.', '.$dataParPage;
        $donnees_total = array('0' => array('requetesql' => $donnees_total));
    $requete = $donnees_total;
    /*print_r($requete);
    echo '------';*/
    //print_r($toto);
} else {
    $requete = $req->fetchAll(PDO::FETCH_ASSOC);

    // Add calcul de la totalité
    // calcul du nombre total max à afficher
    $toto = $bdd->query($requete[0]['requetesql']);
    $tutu = $toto->fetchAll(PDO::FETCH_ASSOC);
    $tutu2 = $tutu;
    $tutu_total = count($requete[0]['requetesql']);
    $total = count($tutu2);

    //Nous allons afficher 5 messages par page.
        $dataParPage = 5; 
       
        //Nous allons maintenant compter le nombre de pages.
        $nombreDePages = ceil($total/$dataParPage);
        //echo '$nombreDePages :'.$nombreDePages;

        // vérif de la page
        if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
        {
             $pageActuelle = $_GET['page'];

             if($pageActuelle > $nombreDePages) // Si la valeur de $pageActuelle (le numéro de la page) est plus grande que $nombreDePages...
             {
                  $pageActuelle = $nombreDePages;
                  $_SESSION['page'] = $pageActuelle;
             }
        }
        else // Sinon
        {
             $pageActuelle = 1; // La page actuelle est la n°1
            $_SESSION['page'] = $pageActuelle;
        }
        /* On calcul la première entrée à lire pour le LIMIT*/
        $premiereEntree = ($pageActuelle-1)*$dataParPage; 

    foreach ($requete[0] as $key => $value) {
        $reponse = $bdd->query($value);
        $requete = str_replace('$requete_input', $requete_input, $value);
        $requete = array('0' => Array('requetesql' => $requete));
            $donnees_total = $requete;
            $nb_donnees_total = strlen($donnees_total[0]['requetesql']);
            $donnees_total = substr($donnees_total[0]['requetesql'], 0, $nb_donnees_total);
            $donnees_total = $donnees_total.' LIMIT '.$premiereEntree.', '.$dataParPage;
            $donnees_total = array('0' => array('requetesql' => $donnees_total));
        $requete = $donnees_total;
    }
    $nom_requete = $nomreq->fetchAll(PDO::FETCH_ASSOC);
}


/* display the title (one of 8 request) */
foreach ($nom_requete[0] as $key => $value) {
    $nom_requetetitre = $value;
}
echo '<p>voici le résultat pour : <b>' . $nom_requetetitre . '</b></p>';

/* LA VRAI REQUETE POUR LES DATAS DU TABLEAU */
foreach ($requete[0] as $key => $value) {
    $reponsetableau = $bdd->query($value);
   
}
$line = $reponsetableau->fetchAll(PDO::FETCH_ASSOC);

/* -------- AFFICHAGE Du HEAD DU TABLEAU --------------------- */
echo '<table class="striped responsive-table">
	    		<thead>';
foreach ($line[0] as $key => $value) {
    echo '<th>' . $key . '</th>';
}
echo '</thead>';
// DISPLAY DATA OF THE TABLEAU
echo '<tbody>';
foreach ($line as $key => $valArray) {
    echo '<tr>';
    foreach ($valArray as $key => $value) {
        echo '<td>' . $value . '</td>';
    }
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';

$_SESSION['requete'] = $_POST['requete'];

/* -------- AFFICHAGE DE LA PAGINATION --------------------- */
echo '</p>';

// si une seule page à afficher pas de pagination
//echo $nombreDePages;
if ($nombreDePages <> 1) {
    echo '<ul class="pagination">
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>';

    for($i = 1; $i <= $nombreDePages; $i++) { //On fait notre boucle
        if ($i == $pageActuelle) {
            echo '<li class="active"><a href="page_resultat_utilisateur.php?page=".$i.</a>'.$i.'</li>';
        } else {
            echo '<li class="waves-effect"><a href="page_resultat_utilisateur.php?page='.$i.'">'.$i.'</a></li>';
        }
    }
    echo '<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>';
    echo '</ul>';
} else {
    echo '';
    echo '<br/>';
    //echo '<li class="active"><a href="page_resultat_utilisateur.php?page=".$i.</a>'.$i.'</li>';
}

$reponsetableau->closeCursor();
?>