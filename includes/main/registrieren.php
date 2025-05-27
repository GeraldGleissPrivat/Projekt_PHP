			<?php
			echo(
			'<form class="col-xl-6 col-lg-6 col-md-6 col-sm-12 Kontaktformular" method="post">
				<fieldset>
					<legend>Login</legend>
						<div id="login">
							<label class="Username" for="Username">Username:</label>
							<input id="Username" type="text" name="Username" placeholder="Username" required>
							<label class="Passwort" for="Passwort">Passwort:</label>
							<input id="passwort" type="password" name="Passwort" placeholder="Passwort" required>
							<input id="registrieren" type="text" name="registrieren" value=' . $_POST['registrieren'] .' >
							<button class="btnlogin" type="submit">Login</button>
							<button class="btnregistrieren" type="button">'  . '</button>
						</div>
				</fieldset>
			</form>');
			ta($_POST);
			
			//if($_POST['registrieren']=='true'){
			//echo('<p>Registrieren aufgerufen</p>');
			//}
			/*echo('
			
			<form class="col-xl-12 col-lg-12 col-md-12 col-sm-12 Kontaktformular" method="post">
				<fieldset>
					<legend>Registrierung</legend>
					<div id="fs">
						<label class="lv" for="vorname">Vorname:</label>
						<input id="vorname" type="text" name="vorname" placeholder="Vorname" required>
						<label class="ln" for="nachname">Nachname:</label>
						<input id="nachname" type="text" name="nachname" placeholder="Nachname" required>
						<label class="ls" for="strasse">Strasse:</label>
						<input id="strasse" type="text" name="strasse" placeholder="Strasse" required>
						<label class="lh" for="hausnummer">Hausnummer:</label>
						<input id="hausnummer" type="text" name="hausnummer" placeholder="Hausnummer" required>
						<label class="lp" for="postleitzahl">Postleitzahl:</label>
						<input id="postleitzahl" type="text" name="postleitzahl" placeholder="Postleitzahl" required>
						<label class="lstadt" for="stadt">Stadt:</label>
						<input id="stadt" type="text" name="Stadt" placeholder="Stadt" required>
						<label class="lemail" for="emailadresse">E-Mail:</label>
						<input id="emailadresse" type="email" placeholder="email" required>
						<button class="btnsenden" type="button">Absenden</button>
					</div>
				</fieldset>
				</input>
			</form>');
			*/
			?>