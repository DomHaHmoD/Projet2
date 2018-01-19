<!--*****************************************************************************************************
	*			      						"BLOC" du BODY INDEX 				                        *
	*						      bloc de login appelé dans index                              			*
	*				                                                                         			*
	* 		Author = Equipe projet 2																	*
	* 		Version = 1.0																	            *
	* 		Date = 26/01/2018													        				*
	*****************************************************************************************************
-->
<div class="row" id="bloc_body_global">
    <div class="col s9">
        <fieldset id="login">
                <legend id="legend_login"><h4>Bienvenue sur STAPA3 Login</h4></legend>

                <label for="action_type"><h5>Merci de saisir vos identifiants</h5></label>

                <form id="form_login" action="pages/page2.php" method="post">
                    <div class="form-group">
                        <label for="InputEmail">Login</label>
                        <input type="text" name="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Saisissez votre login" size="50" required>
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
    </div>
    <div class="col s3"> <!-- zone d'iformations de droite -->
        <fieldset id="bloc_infos1">
            <p><br></p>
            <label for="action_type"><h5>Informations</h5></label>
            <form>
                <p>Votre login est composé de votre prénom asocié à votre prénom,
                    voici un exemple <b>prénom.nom</b>
                    merci de le saisir en lettre minuscule.
                </p>
                <form>
        </fieldset>
    </div>
</div>