<?php
namespace app\controllers;

use PDOException;

class ResultsCtrl{
    
    private $records;

    public function action_results(){
        try{
			$this->records = getDB()->select("wynik", [
					"idwynik",
					"kwota",
					"lat",
					"procent",
                    "rata",
                    "data"
				]);
		} catch (PDOException $ex){
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($ex->getMessage());			
		}
    }
}

global $user;

getSmarty()->assign('user',unserialize($_SESSION['user']));

getSmarty()->assign('people',$this->records);
getSmarty()->display('ResultsList.tpl');