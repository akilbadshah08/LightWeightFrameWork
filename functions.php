<?php 
global $portal_dir,$view_dir;
$portal_dir=dirname(__FILE__);
$view_dir=dirname(__FILE__)."/views";

function view($name,$data=[]){
extract($data);	
global $portal_dir,$view_dir;	
require_once $view_dir.'/'.$name.".php";
}
require_once "controllers/core.php";

include_once "controllers/".$_GET['module'].".php";


