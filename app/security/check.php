<?php
require_once dirname(__FILE__) .'/../../config.php';
session_start();

$role = isset($_SESSION['role']) ?? '';

if (!isset($_SESSION['role']) || empty($_SESSION['role'])) {
    include _ROOT_PATH.'/app/security/login.php';
    exit();
}
/* 
if (1==1)
{
    include _ROOT_PATH.'/app/security/login.php';
    exit(); 
}
*/