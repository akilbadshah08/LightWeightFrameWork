<?php 
global $portal_dir,$view_dir,$base_url;
$portal_dir=dirname(__FILE__);
$view_dir=dirname(__FILE__)."/views";
$base_url="http://localhost/lightweightframework";


function view($name,$data=[]){
	extract($data);	
	global $portal_dir,$view_dir;	
	require_once $view_dir.'/'.$name.".php";
}
function root_url($url=""){
	global $base_url;
	if($url==''){
	return $base_url."/";	
	} else{
	return $base_url."/".$url;
	}

}
