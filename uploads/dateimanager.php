<?php
//ein Dateiupload ist nur bei erfolgreichem login möglich
//im VZ uploads/user wird ein Verzeichnis angelegt nach dem Muster "user_UserID"
require("../includes/common.inc.php");
require("../includes/config.inc.php");
require("../includes/db.inc.php");
ta(ini_get('session.save_path'));
ta($_POST);
session_start();
if(!(isset($_SESSION["eingeloggt"]) && $_SESSION["eingeloggt"]===true)){
	header('Location: ../includes/main/verein2.php');
}
else{
	ta(ini_get("session.gc_maxlifetime"));
	echo('<p>Eigenlogt!!!!' . date(DATE_RFC822) . '</p>');
}

if(isset($_POST["btnlogout"]) && $_POST["btnlogout"]="ausloggen"){
ta($_SESSION);
$_SESSION=array();
	if(ini_get("session.use.cookies")){
		$params=session_get_cookie_params();
					setcookie(
				session_name(),
				'',
				time()-86400, //time() ermittelt den UNIX-Timestamp
				$params["path"], // --> /
				$params["domain"], // --> aktuell: localhost
				$params["secure"], // --> nein
				$params["httponly"] // --> nein
			);
	}
	session_destroy();
}

if(!(isset($_SESSION["eingeloggt"]) && $_SESSION["eingeloggt"]===true)){
	header("LOCATION: ../includes/main/verein2.php");
}

?>
<!doctype html>
<html lang="de">
<head>
	<meta charset="utf-8">
	<title>Upload</title>
</head>
<body>
	<form method="post">
		<button class="logout" type="submit" value="ausloggen" name="btnlogout">
	</form>
</body>
</html>