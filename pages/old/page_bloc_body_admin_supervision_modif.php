<!-- bloc requete -->
	<fieldset id="bloc_requete">
		<legend id="legend_other_page"><h4>STAPA3 Gestionnaire</h4></legend>

		<label for="action_type"><h5>Merci de saisir les informations du client</h5></label>
		
		<!-- le .php est le lien avec le fichier php -->
		<form id="form1" action="Immo2000.php" method="post">
			<p>
				<div class="row">
			    <form class="col s12">
				     <div class="row">
				     	<div class="input-field col s6">
					        <i class="material-icons prefix">account_circle</i>
					        <input id="nom" type="text" class="validate">
					        <label for="nom">Nom du client</label>
					  	</div>
				        <div class="input-field col s6">
				          <input id="prenom" type="text" class="validate">
				          <label for="prenom">Prénom du client</label>
				        </div>
				    </div>
			       	<div class="input-field col s6">
			          	<i class="material-icons prefix">phone</i>
			          	<input id="icon_telephone" type="tel" class="validate">
			          	<label for="icon_telephone">Telephone du client</label>
			        </div>
				    <div class="row">
				        <div class="input-field col s12">
				        	<i class="material-icons prefix">vpn_key</i>
				          	<input id="password" type="password" class="validate">
				          	<label for="password">Password</label>
				        </div>
				    </div>
				    <div class="row">
				    	<div class="input-field col s12">
				        	<i class="material-icons prefix">email</i>
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