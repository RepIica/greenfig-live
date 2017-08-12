<?php

ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL', '');

$db = new PDO('mysql:host=127.0.0.1;dbname=green-fig','sqladmin_sammy', 'ha@$o$=EKFqv');

require 'functions.php';
?>