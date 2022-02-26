<?php 
/**
 * 
 */
class Day_indo{
	var $CI = '';
	function __construct()
	{
		$this->CI = & get_instance();
	}

	public function hari($hariInggris) {

      switch ($hariInggris) {

        case 'Sunday':
          $data = array('hari' => 'Minggu', 'code' => 7);

          return $data;

        case 'Monday':

          $data = array('hari' => 'Senin', 'code' => 1);

          return $data;

        case 'Tuesday':

          $data = array('hari' => 'Selasa', 'code' => 2);

          return $data;

        case 'Wednesday':

          $data = array('hari' => 'Rabu', 'code' => 3);

          return $data;

        case 'Thursday':

          $data = array('hari' => 'Kamis', 'code' => 4);

          return $data;

        case 'Friday':

          $data = array('hari' => 'Jumat', 'code' => 5);

          return $data;

        case 'Saturday':

          $data = array('hari' => 'Sabtu', 'code' => 6);

          return $data;

        default:

          return 'hari tidak valid';

      }
	}
  public function ampm($jam)
  { 
    if (intval(substr($jam,0,2)) < 12) {
      $data = 'AM';
    }else{
      $data = 'PM';
    }
    return $data;
  }
  public function get_all_day(){
    $day = array(
      array('hari' => 'Senin','code' => 1),
      array('hari' => 'Selasa', 'code' => 2),
      array('hari' => 'Rabu', 'code' => 3),
      array('hari' => 'Kamis', 'code' => 4),
      array('hari' => 'Jumat', 'code' => 5),
      array('hari' => 'Sabtu', 'code' => 6),
      array('hari' => 'Minggu', 'code' => 7)
    );
    return $day;
  }
}
?>