<?php
function loescheVerzeichnis(string $pfad):bool {
	$r = true;
	//ta("versuche, das Verzeichnis zu löschen: " . $pfad);
	
	if(file_exists($pfad)) {
		//ja, das zu löschende Verzeichnis existiert tatsächlich
		$inhalt = scandir($pfad);
		foreach($inhalt as $d) {
			if($d!="." && $d!="..") {
				if(is_dir($pfad.$d)) {
					//ta("Verzeichnis gefunden: " . $pfad.$d . " --> rekursiv aufrufen");
					loescheVerzeichnis($pfad.$d."/");
				}
				else {
					//ta("Datei/Verknüpfung gefunden: " . $pfad.$d . " --> löschen");
					unlink($pfad.$d);
				}
			}
		}
		
		//ta("schlussendlich Verzeichnis löschen: " . $pfad);
		$r = rmdir($pfad);
	}
	
	return $r;
}
?>

