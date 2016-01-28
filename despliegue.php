<?php
	$file_sh = "ssh jamarcas@185.42.105.34 ./PUESTA_EN_PRODUCCION.sh";

	$payload = json_decode(file_get_contents('php://input'));

	if ($payload->ref === 'refs/heads/master'){
		shell_exec($file_sh);
	}

