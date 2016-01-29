<?php
	$file_sh = "./PUESTA_EN_PRODUCCION.sh";

	$payload = json_decode(file_get_contents('php://input'));

	if ($payload->ref === 'refs/heads/master'){
		//shell_exec($file_sh);
		exec("./PUESTA_EN_PRODUCCION.sh {$payload->repository->url} {$payload->respository->name}", $output);
	}

