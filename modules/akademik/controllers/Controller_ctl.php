<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Controller_ctl extends MY_Admin {

	public function __construct() 
	{
		parent::__construct();
		// LOAD MODEL
		$this->load->model('jurusan_m');
		$this->load->model('waktu_m');
		// CEK ACCESS
		is_logged_in();
		cek_role('admin');
	}

	// BUAT LOAD VIEWS SEMUA
	public function index()

	{

		$this->load->view('waktu');

	}


	public function tingkat()

	{
		// DEKLARASI TITLE
		$this->data['title'] = 'Managemen Tingkat';

		// DEKLARASI NAVIGASI AKTIF
		$mydata['active'] = array('parent' => 'Akademik','sub' => 'akademik/tingkat','nama_sub' => 'Managemen Tingkat');

		// DEKLARASI LOAD VIEWS
		$this->data['content']= $this->load->view('tingkat',$mydata,true);
		$this->display();

	}

	public function waktu()

	{
		// DEKLARASI TITLE
		$this->data['title'] = 'Managemen Waktu';

		// DEKLARASI NAVIGASI AKTIF
		$mydata['active'] = array('parent' => 'Akademik','sub' => 'akademik/waktu','nama_sub' => 'Managemen Waktu');


		// DEKLARASI VARIABEL DATA
		$mydata['result'] = $this->waktu_m->get_all();
		// DEKLARASI LOAD VIEWS
		$this->data['content']= $this->load->view('waktu',$mydata,true);
		$this->display();

	}


	public function jadwal()

	{
		// DEKLARASI TITLE
		$this->data['title'] = 'Managemen Jadwal';

		// DEKLARASI NAVIGASI AKTIF
		$mydata['active'] = array('parent' => 'Akademik','sub' => 'akademik/jadwal','nama_sub' => 'Managemen Jadwal');

		// DEKLARASI LOAD VIEWS
		$this->data['content']= $this->load->view('jadwal',$mydata,true);
		$this->display();

	}


	public function pelajaran()

	{
		// DEKLARASI TITLE
		$this->data['title'] = 'Managemen Pelajaran';

		// DEKLARASI NAVIGASI AKTIF
		$mydata['active'] = array('parent' => 'Akademik','sub' => 'akademik/pelajaran','nama_sub' => 'Managemen Pelajaran');

		// DEKLARASI LOAD VIEWS
		$this->data['content']= $this->load->view('pelajaran',$mydata,true);
		$this->display();

	}

	public function jurusan()

	{
		// DEKLARASI TITLE
		$this->data['title'] = 'Managemen Jurusan';

		// DEKLARASI NAVIGASI AKTIF
		$mydata['active'] = array('parent' => 'Akademik','sub' => 'akademik/jurusan','nama_sub' => 'Managemen Jurusan');

		// DEKLARASI DATA
		$mydata['result'] = $this->jurusan_m->get_all();
		// DEKLARASI LOAD VIEWS
		$this->data['content']= $this->load->view('jurusan',$mydata,true);
		$this->display();

	}


	public function kelas()

	{
		// DEKLARASI TITLE
		$this->data['title'] = 'Managemen Kelas';

		// DEKLARASI NAVIGASI AKTIF
		$mydata['active'] = array('parent' => 'Akademik','sub' => 'akademik/kelas','nama_sub' => 'Managemen Kelas');

		// DEKLARASI LOAD VIEWS
		$this->data['content']= $this->load->view('kelas',$mydata,true);
		$this->display();

	}




	// FUNCTION HALAMAN JURUSAN

	// INSERT
	public function tambah_jurusan()
	{
		$nama_jurusan = $this->input->post('nama_jurusan');
		$singkat = $this->input->post('nama_pendek');

		$this->form_validation->set_rules('nama_jurusan','Nama jurusan','trim|required',array(
                        'required' => 'NIS/NIP tidak boleh kosong!'));
		$this->form_validation->set_rules('nama_pendek','Nama singkatan','trim|required',array(
                        'required' => 'Password tidak boleh kosong!'));
		if ($this->form_validation->run()==false) {
			$this->session->set_flashdata('judul','PERINGATAN');
			$this->session->set_flashdata('teks','Inputan tidak boleh kosong !');
			$this->session->set_flashdata('icon','warning');

			redirect('akademik/jurusan');
		}

		if (strlen($singkat) > 15) {
			$this->session->set_flashdata('judul','PERINGATAN');
			$this->session->set_flashdata('teks','Nama singkat terlalu panjang !');
			$this->session->set_flashdata('icon','warning');

			redirect('akademik/jurusan');
		}

		$arrInsert['NAMA_JURUSAN'] = ucwords(strtolower($nama_jurusan));
		$arrInsert['NAMA_PENDEK'] = strtoupper($singkat);
		$arrInsert['AKTIF'] = 'Y';

		$cek_insert = $this->jurusan_m->insert($arrInsert);
		if ($cek_insert) {
			$this->session->set_flashdata('judul','PEMBERITAHUAN');
			$this->session->set_flashdata('teks','Berhasil menambah jurusan!');
			$this->session->set_flashdata('icon','success');

			redirect('akademik/jurusan');
		}else{
			$this->session->set_flashdata('judul','PERINGATAN');
			$this->session->set_flashdata('teks','Gagal menambah jurusan, coba lagi nanti!');
			$this->session->set_flashdata('icon','warning');

			redirect('akademik/jurusan');
		}
	}




	// HAPUS
	public function hapus_jurusan($id = NULL,$multiple=FALSE)
	{
		if ($multiple == FALSE) {
			if ($id) {
				$cek_id = $this->jurusan_m->get_single(array('ID_JURUSAN' => $id));
				if (!$cek_id) {
					$this->session->set_flashdata('judul','PERINGATAN');
					$this->session->set_flashdata('teks','Gagal menghapus jurusan, Data yang akan anda hapus tidak tersedia!');
					$this->session->set_flashdata('icon','warning');

					redirect('akademik/jurusan');
				}else{
					// FUNC HAPUS
					$cek_hapus = $this->jurusan_m->delete($id);
					if ($cek_hapus) {
						$this->session->set_flashdata('judul','PEMBERITAHUAN');
						$this->session->set_flashdata('teks','Berhasil menghapus data!');
						$this->session->set_flashdata('icon','success');

						redirect('akademik/jurusan');
					}else{
						$this->session->set_flashdata('judul','PERINGATAN');
						$this->session->set_flashdata('teks','Gagal menghapus jurusan, Coba lagi nanti!');
						$this->session->set_flashdata('icon','warning');

						redirect('akademik/jurusan');
					}
				}
			}else{
				$this->session->set_flashdata('judul','PERINGATAN');
				$this->session->set_flashdata('teks','Gagal menghapus jurusan, Pastikan anda memilih data yang tepat!');
				$this->session->set_flashdata('icon','warning');

				redirect('akademik/jurusan');
			}
		}else{
			
		}
	}

}