<?php



function is_logged_in(){

	$obj =& get_instance();

	$base_url = $obj->config->item('base_url');



	$ci=get_instance();
	if ($ci->session->userdata('gds_id_user')) {
		$get_data_user = $ci->db->get_where('user',['ID_USER' => $ci->session->userdata('gds_id_user')])->row();
		if ($ci->session->userdata('gds_role_id') != $get_data_user->ROLE) {
			$ci->session->set_userdata('gds_role_id',$get_data_user->ROLE);
		}
		if (!$get_data_user) {
			redirect('auth');
		}
	}else{
		redirect('auth');
	}

}

function cek_role($cek = NULL)
{
	$ci=get_instance();

	$data = $ci->db->get_where('role',['ID_ROLE' => $ci->session->userdata('gds_role_id')])->row();

	if ($cek == NULL) {
		return $data;
	}else{
		if ($data->PAGE != $cek) {
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
}