<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signin extends CI_Controller {


  public function index()
  {
    $this->load->view('mahasiswa/login');
    $this->load->view('beranda/js');
  }

}

/* End of file Signin.php */
/* Location: ./application/controllers Signin.php */
