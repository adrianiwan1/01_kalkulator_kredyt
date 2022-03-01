<?php
require_once dirname(__FILE__) . '/../config.php';

$kw = $_REQUEST['kw'];
$lat = $_REQUEST['lat'];
$procent = $_REQUEST['procent'];
$result = "";

if (!(isset($kw) && isset($lat) && isset($procent))) {
    $messages[] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}
if ($kw == "") {
    $messages[] = 'Nie podano kwoty kredytu';
}
if ($lat == "") {
    $messages[] = 'Nie podano ilosci lat';
}
if ($procent == "") {
    $messages[] = 'Nie podano procentu porzyczki';
}
if (empty($messages)) {

    $kw = floatval($kw);
    $lat = intval($lat);
    $procent = intval($procent);

    $pr = $procent * 0.01;
    $calosc = ($kw * $pr) + $kw;
    $result = strval(round($calosc / ($lat * 12), 2));
}
include 'kredyt_view.php';
