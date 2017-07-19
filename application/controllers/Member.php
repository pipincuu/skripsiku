<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    // set API
  
    $this->load->model('Model_anggota');
  }

  public function index(){
    if(isset($_POST['ok'])){
      $this->Model_anggota->tambah_anggota();
      redirect(base_url().'Anggota');
  }

    $this->load->view('beranda/header');
    $this->load->view('beranda/navbar');
    $this->load->view('membership/anggota');
    $this->load->view('beranda/js');
    }

  }

/* End of file TambahAnggota.php */
/* Location: ./application/controllers/TambahAnggota.php */
