<?php

// for autoload composer
require "vendor/autoload.php";
// for env file
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();



// requrired base file
require_once "libs/Model.php";
require_once "libs/View.php";
require_once "libs/Controller.php";

?>