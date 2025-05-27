			<?php
			$feld_registrieren='';
			if(isset($_POST['registrieren']) && $_POST['registrieren']=='registrieren'){
				echo('<p>registrieren gedrückt</p>');
				$feld_registrieren='registrieren';
			}
			//phpinfo();
			if($feld_registrieren!='registrieren'){
			echo(

			'<form class="col-xl-6 col-lg-6 col-md-6 col-sm-12 Kontaktformular" method="post">
				<fieldset>
					<legend>Login</legend>
						<div id="login">
							<label class="Username" for="Username">Username:</label>
							<input id="Username" type="text" name="Username" placeholder="Username" required>
							<label class="Passwort" for="Passwort">Passwort:</label>
							<input id="passwort" type="password" name="Passwort" placeholder="Passwort" required>
							<button class="btnlogin" type="submit">Login</button>
							<a href="register.php">
								Registrieren
							</a>
							<input type="hidden" class="Reg" name="registrieren" 
							value="' . $feld_registrieren . '">
						</div>
				</fieldset>
			</form>');
			}

			else{
				include("register.php");
			}
			/*$vorname="";
			if(isset($_POST["vorname"]) && strlen (($_POST["vorname"]>0)))
			{
				$vorname=$_POST["vorname"];
				
			}
			else {
			echo('<form class="col-xl-12 col-lg-12 col-md-12 col-sm-12 Registrierungsformular" method="post">
				<fieldset>
					<legend>Persönliche Angaben</legend>
					<div id="fs">
						<label class="lv" for="vorname">Vorname:</label>
						<input id="vorname" type="text" name="vorname" placeholder="Vorname" required>
						<input id="vname" type="text" name="vname" value="' . $vorname . '">
						<label class="ln" for="nachname">Nachname:</label>
						<input id="nachname" type="text" name="nachname" placeholder="Nachname" required>
						<input id="nname" type="hidden" name="nname">
						<label class="ls" for="strasse">Strasse:</label>
						<input id="strasse" type="text" name="strasse" placeholder="Strasse" required>
						<input id="h_strasse" type="hidden" name="h_strasse">
						<label class="lh" for="hausnummer">Hausnummer:</label>
						<input id="hausnummer" type="text" name="hausnummer" placeholder="Hausnummer" required>
						<input id="h_hausnummer" type="hidden" name="h_hausnummer">
						<label class="lp" for="postleitzahl">Postleitzahl:</label>
						<input id="postleitzahl" type="text" name="postleitzahl" placeholder="Postleitzahl" required>
						<input id="h_postleitzahl" type="hidden" name="h_postleitzahl">
						<label class="lstadt" for="stadt">Stadt:</label>
						<input id="stadt" type="text" name="Stadt" placeholder="Stadt" required>
						<input id="h_stadt" type="hidden" name="h_stadt">
						<label class="lemail" for="emailadresse">E-Mail:</label>
						<input id="emailadresse" type="email" placeholder="email" required>
						<input id="h_mailadresse" type="hidden" name="h_mailadresse">
						<button class="btnsenden" type="submit">Absenden</button>
					</div>
				</fieldset>)');
			}*/
			ta($_POST);
			?>