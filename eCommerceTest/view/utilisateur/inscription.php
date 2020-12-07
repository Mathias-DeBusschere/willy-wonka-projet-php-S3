
			<h1 id="top_page_title">Inscription</h1>
			<div class="beige_bg form_container">
				<h2>Créer ton compte avec ton pseudo</h2>
                <?php if (isset($_POST["error"])) echo $_POST["error"];  ?>
				<form method="post" action="index.php?controller=utilisateur&page=insc-check">
                    <div class="nom_prenom">
                        <fieldset class="type_field">
                            <label>
                                <img src="images/connexion/user-icon.png" alt="user_icon" />
                                <input type="text" name="prenom" placeholder="Prenom" value="<?php echo ((isset($_POST["prenom"]))? $_POST["prenom"]: "");?>" maxlength="32" required />
                            </label>
                        </fieldset>
                        <fieldset class="type_field">
                            <label>
                                <img src="images/connexion/user-icon.png" alt="user_icon" />
                                <input type="text" name="nom" placeholder="Nom" value="<?php echo ((isset($_POST["nom"]))? $_POST["nom"]: "");?>"  maxlength="32" required />
                            </label>
                        </fieldset>
                    </div>
                    <fieldset class="type_field">
                        <label for="gender">
                            <img src="images/connexion/gender-icon.png" alt="user_icon" />
                        </label>
                        <div>
                            <div>
                                <input type="radio" id="male" name="gender" value="Homme" <?php echo ((isset($_POST["gender"]) && $_POST["gender"]=="Homme")? "checked":""); ?> required>
                                <label for="male">Homme</label>
                            </div>
                            <div>
                                <input type="radio" id="female" name="gender" value="Femme"  <?php echo ((isset($_POST["gender"]) && $_POST["gender"]=="Femme")? "checked":""); ?> required>
                                <label for="female">Femme</label>
                            </div>
                            <div>
                                <input type="radio" id="non_specifie" name="gender" value="Non spécifié"  <?php echo ((isset($_POST["gender"]) && $_POST["gender"]=="Non spécifié")? "checked":""); ?> required>
                                <label for="non_specifie">Non Spécifié</label>
                            </div>
                            <div>
                                <input type="radio" id="other" name="gender" value="other" required>
                                <label for="other"><input type="text" name="other_gender" placeholder="autre" value="<?php echo ((isset($_POST["other_gender"]))? $_POST["other_gender"]: "");?>" maxlength="32"></label>
                            </div>
                        </div>
                    </fieldset>
					<fieldset class="type_field">
						<label>
							<img src="images/connexion/email-icon.png" alt="email_icon" />
							<input type="email" name="email" placeholder="Email" value="<?php echo ((isset($_POST["email"]))? $_POST["email"]: "");?>" maxlength="64" required />
						</label>
					</fieldset>
					<fieldset class="type_field">
						<label>
							<img src="images/connexion/pass-icon.png" alt="password_icon" />
							<input type="password" name="pwd" placeholder="Nouveau mot de passe" title="Doit contenir au minimum 8 charactere, dont 1 chiffre, 1 lettre miniscule, 1 lettre majuscule et 1 signe" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" maxlength="32" required />	
						</label>
					</fieldset>
					<fieldset class="type_field">
						<label>
							<img src="images/connexion/pass-icon.png" alt="password_icon" />
							<input type="password" name="pwd-repeat" placeholder="Vérifié Mot de passe" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" maxlength="32" required />
						</label>
					</fieldset>
                    <input type='hidden' name='action' value='insc-check' >
                    <input type='hidden' name='controller' value='utilisateur'>
					<button type="submit" name="signup-submit" class="submit">
						Créer un compte
					</button>
				</form>
			</div>
