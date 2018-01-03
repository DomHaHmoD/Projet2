<fieldset id="login">
		<legend id="legend_login"><h4>Bienvenue sur STAPA3 Login</h4></legend>
		
		<label for="action_type"><h5>Merci de saisir vos identifiants</h5></label>

		<form id="form_login" action="pages/page2.php" method="post">
			<div class="form-group">
				<label for="InputEmail">Email address</label>
				<input type="text" name="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Saisissez votre email" size="50" required>
				<small id="email" class="form-text text-muted">Ne donner jamais votre mot de passe</small>
			</div>
			<div class="form-group">
				<label for="InputPassword">Password</label>
				<input type="password" name="password" class="form-control" id="InputPassword" placeholder="Saisissez votre mot de passe" required>
			</div>
	
  			<button type="submit" class="btn btn-primary" ONCLICK="'window.location.href='pages/page2.php'">Valider</button>
  			<button type="reset" class="btn btn-primary">Effacer</button>
		</form>
	</fieldset>