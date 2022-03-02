<?php
require_once dirname(__FILE__) . '/../../config.php';
//*functions

function getParams(&$form)
{
    $form['login'] = $_SESSION['login'] ?? null;
    $form['passwd'] = $_SESSION['passwd'] ?? null;
}

function validation(&$form, &$messages)
{
if (!isset($form['login']) && isset($form['passwd'])) {
    include _ROOT_PATH . '/app/security/login_view.php';
    return false;
    exit();
}


if ($form['login'] == "") {
    $messages[] = 'Nie podano loginu';
}
if ($form['passwd'] == "") {
    $messages[] = 'Nie podano hasła';
}

if (count ( $messages ) > 0) return false;

if ($form['login'] == "admin" && $form['passwd'] == "admin") {
    session_start();
    $_SESSION['role'] = 'admin';
    return true;
}

if ($form['login'] == "user" && $form['passwd'] == "user") {
    session_start();
    $_SESSION['role'] = 'user';
    return true;
}
$messages [] = 'Niepoprawny login lub hasło';
	return false; 
}
// *body
$form = array();
$messages = array();

getParams($form);

if(!validation($form,$messages)){
    include _ROOT_PATH.'/app/security/login_view.php';
}else
{
    header("Location: "._APP_URL);
}

