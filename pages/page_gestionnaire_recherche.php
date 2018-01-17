
    <!-- bloc de requete -->
	<fieldset id="bloc_requete">
		<legend id="legend_other_page"><h4>STAPA | Gestionnaire</h4></legend>

		<label for="action_type"><h5>Merci de saisir les informations afin de rechercher l'abonné que vous souhaitez modifier</h5></label>
		
		<!-- Lien avec code resulat abonnés -->
		<form id="form1" action="resultat_abonne.php" method="post">
				<!--<div class="row">-->
			    <div class="col s12">
			    	<div class="row">
				     	<div class="input-field col s6">
					        <i class="material-icons prefix">account_circle</i>
					        <input id="nom" type="text" placeholder="Nom de l'abonné" class="validate" name="nom">
					        <label for="nom" ></label>
					  	</div>
						
						<div class="row">
				        	<div class="input-field col s6">
				        		<i class="material-icons prefix">Date de naissance</i>
				          		<input id="naissance" type="date" placeholder="Date de naissance" class="validate">
				          		<label for="naissance"></label>
				          	</div>	
				        </div>
				    </div>    
			    </div>
			
				<button class="btn waves-effect waves-light" type="submit" name="action" ONCLICK="window.location.href='http://localhost/stapa3php/projet2/pages/page_gestionnaire_affichage_resultat.php'">Valider
    			
  				</button>
			
		</form>	
	</fieldset>