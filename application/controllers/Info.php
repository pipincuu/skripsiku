<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Info extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('header');
    $this->load->view('info');
    $this->load->view('js');
  }

}

/* End of file Info.php */
/* Location: ./application/controllers/Info.php */
