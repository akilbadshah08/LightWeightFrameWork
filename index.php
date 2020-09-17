<?php 
include "functions.php";
$module=$_GET['module'];
$page=$_GET['page'];
$para1=isset($_GET['para1'])?$_GET['para1']:false;
$para2=isset($_GET['para2'])?$_GET['para2']:false;

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