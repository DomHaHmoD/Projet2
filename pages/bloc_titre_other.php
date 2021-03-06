<!--*****************************************************************************************************
	*			      						"BLOC" TITRE												*
	*																									*
	*				Barre de navigation commune en "haut" pour toutes les pages sauf l'index.			*
	* 		Author = Equipe projet 2																	*
	* 		Version = 1.0																	            *
	* 		Date = 26/01/2018													        				*
	*****************************************************************************************************
-->

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
						<a href="http://localhost/stapa3php/projet2/pages/page2.php">
							<?php 
							if ($_SESSION['qualification'] === "3") {
								echo 'Administrateur';
							} else {echo '';}
							?>
							<!--Administrateur-->
						</a>
					</li>
	        		<li>
	        			<a href="http://localhost/stapa3php/projet2/pages/page2.php">
	        				<?php 
							if ($_SESSION['qualification'] === "2") {
								echo 'Gestionnaire';
							} else {echo '';} 
							?>
							<!--Gestionnaire-->
						</a>
					</li>
	        		<li>
	        			<a href="http://localhost/stapa3php/projet2/pages/page2.php">		<?php
							if ($_SESSION['qualification'] === "1") {
								echo 'Utilisateur';
							} else {echo '';} 
							?>
							<!--Utilisateur-->
						</a>
	        		</li>
	      		</ul>
	      		<a href="http://localhost/stapa3php/projet2/pages/page2.php" class="brand-logo center">STAPA3 Bus</a>
	      		<ul id="nav-mobile" class="right show-on-large">
	      			<li><a><?php echo htmlspecialchars($_SESSION['email']); ?></a></li>
	        		<li><a class="btn-right tooltipped" data-position="bottom" data-delay="50" data-tooltip="Deconnexion"
                           onclick="session_destroy.php"
                           href="../index.php"><i
                                    class="material-icons btn-right">exit_to_app</i></a></li>
                    <li></li>
                    <li></li>
	      		</ul>

      		</div>
    	</div>
  	</nav>

  	