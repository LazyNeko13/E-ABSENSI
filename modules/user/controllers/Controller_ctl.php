<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Controller_ctl extends MY_Frontend {

	public function __construct() 
	{
		parent::__construct();

		is_logged_in();
	}

	public function index()

	{
		redirect('user/siswa');

	}

	public function siswa()

	{
		// DEKLARASI JUDUL
		$this->data['title'] = 'Managemen Siswa';

		// DEKLARASI NAVIGASI AKTIF
		$mydata['active'] = array('parent' => 'User','sub' => 'user/siswa','nama_sub' => 'Managemen Siswa');

		// DEKLARASI DATA
		$mydata['result'] = $this->user_m->get_user_all(array('ROLE' => 2));

		// DEKLARASI LOAD VIEW
		$this->data['content'] = $this->load->view('index',$mydata,true);
		$this->display();

	}

	public function staf()

	{
		$this->data['title'] = 'Managemen Staf';
		$mydata['active'] = array('parent' => 'User','sub' => 'user/staf','nama_sub' => 'Managemen Staf');
		$this->data['content'] = $this->load->view('staf',$mydata,true);
		$this->display();

	}

}