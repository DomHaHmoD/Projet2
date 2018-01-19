<?php
/* ouverture de la bd */
try {
    $bdd = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', $_SESSION["email"], $_SESSION["password"]);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

/* teste si c'est une requete avec un input */
if (empty($_POST['requete_input'])) {
    $nbreq = $_POST['requete'];
    $req = $bdd->query("SELECT requetesql FROM requete WHERE numero = " . $nbreq . ";");
    $nomreq = $bdd->query("SELECT nom FROM requete WHERE numero = " . $nbreq . ";");
} else {
    //$requete_name_minor = substr($_POST['requete7_name_minor'], 1);
    $requete_input = $_POST['requete_input'];
    $nbreq = $_POST['requete'];
    $req = $bdd->query("SELECT requetesql FROM requete WHERE numero = " . $nbreq . ";");
    $nomreq = $bdd->query("SELECT nom FROM requete WHERE numero = " . $nbreq . ";");
}

/* ligne ajoutée pour la pagination */
//Nous allons afficher 5 messages par page.
$dataParPage = 5; 
//Nous récupérons le contenu de la requête dans $retour_total
$retour_total = $bdd->query('SELECT COUNT(*) AS total FROM personnes');
//On range retour sous la forme d'un tableau. 
$donnees_total = $retour_total->fetchAll(PDO::FETCH_ASSOC);
//On récupère le total pour le placer dans la variable $total.
$total = $donnees_total[0]['total']; 
//Nous allons maintenant compter le nombre de pages.
$nombreDePages = ceil($total/$dataParPage);
//echo '$nombreDePages :'.$nombreDePages;
// vérif de la page
if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
{
     $pageActuelle = intval($_GET['page']);
 
     if($pageActuelle > $nombreDePages) // Si la valeur de $pageActuelle (le numéro de la page) est plus grande que $nombreDePages...
     {
          $pageActuelle = $nombreDePages;
     }
}
else // Sinon
{
     $pageActuelle = 1; // La page actuelle est la n°1    
}
//echo '$pageActuelle :'.$pageActuelle;


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
    foreach ($requete[0] as $key => $value1) {
        $reponse2 = $bdd->query($value1);
        $requete = str_replace('$requete_input', $requete_input, $value1);
        $requete = array('0' => Array('requetesql' => $requete));
            $donnees_total = $requete;
            $donnees_total = substr($donnees_total[0]['requetesql'], 0,-1);
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
foreach ($requete[0] as $key => $value) {
    $reponse = $bdd->query($value);
}
/* la vrai requete  pour les datas du tableau */
$line = $reponse->fetchAll(PDO::FETCH_ASSOC);

/* affichage du head du tableau */
echo '<table class="striped">
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
        echo '<li class="active"><a href="code_user_requete.php?page='.$i.'">'.$i.'</a></li>';
    } else {
        echo '<li class="waves-effect"><a href="code_user_requete.php?page='.$i.'">'.$i.'</a></li>';
            }
} 
echo '<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>';
echo '</ul>';


$reponse->closeCursor();
?>