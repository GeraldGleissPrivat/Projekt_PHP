<?php
function skaliereBild(string $pfad, int $groesse_neu):bool {
	$ok = false;
	if(file_exists($pfad)) {
		$bildinfos = getimagesize($pfad);
		//ta($bildinfos);
		$breite_alt = $bildinfos[0];
		$hoehe_alt = $bildinfos[1];
		$seitenverhaeltnis = $breite_alt/$hoehe_alt;

		if($seitenverhaeltnis>1) {
			//Querformatbild
			$breite_neu = $groesse_neu;
			$hoehe_neu = floor($breite_neu/$seitenverhaeltnis);
		}
		else {
			//Hochformatbild
			$hoehe_neu = $groesse_neu;
			$breite_neu = floor($hoehe_neu*$seitenverhaeltnis);
		}

		// ---------------------

		// ---- Dateiname: ----
		$dateiinfos = pathinfo($pfad); //ermittelt Informationen zum Pfad: Verzeichnisname, Dateiname, Dateiendung
		//ta($dateiinfos);
		$dateiname = $dateiinfos["basename"];
		$verzeichnis = $dateiinfos["dirname"] . "/" . $groesse_neu . "/";
		$pfad_neu = $verzeichnis . $dateiname;

		/* Bildname auf Basis der Bildgröße:
		$dateiname = $dateiinfos["filename"] . "_" . $groesse_neu . "." . $dateiinfos["extension"];
		$pfad_neu = $dateiinfos["dirname"] . "/" . $dateiname;
		*/

		//ta($dateiname);
		//ta($pfad_neu);

		if(!file_exists($verzeichnis)) {
			$ok = mkdir($verzeichnis,0755,true);
		}
		else {
			$ok = true;
		}
		// --------------------

		if($ok) {
			switch($bildinfos["mime"]) {
				case "image/jpeg":
					$resource_alt = imagecreatefromjpeg($pfad);
					$resource_neu = imagecreatetruecolor($breite_neu,$hoehe_neu);
					$resource_neu = imagescale($resource_alt,$breite_neu,$hoehe_neu);
					$ok = imagejpeg($resource_neu,$pfad_neu);
					break;
				case "image/png":
					$resource_alt = imagecreatefrompng($pfad);
					$resource_neu = imagecreatetruecolor($breite_neu,$hoehe_neu);
					$resource_neu = imagescale($resource_alt,$breite_neu,$hoehe_neu);
					$ok = imagepng($resource_neu,$pfad_neu);
					break;
				case "image/webp":
					$resource_alt = imagecreatefromwebp($pfad);
					$resource_neu = imagecreatetruecolor($breite_neu,$hoehe_neu);
					$resource_neu = imagescale($resource_alt,$breite_neu,$hoehe_neu);
					$ok = imagewebp($resource_neu,$pfad_neu);
					break;
				case "image/avif":
					$resource_alt = imagecreatefromavif($pfad);
					$resource_neu = imagecreatetruecolor($breite_neu,$hoehe_neu);
					$resource_neu = imagescale($resource_alt,$breite_neu,$hoehe_neu);
					$ok = imageavif($resource_neu,$pfad_neu);
					break;
				case "image/gif":
					$resource_alt = imagecreatefromgif($pfad);
					$resource_neu = imagecreate($breite_neu,$hoehe_neu);
					$resource_neu = imagescale($resource_alt,$breite_neu,$hoehe_neu);
					$ok = imagegif($resource_neu,$pfad_neu);
					break;
			}
		}
	}
	
	return $ok;
}

?>