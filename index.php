<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();


// include config
require('config.php');
require('classes/Messages.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');


require('controllers/Home.php');
require('controllers/Users.php');
require('controllers/Shares.php');

require('models/HomeModel.php');
require('models/UserModel.php');
require('models/ShareModel.php');



$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
//
if ($controller){
    $controller->executeAction();
}