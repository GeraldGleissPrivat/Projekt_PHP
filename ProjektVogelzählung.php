<?php
require("includes/config.inc.php");
require("includes/common.inc.php");
require("includes/db.inc.php");

?>
<!doctype html>
<html lang="de">

<head>
	<title>Vogelzählung 2025</title>
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
</head>

	<?php 	include ('includes/navigation.php');
			include ('header2.php');
	?>

<main>
	<?php 	require ('includes/main/portrait.php');
			include ('includes/main/uebersicht.php');
			include ('includes/main/bilder.php');
			include ('includes/main/audio.php');
			include ('includes/main/video.php');
			include ('includes/main/links.php');
			
			//include ('includes/main/verein - Kopie.php');
			//$eingeloggt=false;
			//if($eingeloggt==false){
				
			//}
	?>
</main>

</html>