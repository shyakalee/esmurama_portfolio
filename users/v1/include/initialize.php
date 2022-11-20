<?php
//define the core paths
//Define them as absolute peths to make sure that require_once works as expected

//DIRECTORY_SEPARATOR is a PHP Pre-defined constants:
//(\ for windows, / for Unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'esmurama');

defined('LIB_PATH') ? null : define ('LIB_PATH',SITE_ROOT.DS.'users/v1/include');



//load the database configuration first.
require_once(LIB_PATH.DS."config.php");
require_once(LIB_PATH.DS."database.php");
require_once(LIB_PATH.DS."functions.php");
require_once(LIB_PATH.DS."sessions.php");

//users defined classes
require_once(LIB_PATH.DS."users.php");
require_once(LIB_PATH.DS."settings.php");
require_once(LIB_PATH.DS."blogs.php");
require_once(LIB_PATH.DS."events.php");
require_once(LIB_PATH.DS."positions.php");
require_once(LIB_PATH.DS."contacts.php");
require_once(LIB_PATH.DS."comments.php");
require_once(LIB_PATH.DS."logs.php");


//eliminate reporting php errors kuri page
error_reporting(0);




//mydb configurations


?>