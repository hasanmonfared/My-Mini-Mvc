<?php

// for autoload composer
require "vendor/autoload.php";
// for env file
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

// add url
define('URL', $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["HTTP_HOST"] . "/My-Mini-Mvc");// . $_SERVER["REQUEST_URI"]);
define('URL_JS', '/libs/asstes/js');
define('URL_CSS', '/libs/asstes/css');
// requrired base file
require_once "libs/Model.php";
require_once "libs/View.php";
require_once "libs/Controller.php";

require "libs/Routing.php"
?>