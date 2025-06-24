<?php
$msg="";
$conn=dbconnect();

if(count($_POST)>0){
		$sql='SELECT * FROM tbl_user WHERE Emailadresse="'. $_POST["Emailadresse"] .'";';
		$ergebnisliste=dbquery($conn, $sql);
		$ergebnis=dbFetch($ergebnisliste);
		if(mysqli_num_rows($ergebnisliste)==1 && password_verify($_POST["Passwort"], $ergebnis->Passwort)){
			$msg="Login erfolgreich";
		
		ini_set('session.gc_maxlifetime',600);
		ta(ini_get('session.save_path'));
		session_start();
		$_SESSION["eingeloggt"] = true;
		$IDUser=$ergebnis->IDUser;
		ta($IDUser);
		//im VZ uploads/user wird ein Verzeichnis angelegt nach dem Muster "user_UserID"
		$pfad='../../uploads/userdata/user_' . $IDUser;
 		ta($pfad);
			if(!file_exists($pfad)){
				mkdir($pfad,0755,true);
			}
			header("Location: ../../uploads/dateimanager.php");
		}
		else{
			header("Location: login2.php");
		}
}

echo('<form class="col-xl-6 col-lg-6 col-md-12 col-sm-12 Kontaktformular" method="post">
				<fieldset>
					<legend>Login</legend>
						<div id="login">
							<label class="Emailadresse" for="Emailadresse">Emailadresse:</label>
							<input id="Emailadresse" type="text" name="Emailadresse" placeholder="Emailadresse" required>
							<label class="Passwort" for="Passwort">Passwort:</label>
							<input id="passwort" type="password" name="Passwort" placeholder="Passwort" required>
							<button class="btnlogin" type="submit">Login</button>
							<button class="btnlogout" type="submit">Logout</button>
						</div>
				</fieldset>
	</form>');
	
	echo('<p>' . $msg . '</p>
	</div>');
?>