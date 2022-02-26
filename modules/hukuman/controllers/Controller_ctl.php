<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Controller_ctl extends MY_Frontend {

	public function index()
	{
		redirect('hukuman/manage');

	}

	public function manage()
	{
		// DEKLARASI JUDUL
		$this->data['title'] = 'Managemen Hukuman';

		// DEKLARASI AKTIF
		$mydata['active'] = array('parent' => 'Hukuman','sub' => 'hukuman/manage','nama_sub' => 'Managemen Hukuman');

		// DEKLARASI LOAD VIEW
		$this->data['content'] = $this->load->view('index',$mydata,true);
		$this->display();
	}


	public function pembagian()
	{
		// DEKLARASI JUDUL
		$this->data['title'] = 'Pembagian Hukuman';

		// DEKLARASI AKTIF
		$mydata['active'] = array('parent' => 'Hukuman','sub' => 'hukuman/pembagian','nama_sub' => 'Pembagian Hukuman');

		// DEKLARASI LOAD VIEW
		$this->data['content'] = $this->load->view('pembagian',$mydata,true);
		$this->display();
	}

}