<?php
/**
 * Front Controller
 *
 */

//Общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);

//Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once (ROOT.'/components/Autoload.php');


$test = new TestController();
 $test->arrayItem();
 $test->showUsers();