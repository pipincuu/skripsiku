<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['body'] = "body-normal";

    $this->load->view('template', $data);
    // $this->load->view('navbar');
    $this->load->view('tabel');
    $this->load->view('javascript');
  }

}

/* End of file Form.php */
/* Location: ./application/controllers/Form.php */
