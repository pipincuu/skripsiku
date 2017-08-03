<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('mahasiswa/header1');
    $this->load->view('mahasiswa/navbar1');
    $this->load->view('mahasiswa/keanggotaan');
    $this->load->view('beranda/js');
  }

}

/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */
