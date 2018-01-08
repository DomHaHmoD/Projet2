<!-- bloc body admin -->
	<fieldset id="bloc_body_admin">
		<legend id="legend_other_page"><h4>STAPA3 Administrateur</h4></legend>

		<label for="action_type"><h5>Que souhaitez vous faire ?</h5></label>
		
		<!-- le .php est le lien avec le fichier php -->
		<form id="form1" action="/admin/pageadmin.php" method="post">
			<p>
				<button type="button" class="btn btn-primary btn-lg" id="at1" value="" name="page_at1" action="page_at1"  ONCLICK="window.location.href='http://localhost/stapa3php/pages/page_admin_commun.php'" /><h6 class="left-align">Administration</h6></button>
			</p>
			<p>
				<button type="button" class="btn btn-primary btn-lg" id="at2" value="" name="page_at2" action="page_at2"  ONCLICK="window.location.href='http://localhost/stapa3php/pages/page_admin_commun.php'" /><h6 class="left-align">Supervision</h6></button>
			</p>
			<p>
				<button type="button" class="btn btn-primary btn-lg" id="at3" value="" name="page_at3" action="page_at3"  ONCLICK="window.location.href='http://localhost/stapa3php/pages/page_admin_commun.php'" /><h6 class="left-align">Opération de saisie</h6></button>
			</p>
			
			
		</form>	
	</fieldset>