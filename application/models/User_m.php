<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class User_m extends MY_Model{

  	protected $_table_name = 'user';
    protected $_primary_key = 'ID_USER';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_user($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_user($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_user_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_user($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_user($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_user($id){
		return parent::delete($id);
	}

}