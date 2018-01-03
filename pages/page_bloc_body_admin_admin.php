<!-- bloc requete -->
	<fieldset id="bloc_requete">
		<legend id="legend_other_page"><h4>STAPA3 Administrateur</h4></legend>

		<label for="action_type"><h5>Merci de choisir votre activité</h5></label>
		
		<!-- le .php est le lien avec le fichier php -->
		<form id="form1" action="Immo2000.php" method="post">
			<p>
				<div class="row">
			    <form class="col s12">
			    	<div class="row">
				     	<div class="input-field col s6">
					        <i class="material-icons prefix">account_circle</i>
					        <input id="nom" type="text" class="validate">
					        <label for="nom">Nom de l'utilisateur/gestionnaire</label>
					  	</div>
				        <div class="input-field col s6">
				          <input id="prenom" type="text" class="validate">
				          <label for="prenom">Prénom de l'utilisateur/gestionnaire</label>
				        </div>
				    </div>
				     
			      <!--<div class="row">
			        <div class="input-field col s12">
			          <input disabled value="I am not editable" id="disabled" type="text" class="validate">
			          <label for="disabled"></label>
			        </div>
			      </div>-->
				     <div class="row">
				        <div class="input-field col s12">
				          <input id="password" type="password" class="validate">
				          <label for="password">Password</label>
				        </div>
				     </div>
				     <div class="row">
				        <div class="input-field col s12">
				          <input id="email" type="email" class="validate">
				          <label for="email">Email</label>
				        </div>
				     </div>
			    </form>
			  </div>
			</p>
			
			<p>
				<button class="btn waves-effect waves-light" type="submit" name="action">Valider
    			
  				</button>
			</p>
			
		</form>	
	</fieldset>