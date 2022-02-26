<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Controller_ctl extends MY_Frontend {

	public function index()

	{

		redirect('laporan/presensi_sekolah');

	}


	public function presensi_sekolah()
	{
		// DEKLARASI JUDUL
		$this->data['title'] = 'Laporan Presensi Sekolah';

		// DEKLARASI AKTIF
		$mydata['active'] = array('parent' => 'Laporan','sub' => 'laporan/presensi_sekolah','nama_sub' => 'Laporan Presensi Sekolah');

		// DEKLARASI LOAD VIEW
		$this->data['content'] = $this->load->view('presensi_sekolah',$mydata,true);
		$this->display();
	}


	public function presensi_mapel()
	{
		// DEKLARASI JUDUL
		$this->data['title'] = 'Laporan Presensi Mapel';

		// DEKLARASI AKTIF
		$mydata['active'] = array('parent' => 'Laporan','sub' => 'laporan/presensi_mapel','nama_sub' => 'Laporan Presensi Mapel');

		// DEKLARASI LOAD VIEW
		$this->data['content'] = $this->load->view('presensi_mapel',$mydata,true);
		$this->display();
	}

	public function hukuman()
	{
		// DEKLARASI JUDUL
		$this->data['title'] = 'Laporan Hukuman';

		// DEKLARASI AKTIF
		$mydata['active'] = array('parent' => 'Laporan','sub' => 'laporan/hukuman','nama_sub' => 'Laporan Hukuman');

		// DEKLARASI LOAD VIEW
		$this->data['content'] = $this->load->view('hukuman',$mydata,true);
		$this->display();
	}

}