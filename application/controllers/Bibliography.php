<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bibliography extends CI_Controller {

  public function index()
  {
    $this->load->view('beranda/header');
    $this->load->view('beranda/navbar');
    $this->load->view('bibli');
    $this->load->view('js');
  }

}

/* End of file Bibliography.php */
/* Location: ./application/controllers/Bibliography.php */
