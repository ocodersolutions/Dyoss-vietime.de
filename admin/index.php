<?php
/* 
 * Project: oCoder Framework
 * File: index.php
 * Purpose: landing page which handles all requests
 * Author: Trung Hoang
 */

//load the required classes
require("classes/defines.php");
require("classes/helper.php");
require("classes/basecontroller.php");  
require("classes/basemodel.php");
require("classes/view.php");
require("classes/viewmodel.php");
require("classes/loader.php");

//session start
session_start();

$loader = new Loader(); //create the loader object
$helper = new Helper(); //create the helper object
$controller = $loader->createController(); //creates the requested controller object based on the 'controller' URL value

$controller->executeAction(); //execute the requested controller's requested method based on the 'action' URL value. Controller methods output a View.
?>
