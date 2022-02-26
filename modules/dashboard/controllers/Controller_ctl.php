<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Controller_ctl extends MY_Admin {

	public function __construct() 
	{
		parent::__construct();

		is_logged_in();
		cek_role('admin');
	}
	public function index()

	{
		// DEKLARASI TITLE
		$this->data['title'] = 'Dashboard';

		// DEKLARASI NAVIGASI AKTIF
		$mydata['active'] = array('parent' => 'Dashboard','sub' => 'dashboard');

		// DEKLARASI LOAD VIEWS
		$this->data['content'] = $this->load->view('index',$mydata,true);
		$this->display();

	}

}