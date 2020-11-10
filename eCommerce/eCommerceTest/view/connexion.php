
			<h1 id="top_page_title">Connexion</h1>
			<div class="beige_bg form_container">
				<h2>Connecte toi avec ton email</h2>
				<form method="post" action="index.html">
					<fieldset class="type_field">
						<label>
							<img src="images/connexion/user-icon.png" alt="user_icon" />
							<input type="email" name="email" placeholder="Email" id="email" required />
						</label>
					</fieldset>
					<fieldset class="type_field">
						<label>
							<img src="images/connexion/pass-icon.png" alt="password_icon" />
							<input type="password" name="pwd" placeholder="Mot de passe" title="Doit contenir au minimum 8 charactere, dont 1 chiffre, 1 lettre miniscule, 1 lettre majuscule et 1 signe" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" id="password" maxlength="32" required />	
						</label>
					</fieldset>
					<fieldset>
						<label>
							<input type="checkbox" name="remember_me" />
							Se souvenir de moi
						</label>
					</fieldset>
					<button type="submit" class="submit">
						<img src="images/connexion/lock-icon.png" alt="lock_icon" />
						Sign In
					</button>
					<a href="resetmdp.html">Mot de pass oublié ?</a>
				</form>
				<div class="register">
					<h3>Nouveau ici ?</h3>
					<a href="inscription.html" class="button">Créer un compte</a>
				</div>
			</div>
		