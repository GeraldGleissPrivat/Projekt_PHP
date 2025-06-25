<?php
require("includes/config.inc.php");
require("includes/db.inc.php");
require("includes/common.inc.php");

$conn=dbConnect();
$msg="";
//ta($_POST);
if(count($_POST)>0){
	if($_POST["Passwort1"]==$_POST["Passwort2"] && strlen($_POST["Passwort1"])>=8 && filter_var($_POST["mailadresse"],FILTER_VALIDATE_EMAIL)){
		$sql='SELECT * FROM tbl_user WHERE Emailadresse="' . $_POST["mailadresse"] . '"';
		/* ta($sql); */
		
		$daten=dbQuery($conn,$sql);
		$zeile=dbFetch($daten);
		/* ta($daten);
		ta(mysqli_num_rows($daten)); */
		
		if(mysqli_num_rows($daten)==0){
			$crypt=password_hash($_POST["Passwort1"],PASSWORD_DEFAULT);
			$mail=$_POST["mailadresse"];
			$vorname=pruefeAufLeer($_POST["Vorname"]);
			$nachname=pruefeAufLeer($_POST["Nachname"]);
			$sqlregister='INSERT INTO tbl_user (Emailadresse, Passwort, Vorname, Nachname) VALUES ("' . $mail . '","' . $crypt . '",' . $vorname . ',' . $nachname . ') ';
			
			$ok=dbQuery($conn,$sqlregister);
			ta($ok);
			$msg="Ein neuer Benutzer wurde angelegt";
			header("Location: includes/main/verein2.php");
		}
		else{
		 $msg="Leider konnte kein neuer Benutzer angelegt werden";
		}
	}
	else{
			$msg="Geben sie eine gülte Mailadresse sowei ein ein ausreichend langes Passwort ein.";
	}
}

?>
<!doctype html>
<html lang="de">
<head>
	<title>Registrieren</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/basic.css">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/ProjektVogelzählung2.css">
 	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Gelasio:ital,wght@0,400..700;1,400..700&display=swap"
		rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Sunflower:wght@300&display=swap" rel="stylesheet">
	<script src="js/jquery-3.7.1.min.js"></script>
	<script src="js/ProjektVogelzählung2.js"></script>
	<style>
		fieldset {
			display:grid;
			grid-template-areas: 
				"le ie ."
				"lv iv ."
				"ln in ."
				"lp ip ."
				"lp2 ip2 ."
				" . br .";
			grid-template-colums: 15em 15em 15em;
			grid-template-rows: repeat(6,2em);
			gap: 0.3em;
		}
		.le{
			grid-area: le;
		}
		.ie{
			grid-area:ie;
		}
		.lv{
			grid-area: lv;
		}
		.iv{
			grid-area: iv;
		}
		.ln{
			grid-area: ln;
		}
		.in{
			grid-area: in;
		}
		.lp{
			grid-area:lp;
		}
		.ip{
			grid-area:ip;
		}
		.lp2{
			grid-area:lp2;
		}
		.ip2{
			grid-area:ip2;
		}
		.br{
			grid-area:br;
		}
	</style>
</head>
<body>
<div class="grid">
	<form class="col-xl-6 col-lg-6 col-md-12 col-sm-12" method="post" name="registrieren">
		<fieldset>
			<legend>Registrieren</legend>
			<label class="le" for="mailadresse">Emailadresse:</label>
				<input type="text" class="ie" name="mailadresse" placeholder="Emailadresse" required>
			<label class="lv" for="Vorname">Vorname:</label>
				<input type="text" class="iv" name="Vorname" placeholder="Vorname">
			<label class="ln" for="Nachname">Nachname:</label>
				<input type="text" class="in" name="Nachname" placeholder="Nachname">
			<label class="lp" for="Passwort1">Passwort (min. 8 Zeichen):</label>
				<input type="password" class="ip" name="Passwort1" placeholder="Passwort" required>
			<label class="lp2" for="Passwort2">Passwort wiederholen:</label>
				<input type="password" class="ip2" name="Passwort2" placeholder="Passwort wiederholen" required>
			<button type="submit" class="br" name="registrieren">Registrieren</button>
		</fieldset>
	</form>
	<?php echo('<p>' . $msg . '</p>'); ?>
</div>
</body>
</html>
