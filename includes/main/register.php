<?php
require("../config.inc.php");
require("../common.inc.php");

?>
<!doctype html>
<html lang="de">

<head>
	<title>Registrieren</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../../css/basic.css">
	<link rel="stylesheet" href="../../css/grid.css">
	<link rel="stylesheet" href="../../css/ProjektVogelzählung2.css">
 	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Gelasio:ital,wght@0,400..700;1,400..700&display=swap"
		rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Sunflower:wght@300&display=swap" rel="stylesheet">
	<script src="../../js/jquery-3.7.1.min.js"></script>
	<script src="../../js/ProjektVogelzählung2.js"></script>
</head>

	<?php 	include ('../navigationLogin.php');
			include ('../header.php');
	?>
			
			<?php
			
			$vorname="";
			if(isset($_POST["vorname"]) && strlen (($_POST["vorname"]>0)))
			{
				$vorname=$_POST["vorname"];
			}
			echo('<div class="grid">
					<form class="col-xl-6 col-lg-6 col-md-12 col-sm-12 Registrierungsformular" method="post">
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
				</fieldset>)
				</div>');

				ta($_POST);
			?>
			