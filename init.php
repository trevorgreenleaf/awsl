<?php

// show me errors if there are errors
// when putting this into production comment out these two lines
error_reporting(-1);
ini_set('display_errors', 'On');

// include vendor files
require 'vendor/autoload.php';

// load up the data from the env
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();