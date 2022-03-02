<?php
require_once dirname(__FILE__) . '/../../config.php';
$logon=false;
//$form = array();

   // $form['login'] = $_SESSION['login'];
    //$form['passwd'] = $_SESSION['passwd'];

    if ($logon==true) {
        include _ROOT_PATH . '/app/security/login_view.php';
    } else {
        include _ROOT_PATH . '/app/security/login_view.php';
    }

