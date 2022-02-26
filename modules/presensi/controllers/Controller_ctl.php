<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Controller_ctl extends MY_Frontend {

	public function index()

	{

		$this->load->view('waktu');

	}


	public function sekolah()

	{
		// DEKLARASI TITLE
		$this->data['title'] = 'Presensi Sekolah';

		// DEKLARASI NAVIGASI AKTIF
		$mydata['active'] = array('parent' => 'Presensi','sub' => 'presensi/sekolah','nama_sub' => 'Presensi Sekolah');

		// DEKLARASI LOAD VIEWS
		$this->data['content']= $this->load->view('presensi_sekolah',$mydata,true);
		$this->display();

	}

	public function mapel()

	{
		// DEKLARASI TITLE
		$this->data['title'] = 'Presensi Pelajaran';

		// DEKLARASI NAVIGASI AKTIF
		$mydata['active'] = array('parent' => 'Presensi','sub' => 'presensi/mapel','nama_sub' => 'Presensi Pelajaran');

		// DEKLARASI LOAD VIEWS
		$this->data['content']= $this->load->view('presensi_pelajaran',$mydata,true);
		$this->display();

	}

}