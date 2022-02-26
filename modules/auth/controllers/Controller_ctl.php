<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Controller_ctl extends MY_Controller {


	// LOAD HALAMAN
	public function index()

	{
		if ($this->session->userdata('gds_id_user')) {
			redirect('dashboard');
		}
		$this->form_validation->set_rules('nis_nip','NIS/NIP','trim|required',array(
                        'required' => 'NIS/NIP tidak boleh kosong!'));
		$this->form_validation->set_rules('password','Password','trim|required',array(
                        'required' => 'Password tidak boleh kosong!'));
		if ($this->form_validation->run()==false) {
			$mydata['title'] = 'Login';
			$this->load->view('index',$mydata);
		}else{
			$this->func_login();
		}

	}



	// FUNCTION

	private function func_login()
	{
		$nis_nip=$this->input->post('nis_nip');
		$password=$this->input->post('password');

		$user= $this->user_m->get_single_user(array('NIS_NIP' => $nis_nip));
		if ($user) {
			if ($user->AKTIF == 'Y') {
				$hash_password = $this->manual_m->hash_my_password($user->ID_USER,$user->NIS_NIP,$password);
				if ($hash_password == $user->PASSWORD) {
					$this->session->set_flashdata('judul','PEMBERITAHUAN');
					$this->session->set_flashdata('teks','Anda berhasil melakukan login !');
					$this->session->set_flashdata('icon','success');


					$set_session['gds_id_user'] = $user->ID_USER;
					$set_session['gds_role_id'] = $user->ROLE;

					$this->session->set_userdata($set_session);

					redirect('dashboard');
				}else{
					$this->session->set_flashdata('nis_nip',$nis_nip);
					$this->session->set_flashdata('judul','PERINGATAN');
					$this->session->set_flashdata('teks','Password yang anda masukan salah!');
					$this->session->set_flashdata('icon','warning');

					redirect('auth');
				}
			}else{
				$this->session->set_flashdata('nis_nip',$nis_nip);
				$this->session->set_flashdata('judul','PERINGATAN');
				$this->session->set_flashdata('teks','NIS/NIP yang anda masukan tidak aktif!, Hubungi admin');
				$this->session->set_flashdata('icon','warning');

				redirect('auth');
			}
		}else{
			$this->session->set_flashdata('nis_nip',$nis_nip);
			$this->session->set_flashdata('judul','PERINGATAN');
			$this->session->set_flashdata('teks','NIS/NIP yang anda masukan tidak terdaftar!');
			$this->session->set_flashdata('icon','warning');

			redirect('auth');
		}
	}


	public function logout()
	{
		$this->session->unset_userdata('gds_id_user');
		$this->session->unset_userdata('gds_role_id');

		$this->session->set_flashdata('judul','PEMBERITAHUAN');
		$this->session->set_flashdata('teks','Anda berhasil melakukan logout !');
		$this->session->set_flashdata('icon','success');

		redirect('auth');

	}



	public function un_role()
	{
		$this->session->unset_userdata('gds_id_user');
		$this->session->unset_userdata('gds_role_id');

		$this->session->set_flashdata('judul','WARNING');
		$this->session->set_flashdata('teks','Role anda tidak teridentifikasi!');
		$this->session->set_flashdata('icon','warning');

		redirect('auth');

	}


	
}