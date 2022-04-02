<?php

//Skrypt uruchamiający akcję wykonania obliczeń kalkulatora
// - należy zwrócić uwagę jak znacząco jego rola uległa zmianie
//   po wstawieniu funkcjonalności do klasy kontrolera

require_once dirname(__FILE__).'/../config.php';

//załaduj kontroler
require_once $conf->root_path.'/app/KredytCtrl.class.php';

//utwórz obiekt i użyj
$ctrl = new KredytCtrl();
$ctrl->process();
/*
require_once dirname(__FILE__) . '/../config.php';

include _ROOT_PATH . '/app/security/check.php';

function getParam(&$kw, &$lat, &$procent)
{
    $kw = isset($_REQUEST['kw']) ? $_REQUEST['kw'] : null;
    $lat = isset($_REQUEST['lat']) ? $_REQUEST['lat'] : null;
    $procent = isset($_REQUEST['procent']) ? $_REQUEST['procent'] : null;
    
}

function validate(&$kw, &$lat, &$procent, &$messages)
{
    if (!(isset($kw) && isset($lat) && isset($procent))) {
        return false;
    }
    if ($kw == "") {
        $messages[] = 'Nie podano kwoty kredytu';
        return false;
    }
    if ($lat == "") {
        $messages[] = 'Nie podano ilosci lat';
        return false;
    }
    if ($procent == "") {
        $messages[] = 'Nie podano procentu porzyczki';
        return false;
    }
    
    if (is_numeric($kw)==false){
        $messages[] = "Kwota kredytu nie jest liczbą";
        return false;
    }
    if (is_numeric($lat)==false){
        $messages[] = "Ilość lat nie jest liczbą";
        return false;
    }
    if (is_numeric($procent)==false){
        $messages[] = "Procent lat nie jest liczbą";
        return false;
    }
    
    return true;
}

function logic(&$kw,&$lat,&$procent,&$messages, &$result) {

    $kw = floatval($kw);
    $lat = intval($lat);
    $procent = intval($procent);


    $pr = $procent * 0.01;

    $calosc = ($kw * $pr) + $kw;
    $result = round($calosc / ($lat * 12), 2);
}

$kw=null;
$lat=null;
$procent = null;
$result = null;
$messages=array();

getParam($kw, $lat, $procent);

if(validate($kw, $lat, $procent,$messages))
{
    logic($kw, $lat, $procent,$messages,$result);
    
}
include _ROOT_PATH .'/app/kredyt_view.php';
*/