<?php



require_once 'config.php';


var_dump(session_status());


switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "As sesssões estão desabilitadas";
		break;
								
	case PHP_SESSION_NONE:
		echo "Sessão habilitada mas não iniciada";
		break;

	case PHP_SESSION_ACTIVE:
		echo "Sessão habilitada e iniciada";
		break;		
}

?>