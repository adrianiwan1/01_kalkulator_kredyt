<?php
require_once dirname(__FILE__) . '/../../config.php';
//*functions

function getParamsLogin(&$form)
{
    $form['login'] = isset ($_REQUEST ['login']) ? $_REQUEST ['login'] : null;
    $form['passwd'] = $_REQUEST['passwd'] ?? null;
}

function validationLogin(&$form, &$messages)
{
    if (!(isset($form['login']) && isset($form['passwd']))) {
        return false;
    }


    if ($form['login'] == "") {
        $messages[] = 'Nie podano loginu';
    }
    if ($form['passwd'] == "") {
        $messages[] = 'Nie podano hasła';
    }

    if (count($messages) > 0) return false;

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
    $messages[] = 'Niepoprawny login lub hasło';
    return false;
}
// *body
$form = array();
$messages = array();

getParamsLogin($form);

if (!validationLogin($form, $messages)) {
    include _ROOT_PATH . '/app/security/login_view.php';
} else {
    header("Location: " . _APP_URL);
    //include _ROOT_PATH . '/index.php';
}
