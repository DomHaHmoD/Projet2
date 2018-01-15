<!-- page bloc_titre_other -->
<!-- Bloc de titre pour toutes las pages 
	EXCEPTE INDEX (login) -->

<!-- start de la seesion -->
<?php 
require('cookie_modify.php'); // obligatoire
//echo '-----';
//echo $_SESSION['qualification'];
?>


	<nav id="row_bloc_titre">
    	<div class="nav-wrapper teal lighten">
    		<div id="titre_left">
      			
	      		<ul id="nav-mobile" class="left show-on-large">
	        		<li>
						<a href="http://localhost/stapa3/projet2/pages/page_adminold.php">
							<?php 
							if ($_SESSION['qualification'] === "3") {
								echo 'Administrateur';
							} else {echo '';}
							?>
							<!--Administrateur-->
						</a>
					</li>
	        		<li>
	        			<a href="http://localhost/stapa3/projet2/pages/page_gestionnaire_abonnes.php">
	        				<?php 
							if ($_SESSION['qualification'] === "2") {
								echo 'Gestionnaire';
							} else {echo '';} 
							?>
							<!--Gestionnaire-->
						</a>
					</li>
	        		<li>
	        			<a href="http://localhost/stapa3/projet2/pages/bloc_body_userrequete.php">		<?php
							if ($_SESSION['qualification'] === "1") {
								echo 'Utilisateur';
							} else {echo '';} 
							?>
							<!--Utilisateur-->
						</a>
	        		</li>
	      		</ul>
	      		<a href="#" class="brand-logo center">STAPA3 Bus</a>
	      		<ul id="nav-mobile" class="right show-on-large">
	      			<li><a><?php echo htmlspecialchars($_SESSION['email']); ?></a></li>
	        		<li><a class="btn-right tooltipped" data-position="top" data-delay="50" data-tooltip="sortir de l'appli" action="session_destroy.php" href="../index.php"><i class="material-icons btn-right">exit_to_app</i>Déconnexion</a></li>
	      		</ul>
	      		</a>
      		</div>
    	</div>
  	</nav>
  	
  	