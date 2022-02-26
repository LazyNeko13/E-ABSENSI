<?php include_once("header.php");?>
<?php include_once("sidemenu.php");?>
<?php include_once("wraping.php");?>

<?php 

    echo alert_show($this->session->flashdata('judul'), $this->session->flashdata('teks'), $this->session->flashdata('icon'), $this->session->flashdata('gambar') );

?>

<?php echo $content; ?>

<?php include_once("footer.php"); ?>