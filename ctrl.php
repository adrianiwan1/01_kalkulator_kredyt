<?php
require_once 'init.php';
// Skrypt kontrolera głównego jako jedyny "punkt wejścia" inicjuje aplikację.

// Inicjacja ładuje konfigurację, definiuje funkcje getConf(), getMessages() oraz getSmarty(),
// pozwalające odwołać się z każdego miejsca w systemie do obiektów konfiguracji, messages i smarty.

// Ponadto ładuje skrypt funkcji pomocniczych (functions.php) oraz wczytuje parametr 'action' do zmiennej $action.
// Wystarczy już tylko podjąć decyzję co zrobić na podstawie $action.

// Dodatkowo zmieniono organizację kontrolerów i widoków. Teraz wszystkie są w odpowiednio nazwanych folderach w app

getConf()->login_action = 'login';
/*
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
*/
getRouter()->setDefaultRoute('KredytShow'); // akcja/ścieżka domyślna
getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

getRouter()->addRoute('KredytShow',    'KredytCtrl',  ['user','admin']);
getRouter()->addRoute('KredytCompute', 'KredytCtrl',  ['user','admin']);
getRouter()->addRoute('login',       'LoginCtrl');
getRouter()->addRoute('logout',      'LoginCtrl', ['user','admin']);

getRouter()->go();