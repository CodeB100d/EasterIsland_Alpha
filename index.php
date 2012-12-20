<?php

require 'libs/config.php';
require 'utils/Auth.php';
require 'utils/formvalidator.php';
require 'utils/Zebra_Pagination.php';
require 'utils/calendar.php';


// Also spl_autoload_register (Take a look at it if you like)
function __autoload($class) {
    include_once LIBS . $class .".php";
}


// Load the Bootstrap!
$bootstrap = new Bootstrap();

// Optional Path Settings
//$bootstrap->setControllerPath('app/controllers');
//$bootstrap->setModelPath();
//$bootstrap->setDefaultFile();
//$bootstrap->setErrorFile();

$bootstrap->init();

//added a comment