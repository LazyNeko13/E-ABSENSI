<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Controller_ctl extends MY_Frontend {

	public function __construct() 
	{
		parent::__construct();

		// LOAD MODELS
		$this->load->model('menu_m');
		$this->load->model('submenu_m');
		is_logged_in();
	}


	public function index()
	{
		redirect('setting/halaman');

	}

	public function halaman()
	{
		// DEKLARASI JUDUL
		$this->data['title'] = 'Managemen Halaman';

		// DEKLARASI HALAMAN AKTIF
		$mydata['active'] = array('parent' => 'Setting','sub' => 'setting/halaman','nama_sub' => 'Managemen Halaman');

		// DEKLARASI DATA
		$mydata['result'] = $this->menu_m->get_menu_all();

		// DEKLARASI JS 
		$this->data['js_add'][] = '<script src="'.base_url('assets/ajax/setting.js').'"></script>';

		// DEKLARASI LOAD VIEWS
		$this->data['content'] = $this->load->view('halaman',$mydata,true);
		$this->display();
	}

	public function role()
	{
		$this->data['title'] = 'Managemen Role';

		$mydata['active'] = array('parent' => 'Setting','sub' => 'setting/role','nama_sub' => 'Managemen Role');
		$this->data['content'] = $this->load->view('role',$mydata,true);
		$this->display();
	}

	public function detail_role()
	{
		$this->data['title'] = 'Detail Role';

		$mydata['active'] = array('parent' => 'Setting','sub' => 'setting/detail_role','nama_sub' => 'Detail Role');
		$this->data['content'] = $this->load->view('detail_role',$mydata,true);
		$this->display();
	}

	public function halaman_role()
	{
		$this->data['title'] = 'Halaman Role';

		$mydata['active'] = array('parent' => 'Setting','sub' => 'setting/halaman_role','nama_sub' => 'Halaman Role');
		$this->data['content'] = $this->load->view('halaman_role',$mydata,true);
		$this->display();
	}

	public function hukuman_siswa()
	{
		$this->data['title'] = 'Managemen Hukuman';

		$mydata['active'] = array('parent' => 'Setting','sub' => 'setting/hukuman_siswa','nama_sub' => 'Managemen Hukuman');
		$this->data['content'] = $this->load->view('hukuman_siswa',$mydata,true);
		$this->display();
	}





	// FUNCTION
	public function on_off()
	{
		$id = $this->input->post('id');
		$change = $this->input->post('change');
		$set['AKTIF'] = $change;
		$cek_update = $this->menu_m->update_menu($set,$id);

		// DEKLARASI HALAMAN AKTIF
		$mydata['active'] = array('parent' => 'Setting','sub' => 'setting/halaman','nama_sub' => 'Managemen Halaman');
		if ($cek_update) {
			$this->load->view('../../../themes/main_frontend/sidemenu.php');
		}else{
			$this->load->view('../../../themes/main_frontend/sidemenu.php');
		}
	}
}	