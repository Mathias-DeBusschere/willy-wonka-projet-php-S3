
			<h1 id="top_page_title">I*nscription</h1>
			<div class="beige_bg form_container">
				<h2>Créer ton compte avec ton pseudo</h2>
				<form method="post" action="index.html">
					<fieldset class="type_field">
						<label>
							<img src="images/connexion/user-icon.png" alt="user_icon" />
							<input type="text" name="username" placeholder="Username" title="Peut contenir lettre minuscule ou majuscule, et chiffre et doit être de 4 charactere minimum à 16 charactere maximum" pattern="^[A-Za-z0-9_]{4,16}$" maxlength="16" required />
						</label>
					</fieldset>
					<fieldset class="type_field">
						<label>
							<img src="images/connexion/email-icon.png" alt="email_icon" />
							<input type="email" name="email" placeholder="Email" required />
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
							<input type="password" name="pwd" placeholder="Vérifié Mot de passe" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" maxlength="32" required />	
						</label>
					</fieldset>
					<button type="submit" class="submit">
						Créer un compte
					</button>
				</form>
			</div>
