<?php
namespace app\controllers;

use DateTime;
use PDOException;

//require_once $conf->root_path.'/lib/Smarty/Smarty.class.php';
//require_once $conf->root_path.'/lib/Messages.class.php';
//require_once $conf->root_path.'/app/kredyt/KredytForm.class.php';
//require_once $conf->root_path.'/app/kredyt/KredytResult.class.php';

//require_once 'KredytForm.class.php';
//require_once 'KredytResult.class.php';

use app\forms\KredytForm;
use app\transfer\KredytResult;


class KredytCtrl
{
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku
	

    public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new KredytForm();
		$this->result = new KredytResult();
		
	}

    public function getParams(){
		$this->form->kw = getFromRequest('kw');
		$this->form->lat = getFromRequest('lat');
		$this->form->procent = getFromRequest('procent');
	}

    public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->kw ) && isset ( $this->form->lat ) && isset ( $this->form->procent ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false; //zakończ walidację z błędem
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->kw == "") {
			getMessages()->addError('Nie podano kwoty kredytu');
		}
		if ($this->form->lat == "") {
			getMessages()->addError('Nie podano ilości lat');
		}
        if ($this->form->procent == "") {
			getMessages()->addError('Nie podano wartości procentowej');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! getMessages()->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->kw )) {
				getMessages()->addError('Kwota kredytu nie jest liczbą');
			}
			
			if (! is_numeric ( $this->form->lat )) {
				getMessages()->addError('Ilość lat nie jest liczbą');
			}
            if (! is_numeric ( $this->form->procent )) {
				getMessages()->addError('Procent nie jest liczbą');
			}
		
		return ! getMessages()->isError();
	}
}

    public function action_KredytCompute(){

		$this->getparams();
		
		if ($this->validate()) {
				if (inRole('admin'))
				{
					//konwersja parametrów na int
					$this->form->kw = floatval($this->form->kw);
					$this->form->lat = intval($this->form->lat);
					$this->form->procent = intval($this->form->procent);
					getMessages()->addInfo('Parametry poprawne.');
						
					//wykonanie operacji


					//$pr = $procent * 0.01;

					$calosc = ($this->form->kw * $this->form->procent) + $this->form->kw;
					$this->result->result = $calosc/($this->form->lat * 12);			
					getMessages()->addInfo('Wykonano obliczenia.');
					try{
						getDB()->insert("wynik", [
							"kwota" => $this->form->kw,
							"lat" => $this->form->lat,
							"procent" => $this->form->procent,
							"rata" => $this->result->result,
							"data" => date("Y-m-d H:i:s")
						]);
					}catch(PDOException $e){
						getMessages()->addError('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());
					}
				}else{
					getMessages()->addError('Tylko administrator może wykonać tę operację');
					
				}
				
		}
		
		$this->generateView();
	}

	public function action_KredytShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}

    public function generateView(){
		
		
		global $user;

		getSmarty()->assign('user',unserialize($_SESSION['user']));
				
		getSmarty()->assign('page_title','Super kalkulator');

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);;
		
		getSmarty()->display('KredytView.tpl');
	}
	

}
?>