<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anggota extends CI_Controller {

  public function index()
  {
    $this->load->view('beranda/header');
    $this->load->view('beranda/navbar');
    // $this->load->view('beranda/dashboard');
    $this->load->view('anggota');
    $this->load->view('beranda/js');

  }

}

/* End of file Anggota.php */
/* Location: ./application/controllers/Anggota.php */
