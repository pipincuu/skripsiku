<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Keanggotaan extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Model_anggota');
  }

  public function index()
  {
    $this->load->view('mahasiswa/keanggotaan');
    $this->load->view('js');
  }

}

/* End of file Keanggotaan.php */
/* Location: ./application/controllers/Keanggotaan.php */
