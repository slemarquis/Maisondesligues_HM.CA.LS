<div id="login_admin">
<form name="connexion" method="POST"
      action="index.php?uc=membre&action=connexion">
    <fieldset style="width:360px;">
        <legend>Identification</legend>
        <p>
            <label for="login">Login : </label>
            <input id="login" type="text" name="login" value="" size="30" maxlength="45">
        </p>
        <p>
            <label for="pass">Mot de passe : </label>
            <input id="pass" type="password" name="pass" value="" size="30" maxlength="45">
        </p>
        <p>
            <input type="submit" value="Valider" name="valider">
            <input type="reset" value="Annuler" name="annuler">
        </p>
     </fieldset>
</form>
</div>