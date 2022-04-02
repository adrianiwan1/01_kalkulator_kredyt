<?php

require_once $conf->root_path.'/lib/Smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/kredyt/KredytForm.class.php';
require_once $conf->root_path.'/app/kredyt/KredytResult.class.php';


class KredytCtrl
{
	private $msgs;   //wiadomości dla widoku
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku
	private $hide_intro; //zmienna informująca o tym czy schować intro

    public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->hide_intro = false;
	}

    public function getParams(){
		$this->form->kw = isset($_REQUEST ['kw']) ? $_REQUEST ['kw'] : null;
		$this->form->lat = isset($_REQUEST ['lat']) ? $_REQUEST ['lat'] : null;
		$this->form->procent = isset($_REQUEST ['procent']) ? $_REQUEST ['procent'] : null;
	}

    public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->kw ) && isset ( $this->form->lat ) && isset ( $this->form->procent ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false; //zakończ walidację z błędem
		} else { 
			$this->hide_intro = true; //przyszły pola formularza, więc - schowaj wstęp
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->kw == "") {
			$this->msgs->addError('Nie podano kwoty kredytu');
		}
		if ($this->form->lat == "") {
			$this->msgs->addError('Nie podano ilości lat');
		}
        if ($this->form->procent == "") {
			$this->msgs->addError('Nie podano wartości procentowej');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! $this->msgs->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->kw )) {
				$this->msgs->addError('Kwota kredytu nie jest liczbą');
			}
			
			if (! is_numeric ( $this->form->lat )) {
				$this->msgs->addError('Ilość lat nie jest liczbą');
			}
            if (! is_numeric ( $this->form->procent )) {
				$this->msgs->addError('Procent nie jest liczbą');
			}
		
		return ! $this->msgs->isError();
	}
}

    public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->kw = floatval($this->form->kw);
			$this->form->lat = intval($this->form->lat);
            $this->form->procent = intval($this->form->procent);
			$this->msgs->addInfo('Parametry poprawne.');
				
			//wykonanie operacji


            //$pr = $procent * 0.01;

            $calosc = ($this->form->kw * $this->form->procent) + $this->form->kw;
            $this->result->result = $calosc/($this->form->lat * 12);			
			$this->msgs->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}

    public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Przykład 05');
		$smarty->assign('page_description','Obiektowość. Funkcjonalność aplikacji zamknięta w metodach różnych obiektów. Pełen model MVC.');
		$smarty->assign('page_header','Obiekty w PHP');
				
		$smarty->assign('hide_intro',$this->hide_intro);
		
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/kredyt/KredytView.html');
	}
	

}
?>