<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Menu_m extends MY_Model{

  	protected $_table_name = 'menu';
    protected $_primary_key = 'ID_MENU';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_menu($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_menu($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_menu_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_menu($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_menu($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_menu($id){
		return parent::delete($id);
	}

}