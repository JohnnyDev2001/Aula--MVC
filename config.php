<?php

require "environment.php";

global $config;
global $db;

$config = array();

if(ENVIRONMENT == 'development')
{
<<<<<<< HEAD
    define("BASE_URL","http://localhost/Aula--MVC/");
    $config['dbname'] = 'jr_bank';
=======
    define("BASE_URL","http://localhost/aula--mvc/");
    $config['dbname'] = 'banco_loja';
>>>>>>> 87701e9ee51551e0ca2db78b21a53114333b0c43
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}
else
{
<<<<<<< HEAD
    define("BASE_URL","http://localhost/aula_mvc/");
    $config['dbname'] = 'jr_bank';
=======
    define("BASE_URL","http://localhost/aula--mvc/");
    $config['dbname'] = 'banco_loja';
>>>>>>> 87701e9ee51551e0ca2db78b21a53114333b0c43
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

$config['default_lang'] = 'pt-br';

$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>