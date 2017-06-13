<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function index()
  {
    $this->load->view('beranda/header');
    $this->load->view('beranda/navbar');
    $this->load->view('beranda/dashboard');
    $this->load->view('js');
  }

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
