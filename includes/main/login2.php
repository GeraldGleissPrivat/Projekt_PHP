<?php
$msg="";
$conn=dbConnect();

if(count($_POST)>0){
		//$sql='SELECT * FROM tbl_user WHERE Emailadresse="'. $_POST["Emailadresse"] .'";';
		$sql=$conn->prepare('SELECT * FROM tbl_user WHERE (Emailadresse=?)');
		$sql->bind_param("s",$mailadresse);
		$mailadresse=$_POST["Emailadresse"];
		$ergebnisliste=$sql->execute();
		$ergebnisse=$sql->get_result();
		$ergebnis=dbFetch($ergebnisse);
		if($ergebnisse->num_rows==1 && password_verify($_POST["Passwort"], $ergebnis->Passwort)){
			$msg="Login erfolgreich";
		
		//ini_set('session.gc_maxlifetime',600);
		ta(ini_get('session.save_path'));
		session_start();
		$_SESSION["eingeloggt"] = true;
		
		//$sql_login='UPDATE tbl_user SET Letzter_login="' . date("Y/m/d h:i:sa") . '" WHERE IDUser="'. $ergebnis->IDUser . '"';
		$sql_login=$conn->prepare('UPDATE tbl_user SET Letzter_login=? WHERE IDUser=?');
		$sql_login->bind_param("si",$tstamp, $IDUser);
		$IDUser=$ergebnis->IDUser;
		$tstamp=date("Y/m/d h:i:sa");
		$ok=$sql_login->execute();
		
		//im VZ uploads/user wird ein Verzeichnis angelegt nach dem Muster "user_UserID"
		$pfad='../../uploads/userdata/user_' . $IDUser;
			if(!file_exists($pfad)){
				mkdir($pfad,0755,true);
			}
			header("Location: ../../uploads/dateimanager.php");
		}
		else{
			header("Location: verein2.php");
		}
}
else{
	$msg="Kein Benutzer mit diesen Logindaten vorhanden";
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
						</div>
				</fieldset>
				<a href="../../registrieren2.php">Registrieren</a>
	</form>');
echo('<p>' . $msg . '</p>');
?>