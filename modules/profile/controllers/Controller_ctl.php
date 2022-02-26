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
		$this->data['title'] = 'Profile';

		// DEKLARASI NAVIGASI AKTIF
		$mydata['active'] = array('parent' => 'Profile','sub' => 'Profil Saya');

		// DEKLARASI LOAD VIEWS
		$this->data['content'] = $this->load->view('index',$mydata,true);
		$this->display();

	}


	public function ubah_profil()

	{
		// DEKLARASI TITLE
		$this->data['title'] = 'Profile';

		// DEKLARASI NAVIGASI AKTIF
		$mydata['active'] = array('parent' => 'Profile','sub' => 'Ubah Profil');

		// DEKLARASI LOAD VIEWS
		$this->data['content'] = $this->load->view('ubah-profil',$mydata,true);
		$this->display();

	}

}