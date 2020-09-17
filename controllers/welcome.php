<?php 

class Welcome extends core{
public function __construct(){
	parent::__construct();
}
public function index($id){
	$data['page']='Home Page';
	$data['id']=$id;
	view('header',$data);
	view('home',$data);
	view('footer');
}

}