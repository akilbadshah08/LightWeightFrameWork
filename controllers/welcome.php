<?php 

class Welcome extends core{
public function __construct(){
	parent::__construct();
}
public function index(){
	$data['page']='Home Page';
	view('header',$data);
	view('home',$data);
	view('footer');
}

}