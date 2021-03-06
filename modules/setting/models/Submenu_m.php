<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Submenu_m extends MY_Model{

  	protected $_table_name = 'submenu';
    protected $_primary_key = 'ID_SUBMENU';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_submenu($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_submenu($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_submenu_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_submenu($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_submenu($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_submenu($id){
		return parent::delete($id);
	}

}