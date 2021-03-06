<!--*****************************************************************************************************
	*			      						"PAGE" 2 / PAGE CONTENEUR									*
	*							de Utilisateur, Gestionnaire et Administrateur							*
	*				                   		dans le bloc body commun                                    *
	* 		Author = Equipe projet 2																	*
	* 		Version = 1.0																	            *
	* 		Date = 26/01/2018													        				*
	*****************************************************************************************************
-->
<!-- maj des cookies -->
<?php 

session_start();
/*require('../config.inc.php'); //depuis le 21/01
require('cookie_modify.php');

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
echo '$_POST[\'requete\']'.$_POST['requete'];
echo '---------';
echo '<br/>';
echo '$_SESSION["requete"]'.$_SESSION['requete'];
echo '---------';
echo '<br/>';*/

?>

<!-- le html -->
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
    <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
</head>

<body>
	
	<!-- bloc titre commun à toutes les pages -->
	<?php include("bloc_titre_other.php"); ?>

    <!-- bloc requete -->
	<?php include("bloc_body_commun.php"); ?>

    <!-- bloc footer -->
    <?php include("bloc_footer.php"); ?>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.tooltipped').tooltip({delay: 50});
        });
    </script>
    <script>
        $(document).ready(function(){
            // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
            $('#modal1').modal(open);
        });
    </script>


</body>
</html>