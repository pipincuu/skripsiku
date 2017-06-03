<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Model_anggota');
  }

  public function index(){

    $this->load->view('beranda/header');
    $this->load->view('beranda/navbar');
    $this->load->view('anggota');
    $this->load->view('beranda/js');

    if(isset($_POST['ok'])){
      $this->Model_anggota->tambah_anggota();
      redirect(base_url().'Anggota');
    }

  }
}

/* End of file TambahAnggota.php */
/* Location: ./application/controllers/TambahAnggota.php */
