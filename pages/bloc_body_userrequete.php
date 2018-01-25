<!--*****************************************************************************************************
	*			      						"BLOC" du BODY USERREQUETE 				                    *
	*				Bloc des boutons de requêtes / dans page 2-Bloc_body_commun              			*
	*				                                                                         			*
	* 		Author = Equipe projet 2																	*
	* 		Version = 1.0																	            *
	* 		Date = 26/01/2018													        				*
	*****************************************************************************************************
--><!-- page bloc_body_userrequete -->

<!-- Bloc de body pour la page
	User Requete -->
<script type="text/javascript">onload="window.location.reload()"</script>
<div class="row" id="bloc_body_global">
	<div class="col s9"> <!-- zone data de gauche -->
		<fieldset id="bloc_requete">
			<legend id="legend_other_page"><h4>STAPA | Utilisateur</h4></legend>
				
			<label for="action_type"><h5>Quelle requête souhaitez vous afficher ?</h5></label>
			
			<div class="row">
				<form action="page_resultat_utilisateur.php" method="post">
				    <div class="col s12">
				      	<input class="with-gap" name="requete" type="radio" id="1" value="1" />
				      	<label for="1" class="label_requete"><a id="btn_radio_style" class="btn-flat"
                        onclick=""
                            >Les propriétés des usagers</a></label>
				    </div>
				    <br/>
				    <br/>
				    <div class="col s12">
				      	<input class="with-gap" name="requete" type="radio" id="2" value="2" />
				      	<label for="2" class="label_requete"><a id="btn_radio_style" class="btn-flat"
                        onclick=""
                            >Le nombre d’usagers mineurs ayant un abonnement en cours de validité</a></label>
				    </div>
				    <br/>
				    <br/>
				    <div class="col s12">
				      	<input class="with-gap" name="requete" type="radio" id="3" value="3" />
				      	<label for="3" class="label_requete"><a id="btn_radio_style" class="btn-flat"
                        onclick=""
                            >Les usagers ayant des abonnements en cours de validité</a></label>
				    </div>
				    <br/>
				    <br/>
				    <div class="col s12">
				      	<input class="with-gap" name="requete" type="radio" id="4" value="4" />
				      	<label for="4" class="label_requete"><a id="btn_radio_style" class="btn-flat"
                        onclick=""
                            >Les usagers ayant des abonnements en cours de validité et classée par commune</a></label>
				    </div>
				    <br/>
				    <br/>
				   
				    <div class="col s12">
				      	<input class="with-gap" name="requete" type="radio" id="5" value="5" />
				      	<label for="5" class="label_requete"><a id="btn_radio_style" class="btn-flat"
                        onclick=""
                            >Le nombre d’abonnements en cours de validité pour chacun des types d’abonnements</a></label>
				    </div>
					
				    <br/>
				    <br/>
				    <div class="col s12">
				      	<input class="with-gap" name="requete" type="radio" id="6" value="6" />
				      	<label for="6" class="label_requete"><a id="btn_radio_style" class="btn-flat"
                        onclick=""
                            >Le chiffre d’affaires réalisé sur l’année en cours pour chacun des types d’abonnements</a></label>
				    </div>
				    <br/>
				    <br/>
				    <!--<div>-->
                    <div class="row col s9">
				      		<input class="with-gap" name="requete" type="radio" id="7" value="7"/>
				      		<label for="7"><a id="btn_radio_style" class="btn-flat tooltipped"
                            data-position="bottom" data-delay="50" data-tooltip="il est impératif de saisir le nom du mineur pour cette requete"
                            onclick=""
                                >Les informations du représentant légal d’un usager</a></label>
                    </div>
                    <div class="col s3">
							<input type="text" name="requete_input" id="input_name_minor" placeholder="nom du mineur">
                    </div>
                    <!--</div>-->
                    <!-- pas de balise br si add input field -->
				    <div class="col s12">
				      	<input class="with-gap" name="requete" type="radio" id="8" value="8" />
				      	<label for="8" class="label_requete"><a id="btn_radio_style" class="btn-flat"
                        onclick=""
                            >Le nombre d’usagers par année et par établissement scolaire</a></label>
				    </div>
				    <br/>
				    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
				    <div class="col s12">
				    	<button class="btn waves-effect waves-light" type="submit" name="action"
                                ONCLICK="window.location.href='page_resultat_utilisateur.php'">Valider votre choix
    					<i class="material-icons right">send</i>
  					    </button>
				    </div>
				</form>
			</div>
		</fieldset>
	</div>
	<div class="col s3" >
		<fieldset id="bloc_infos2"><!-- zone d'iformations de droite -->
            <!--<p><br></p>-->
		    <legend><h5>Informations</h5></legend>
			    <form>
				    <p>Cliquez sur la requête que vous souhaitez
				    visualisez.
				    <br/>
				    <br/>
				    Si vous cliquez sur la requete 7, il faut impérativement saisir le nom d'une personne.
				    <br/>
				    <br/>
				    A tout moment, vous pourrez revenir en arrière grâce à des boutons "revenir à la page précédente".
				    </p>
			    <form>
		</fieldset>
	</div>
</div>
