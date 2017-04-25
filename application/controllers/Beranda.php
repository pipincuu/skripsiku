<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {

  public function index()
  {
    $this->load->view('navbar');
  	$this->load->view('home');
  }

}

/* End of file ControllerName.php */
/* Location: ./application/controllers/ControllerName.php */
