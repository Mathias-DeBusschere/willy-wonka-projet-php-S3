<h1 id="top_page_title">Connexion</h1>
<div class="beige_bg form_container">
	<h2>Connecte toi avec ton email</h2>
	<form method="post" action="index.php?controller=utilisateur&page=connexion-check">
        <?php echo (isset($_POST["error"])? "<li class=\"".$_POST["error"]."\">".(($_POST["error"]=="emptyFields")? "Veuillez remplir tous les champs.":
                                                                                (($_POST["error"]=="invalidEmail")? "L'addresse email entrer ne respécte pas la forme d'une adresse email classique." :
                                                                                (($_POST["error"]=="invalidPwdEmailPair")? "L'email et le mot de passe ne correspondent pas.":""))):"")."</li>"?>
        <fieldset class="type_field">
			<label>
				<img src="images/connexion/user-icon.png" alt="user_icon" />
				<input type="email" name="email" <?php echo ((isset($_POST["error"]))? (($_POST["error"]=="emptyFields" && !empty($email))? "" : "class=\"error\""): "");?> placeholder="Email" id="email" value="<?php echo (empty($email)? "" : $email)?>" required/>
			</label>
		</fieldset>
		<fieldset class="type_field">
			<label>
				<img src="images/connexion/pass-icon.png" alt="password_icon" />
				<input type="password" name="pwd" <?php echo (isset($_POST["error"])? ((($_POST["error"]=="emptyFields" || $_POST["error"]=="invalidEmail") && !empty($password))? "" : "class=\"error\""): ""); ?> placeholder="Mot de passe" title="Doit contenir au minimum 8 charactere, dont 1 chiffre, 1 lettre miniscule, 1 lettre majuscule et 1 signe" /*pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"*/ id="password" maxlength="32"  required/>
			</label>
		</fieldset>
		<fieldset>
			<label>
				<input type="checkbox" name="remember_me" />
				Se souvenir de moi
			</label>
		</fieldset>
		<button type="submit" name="login-submit" class="submit">
			<img src="images/connexion/lock-icon.png" alt="lock_icon" />
			Sign In
		</button>
		<a href="index.php?page=resetmdp&controller=utilisateur">Mot de passe oublié ?</a>
	</form>
	<div class="register">
		<h3>Nouveau ici ?</h3>
		<a href="index.php?action=create&controller=utilisateur" class="button">Créer un compte</a>
	</div>
</div>
