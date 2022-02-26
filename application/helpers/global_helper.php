<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

function parse_raw_http_request(array &$a_data)

{

  // read incoming data

  $input = file_get_contents('php://input');



  // grab multipart boundary from content type header

  preg_match('/boundary=(.*)$/', $_SERVER['CONTENT_TYPE'], $matches);

  $boundary = $matches[1];



  // split content by boundary and get rid of last -- element

  $a_blocks = preg_split("/-+$boundary/", $input);

  array_pop($a_blocks);



  // loop data blocks

  foreach ($a_blocks as $id => $block)

  {

    if (empty($block))

      continue;



    // you'll have to var_dump $block to understand this and maybe replace \n or \r with a visibile char



    // parse uploaded files

    if (strpos($block, 'application/octet-stream') !== FALSE)

    {

      // match "name", then everything after "stream" (optional) except for prepending newlines 

      preg_match("/name=\"([^\"]*)\".*stream[\n|\r]+([^\n\r].*)?$/s", $block, $matches);

    }

    // parse all other fields

    else

    {

      // match "name" and optional value in between newline sequences

      preg_match('/name=\"([^\"]*)\"[\n|\r]+([^\n\r].*)?\r$/s', $block, $matches);

    }

    $a_data[$matches[1]] = $matches[2];

  }        

}



function http_parse_headers( $header )

{

    $retVal = array();

    $fields = explode("\r\n", preg_replace('/\x0D\x0A[\x09\x20]+/', ' ', $header));

    foreach( $fields as $field ) {

        if( preg_match('/([^:]+): (.+)/m', $field, $match) ) {

            $match[1] = preg_replace('/(?<=^|[\x09\x20\x2D])./e', 'strtoupper("\0")', strtolower(trim($match[1])));

            if( isset($retVal[$match[1]]) ) {

                $retVal[$match[1]] = array($retVal[$match[1]], $match[2]);

            } else {

                $retVal[$match[1]] = trim($match[2]);

            }

        }

    }

    return $retVal;

}



function arrWeekDay($key=""){

  $arr = array(

    0 => 'Min',

    1 => 'Sen',

    2 => 'Sel',

    3 => 'Rab',

    4 => 'Kam',

    5 => 'Jum',

    6 => 'Sab'

  );



  if($key){

    return $arr[$key];

  }else{

    return $arr;

  }

  

}



function reformatDate($date, $from_format = 'd/m/Y', $to_format = 'Y-m-d') {

  $date_aux = date_create_from_format($from_format, $date);

  return date_format($date_aux,$to_format);

}

function get_menu($id_role = NULL)
{
  $ci=get_instance();
  if ($id_role != NULL) {
    $cek_role = $ci->db->get_where('role',['ID_ROLE' => $id_role])->row();
    if ($cek_role) {
      if ($cek_role->ACCESS != 'all') {
        $array = json_decode($cek_role->ACCESS);
        $ci->db->select('*');
        $ci->db->from('menu');
        $ci->db->where('AKTIF','Y');
        $ci->db->where_in('ID_MENU',$array);
        $ci->db->order_by('URUTAN','ASC');
        $data = $ci->db->get();
        return $data->result();
      }else{
        $ci->db->select('*');
        $ci->db->from('menu');
        $ci->db->where('AKTIF','Y');
        $ci->db->order_by('URUTAN','ASC');
        $data = $ci->db->get();
        return $data->result();
      }
    }else{
      redirect('auth/un_role');
    }
  }else{
    redirect('auth/un_role');
  }
}

function get_submenu($id_menu = NULL)
{
  $ci=get_instance();
  if ($id_menu != NULL) {
    $access = $ci->db->get_where('role',['ID_ROLE' => $ci->session->userdata('gds_role_id')])->row();
    if ($access->ACCESS == 'all') {
     $submenu = $ci->db->get_where('submenu',['ID_MENU' => $id_menu,'AKTIF' => 'Y'])->result();
    }elseif($access->ACCESS != NULL){
      $array = json_decode($access->ACCESS);
      $ci->db->select('*');
      $ci->db->from('submenu');
      $ci->db->where_in('ID_SUBMENU',$array[$id_menu]);
      $ci->db->where('AKTIF','Y');
      $submenu = $ci->db->get()->result();
    }else{
      $submenu = NULL;
    }
     return $submenu;
  }
}


function ifnull($value=NULL,$ganti='-')
{
  if ($value == NULL) {
    return $ganti;
  }else{
    return $value;
  }
}

function get_hari($code=NULL)
{
    $data[1]['hari'] = 'senin';
    $data[1]['code'] = 1;
    $data[2]['hari'] = 'selasa';
    $data[2]['code'] = 2;
    $data[3]['hari'] = 'rabu';
    $data[3]['code'] = 3;
    $data[4]['hari'] = 'kamis';
    $data[4]['code'] = 4;
    $data[5]['hari'] = 'jumat';
    $data[5]['code'] = 5;
    $data[6]['hari'] = 'sabtu';
    $data[6]['code'] = 6;
    $data[0]['hari'] = 'minggu';
    $data[0]['code'] = 0;
  if ($code == NULL) {
    return $data;
  }else{
    if ($code < 7) {
      return $data[$code];
    }else{
      return 'data hari todak tersedia';
    }
  }
}