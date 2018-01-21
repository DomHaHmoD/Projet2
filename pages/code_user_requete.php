<?php
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
echo '$_POST["requete"]'.$_POST['requete'];
echo '---------';
echo '<br/>';
echo '$_SESSION["requete"]'.$_SESSION['requete'];
echo '---------';
echo '<br/>';*/


/* ouverture de la bd */
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


/* teste si c'est une requete avec un input */
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


/*echo '$nbreq :'.$nbreq;
echo '$req : ';
echo '<pre>';
print_r($req);
echo '</pre>';
echo "<br/>";
echo "-------";
echo '$nom_requete : ';
echo '<pre>';
print_r($nomreq);
echo '</pre>';
echo "<br/>";
echo "-------";
echo '$tablereq : ';
echo '<pre>';
print_r($tablereq[0]['table_request']);
echo '</pre>';
echo "<br/>";
echo "-------";
die();*/

/* ligne ajoutée pour la pagination */
//Nous allons afficher 5 messages par page.
$dataParPage = 5; 
//Nous récupérons le contenu de la requête dans $retour_total
$retour_total = $bdd->query("SELECT COUNT(*) AS total FROM " . $tablereq[0]['table_request'] . ";");
//On range retour sous la forme d'un tableau. 
$donnees_total = $retour_total->fetchAll(PDO::FETCH_ASSOC);
//On récupère le total pour le placer dans la variable $total.
$total = $donnees_total[0]['total']; 
//Nous allons maintenant compter le nombre de pages.
$nombreDePages = ceil($total/$dataParPage);
//echo '$nombreDePages :'.$nombreDePages;

// vérif de la page
if(isset($_SESSION['page'])) // Si la variable $_GET['page'] existe...
{
     $pageActuelle = $_SESSION['page'];

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
/*echo '$pageActuelle :'.$pageActuelle;*/


$premiereEntree = ($pageActuelle-1)*$dataParPage; // On calcul la première entrée à lire
//echo '$premiereEntree :'.$premiereEntree;

/* verify if input (request 7) with a request */
if (empty($_POST['requete_input'])) {
    $requete = $req->fetchAll(PDO::FETCH_ASSOC);
    $nom_requete = $nomreq->fetchAll(PDO::FETCH_ASSOC);
        $donnees_total = $requete;
        $donnees_total = substr($donnees_total[0]['requetesql'], 0,-1);
        $donnees_total = $donnees_total.' LIMIT '.$premiereEntree.', '.$dataParPage;
        $donnees_total = array('0' => array('requetesql' => $donnees_total));
    $requete = $donnees_total;
} else {
    $requete = $req->fetchAll(PDO::FETCH_ASSOC);

    foreach ($requete[0] as $key => $value) {
        $reponse = $bdd->query($value);
        $requete = str_replace('$requete_input', $requete_input, $value);
        $requete = array('0' => Array('requetesql' => $requete));
            $donnees_total = $requete;
                /*echo '$donnees_total : ';
                echo '<pre>';
                print_r($donnees_total);
                echo '</pre>';
                echo "<br/>";
                echo "-------";*/
            $nb_donnees_total = strlen($donnees_total[0]['requetesql']);
                /*echo $nb_donnees_total;*/
            $donnees_total = substr($donnees_total[0]['requetesql'], 0, $nb_donnees_total);
                /*echo '$donnees_total : ';
                echo '<pre>';
                print_r($donnees_total);
                echo '</pre>';
                echo "<br/>";
                echo "-------";*/
            $donnees_total = $donnees_total.' LIMIT '.$premiereEntree.', '.$dataParPage;
            $donnees_total = array('0' => array('requetesql' => $donnees_total));
        $requete = $donnees_total;
    }
    $nom_requete = $nomreq->fetchAll(PDO::FETCH_ASSOC);
}
/* verif si la requete est correcte */

/*echo '$requete : ';
echo '<pre>';
print_r($requete);
echo '</pre>';
echo "<br/>";
echo "-------";
echo '$nom_requete : ';
echo '<pre>';
print_r($nom_requete);
echo '</pre>';
echo "<br/>";
echo "-------";
die();*/

/* display the title (one of 8 request) */
foreach ($nom_requete[0] as $key => $value) {
    $nom_requetetitre = $value;
}
echo '<p>voici le résultat pour : ' . $nom_requetetitre . '</p>';

/* la vrai requete  pour les datas du tableau */
foreach ($requete[0] as $key => $value) {
    $reponsetableau = $bdd->query($value);
    /*echo '$reponsetableau : ';
    echo '<pre>';
    print_r($reponsetableau);
    echo '</pre>';
    echo "<br/>";
    echo "-------";
    die();*/
}
$line = $reponsetableau->fetchAll(PDO::FETCH_ASSOC);

/* affichage du head du tableau */
echo '<table class="striped responsive-table">
	    		<thead>';
foreach ($line[0] as $key => $value) {
    echo '<th>' . $key . '</th>';
}
echo '</thead>';
// display data of the tableau
echo '<tbody>';
foreach ($line as $key => $valArray) {
    echo '<tr>';
    foreach ($valArray as $key => $value) {
        echo '<td>' . $value . '</td>';
    }
    echo '</tr>';
}
echo '</tbody>';
/*echo '<div></div>';*/
echo '</table>';

/* affiche de la pagination */
echo '</p>';
//echo '<p align="center">Page : '; //Pour l'affichage, on centre la liste des pages
echo '<ul class="pagination">
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>';

for($i = 1; $i <= $nombreDePages; $i++) { //On fait notre boucle
    if ($i == $pageActuelle) {
        echo '<li class="active"><a href="code_user_requete.php?page=".$i.</a>'.$i.'</li>';
    } else {
        echo '<li class="waves-effect"><a href="code_user_requete.php?page='.$i.'">'.$i.'</a></li>';
            }
} 
echo '<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>';
echo '</ul>';
/*echo '<p align="center">Page : '; //Pour l'affichage, on centre la liste des pages
for($i=1; $i<=$nombreDePages; $i++) //On fait notre boucle
{
    //On va faire notre condition
    if($i==$pageActuelle) //Si il s'agit de la page actuelle...
    {
        echo ' [ '.$i.' ] ';
    }
    else //Sinon...
    {
        echo '<a href="page_resultat_utilisateur.php?page='.$i.'">'.$i.'</a>';
    }
}
echo '</p>';*/

$reponsetableau->closeCursor();
?>