<!--*****************************************************************************************************
	*			      				PAGE D'ACCUEIL DU PROFIL "GESTIONNAIRE"								*
	*																									*
	*			Lorsque le gestionnaire se connecte, il est dirigé sur cette page d'accueil.			*
	*			ce bloc est contenu dans page2 / body_bloc_commun / page_gestionnaire_abonne 			*
	*				recherche de l'abonné à modifier.						*
	* 		Author = Equipe projet 2																	*
	* 		Version = 1.0																	            *
	* 		Date = 26/01/2018													        				*
	*****************************************************************************************************
-->

<div class="row" id="bloc_body_global">
    <div class="col s9"> <!-- zone data de gauche-->
	    <fieldset id="bloc_requete">
		    <legend id="legend_other_page"><h4>STAPA | Gestionnaire</h4></legend>
            <label for="action_type"><h5>Merci de saisir les informations de l'abonné que vous souhaitez modifier:</h5></label>
		
		<!-- Lien avec code resultat abonnés -->
			<form id="form1" action="resultat_abonne.php" method="post">
					<!--<div class="row">-->
					<div class="col s12">
						<div class="row form-group">
							<div class="input-field col s6">
								<i class="material-icons prefix">account_circle</i>
								<label for="nom" ></label>
								<input id="nom" type="text" placeholder="Nom de l'abonné" class="form-control validate" name="nom" required>
							</div>

							<div class="row form-group">
								<div class="input-field col s6">
									<!--<i class="material-icons prefix">Date de naissance</i>-->
									<i class="material-icons prefix">date_range</i>
									<input id="naissance" type="date" placeholder="Date de naissance" class="form-control validate">

									<label for="naissance"></label>
								</div>	
							</div>
						</div>    
					</div>
			
				<button class="btn waves-effect waves-light" type="submit" name="rechercher" ONCLICK="window.location.href='http://localhost/stapa3php/projet2/pages/page_gestionnaire_affichage_resultat.php'">Valider
				</button>
			</form>
		</fieldset>
	</div>
	<div class="col s3" > <!-- zone d'informations de droite -->
			<fieldset id="bloc_infos5">
				<legend for="action_type"><h5>Informations</h5></legend>
				<form>
					Afin de modifier les informations d'un abonné, vous pouvez rechercher celui-ci par son nom ou par sa date de naissance. Vous pourrez ensuite modifier ses informations dans sa fiche personnelle. Pour saisir les données, cliquez sur la ligne bleue de la case correspondante.
				</form>
			</fieldset>
	</div>	
            

</div>

