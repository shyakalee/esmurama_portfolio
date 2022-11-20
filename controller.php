<?php

require_once ("users/v1/include/initialize.php");

$user = new User();
@$result=$user::checkAuthentication($_SESSION['test']);
if(!$result) {
    redirect(web_root.'login.php?login=true');
}

$contents='home.php';
$view = (isset($_GET['route']) && $_GET['route'] != '') ? $_GET['route'] : '';


switch ($view) {
 
	case 'news_details' :
        $title="Dashboard";	
        echo "ttttt";
		$contents='views/dashboard.php';		
		break;

   
 	
	default :
        $title="Dashboard";		
		$contents='views/dashboard.php';			

}

require_once("views/templates.php");


?>