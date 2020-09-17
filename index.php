<?php 
include "functions.php";

require_once "controllers/core.php";

$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
//print_r($uriSegments);
//die;
include_once "controllers/".$uriSegments[2].".php";


$module=$uriSegments[2];
$page=$uriSegments[3];
$para1=isset($uriSegments[4])?$uriSegments[4]:false;
$para2=isset($uriSegments[5])?$uriSegments[5]:false;

$class = $module;
if(class_exists($class)){
	$con=new $class();	
} else {
	http_response_code(404);
	die;
}

if(method_exists($con,$page)){
	$fun=$page;
	$con->$fun($para1,$para2);
} else{
	http_response_code(404);
	die;
}
?>
