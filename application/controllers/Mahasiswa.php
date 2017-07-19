<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller{

  var $API=" ";

  public function __construct()
  {
    parent::__construct();
    $this->API="http://localhost/skripsiku-perpus";
    //Codeigniter : Write Less Do More
  }

  function index(){

  }

  public function detail($nim){

    // ambil data dari service perpustakaan berdasarkan NIM
    $service = $this->curl->simple_get($this->API.'/Sirkulasi/data_mhs/'.$nim);

    // karena data berupa json hrus d rubah menjadi array
    $data_perpus = json_decode($service);

    // memasang status apakah mahasiswa ada tanggungan
    $status = "";
    foreach ($data_perpus as $key => $value) {
      if($value->status_peminjaman=="belum lunas"){
        $status = "Masih ada Tanggungan";
      }else{ $status="Tidak ada Tanggungan"; }
    }

    $data['body'] = "body-normal";
    $data['perpus'] = $data_perpus;
    $data['kemahasiswaan'] = "";
    $data['status_perpus'] = $status;

    // echo $status;
    $this->load->view('template', $data);
    $this->load->view('navbar');
    $this->load->view('mahasiswa/mahasiswa', $data);
    $this->load->view('javascript');
  }

}

?>
