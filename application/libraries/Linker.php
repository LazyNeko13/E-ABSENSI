<?php  
class Linker{
	var $CI;
    var $base_link = "";
    var $base_url = "";
    public function __construct()
	{
        $this->CI = & get_instance();
        $this->base_link = "http://localhost/alphatech_lms_sma/data/";
        $this->base_url = base_url();
    }
    public function img_default($gambar){
        $link = $this->base_link.'default/'.$gambar;
        return $link;
    }
    public function img_splash($gambar){
        $link = $this->base_link.'splash/'.$gambar;
        return $link;
    }
    public function img_banner($id_sekolah,$gambar){
        $link = $this->base_link.'sekolah_'.$id_sekolah.'/banner/'.$gambar;
        return $link;
    }
    public function img_konten($id_sekolah,$gambar,$date){
        $dt = date_create($date);
        $tahun = date_format($dt,"Y");
        $bulan = date_format($dt,"m");
        $link = $this->base_link.'sekolah_'.$id_sekolah.'/konten/'.$tahun.'/'.$bulan.'/'.$gambar;
        return $link;
    }
}
?>