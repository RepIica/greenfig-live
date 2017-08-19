<?php

ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL', 'http://localhost/greenfig-release');

$db = new PDO('mysql:host=localhost;dbname=green-fig','root', '');

require 'functions.php';

?>