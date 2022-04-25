<?php

$conf->server_name = 'localhost:80';
$conf->server_url = 'http://'.$conf->server_name;
$conf->app_root = '/01_kalkulator_kredyt';
$conf->action_root = $conf->app_root.'/ctrl.php?action=';


//config db
$conf->db_type ='mysql';
$conf->db_server ='localhost';
$conf->db_name = 'kalk';
$conf->db_user = 'root';
$conf->db_pass = '';
$conf->db_charset = 'utf8';

//config db extends
$conf->db_port = '3306';
$conf->db_option = [ PDO::ATTR_CASE => PDO::CASE_NATURAL, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

//stale wartosci
$conf->action_url = $conf->server_url.$conf->action_root;
$conf->app_url = $conf->server_url.$conf->app_root;
$conf->root_path = dirname(__FILE__);
?>