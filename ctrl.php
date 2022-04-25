<?php
require_once 'init.php';
// Skrypt kontrolera głównego jako jedyny "punkt wejścia" inicjuje aplikację.

// Inicjacja ładuje konfigurację, definiuje funkcje getConf(), getMessages() oraz getSmarty(),
// pozwalające odwołać się z każdego miejsca w systemie do obiektów konfiguracji, messages i smarty.

// Ponadto ładuje skrypt funkcji pomocniczych (functions.php) oraz wczytuje parametr 'action' do zmiennej $action.
// Wystarczy już tylko podjąć decyzję co zrobić na podstawie $action.

// Dodatkowo zmieniono organizację kontrolerów i widoków. Teraz wszystkie są w odpowiednio nazwanych folderach w app
/*
switch ($action) {
	default : // 'calcView'
	    // załaduj definicję kontrolera
		
		// utwórz obiekt i uzyj
		include 'check.php';
		$ctrl = new app\controllers\KredytCtrl();
		$ctrl->generateView ();
	break;
	case 'login' :
		
		$ctrl = new app\controllers\LoginCtrl();
		$ctrl->doLogin();
	break;
	case 'KredytCompute' :
		// załaduj definicję kontrolera
		
		// utwórz obiekt i uzyj
		
		$ctrl = new app\controllers\KredytCtrl();
		$ctrl->process ();
	break;
	case 'logout' :
		include 'check.php';  // KONTROLA
		$ctrl = new app\controllers\LoginCtrl();
		$ctrl->doLogout();
	break;
}
*/
getConf()->login_action = 'login';

switch ($action) {
	default :
		control('app\\controllers', 'KredytCtrl',		'generateView', ['user','admin']);
	case 'login': 
		control('app\\controllers', 'LoginCtrl',	'doLogin');
	case 'KredytCompute' : 
		//zamiast pierwszego parametru można podać null lub '' wtedy zostanie przyjęta domyślna przestrzeń nazw dla kontrolerów
		control(null, 'KredytCtrl',	'process',		['user','admin']);
	case 'logout' : 
		control(null, 'LoginCtrl',	'doLogout',		['user','admin']);
}
