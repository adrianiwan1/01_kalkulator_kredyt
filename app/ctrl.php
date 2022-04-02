<?php
require_once dirname (__FILE__).'/../config.php';

$action = $_REQUEST['action'];

//2. wykonanie akcji
switch ($action) {
	default : // 'calcView'
	    // załaduj definicję kontrolera
		include_once $conf->root_path.'/app/calc/KredytCtrl.class.php';
		// utwórz obiekt i uzyj
		$ctrl = new KredytCtrl ();
		$ctrl->generateView ();
	break;
	case 'kredytCompute' :
		// załaduj definicję kontrolera
		include_once $conf->root_path.'/app/calc/KredytCtrl.class.php';
		// utwórz obiekt i uzyj
		$ctrl = new KredytCtrl ();
		$ctrl->process ();
	break;
	case 'action1' :
		// zrób coś innego ...
	break;
	case 'action2' :
		// zrób coś innego ...
	break;
}