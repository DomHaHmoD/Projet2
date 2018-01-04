<!-- page bloc_titre_other -->
<!-- Bloc de titre pour toutes las pages 
	EXCEPTE INDEX (login) -->

<!-- start de la seesion -->
<?php 
require('cookie_modify.php'); 
?>


	<nav id="row_bloc_titre">
    	<div class="nav-wrapper teal lighten">
    		<div id="titre_left">
      			
	      		<ul id="nav-mobile" class="left show-on-large">
	        		<li>
						<a class="waves-effect waves-light btn-flat disabled" href="http://localhost/stapa3/pages/page_admin.php">Administrateur</a>
					</li>
	        		<li><a href="http://localhost/stapa3/pages/page_gestion.php">Gestionnaire</a></li>
	        		<li><a href="http://localhost/stapa3/pages/page_bloc_body_userrequete.php">Utilisateur</a></li>
	        		<!--<li><a href="localhost/stapa2/index.html"><i class="material-icons">exit_to_app</i></a></li>-->
	      		</ul>
	      		<a href="#" class="brand-logo center">STAPA3 Bus</a>
	      		<ul id="nav-mobile" class="right show-on-large">
	      			<li><a><?php echo htmlspecialchars($_SESSION['email']); ?></a></li>	
	      			<!--<li><a><?php /*echo htmlspecialchars($_COOKIE['email']);*/ ?></a></li>-->
	        		<!--<li><a href="../index.php"><i class="material-icons btn-right">exit_to_app</i></a></li>-->
	        		<li><a class="btn-right tooltipped" data-position="top" data-delay="50" data-tooltip="sortir de l'appli" href="../index.php"><i class="material-icons btn-right">exit_to_app</i>sortir de l'appli</a></li>
	      		</ul>
	      		</a>
      		</div>
    	</div>
  	</nav>
  	
  	