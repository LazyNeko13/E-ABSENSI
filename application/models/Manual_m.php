<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Manual_m extends MY_Model{


	public function hash_my_password($id_user,$nip_nis,$password)
	{
		$data = hash('sha256', $id_user.$nip_nis.$password);
		return $data;
	}
  	

}