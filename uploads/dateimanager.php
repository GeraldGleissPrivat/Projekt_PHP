<?php
//ein Dateiupload ist nur bei erfolgreichem login möglich
//im VZ uploads/user wird ein Verzeichnis angelegt nach dem Muster "user_UserID"
require("../includes/common.inc.php");
require("../includes/config.inc.php");
require("../includes/db.inc.php");
ta(ini_get('session.save_path'));
session_start();
if($_SESSION["eingeloggt"]===true){
	ta(ini_get("session.gc_maxlifetime"));
echo('<p>Eigenlogt!!!!' . date(DATE_RFC822) . '</p>');
}
?>