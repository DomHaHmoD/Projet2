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
                <legend id="legend_login"><h4>Bienvenue sur STAPA | Login</h4></legend>

                <label for="action_type"><h5>Merci de saisir vos identifiants</h5></label>

                <!--<form id="form_login" action="pages/page2.php" method="post">-->
                <form id="form_login" action="pages/page2.php" method="post">
                    <div class="form-group">
                    <!--<div class="input-field">-->
                        <label for="InputEmail">Identifiant</label>
                        <input type="text" name="email" id="InputEmail"  class="form-control validate"
                                 size="50" required>
                        <!--<small id="email" class="form-text text-muted">Ne donner jamais votre mot de passe</small>-->
                    </div>
                    <div class="form-group">
                    <!--<div class="input-field">-->
                        <label for="InputPassword">Mot de passe</label>
                        <input type="password" name="password" class="form-control validate" id="InputPassword"
                                required>
                    </div>

                    <!--<button type="submit" class="btn btn-primary" ONCLICK="'window.location.href='pages/page2.php'">Valider</button>-->
                    <button type="submit" class="btn btn-primary" ONCLICK="'window.location.href='pages/page2.php'">Valider</button>
                    <!--<button type="reset" class="btn btn-primary">Effacer</button>-->
                    <button type="reset" class="btn btn-primary">Effacer</button>
                </form>
        </fieldset>
    </div>
    <div class="col s3"> <!-- zone d'iformations de droite -->
        <fieldset id="bloc_infos1">
            <p><br></p>

            <legend><h5>Informations</h5></legend>
            <form>
                <p>Afin de vous connecter au système, merci de saisir votre identifiant et votre mot de passe.
                    Votre identifiant est composé de votre <b>prénom.nom</b>, merci de le saisir en lettres minuscules.
                    Si vous rencontrez un souci, merci de contacter le service technique.
                </p>
                <form>
        </fieldset>
    </div>
</div>