<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Model_bibli');
    $this->load->model('Model_detail');
  }

  public function index()
  {

    $data['buku'] = $this->Model_bibli->tampil_bibli();

    $this->load->view('beranda/header');
    $this->load->view('beranda/navbar');
    $this->load->view('beranda/dashboard', $data);
    // $this->load->view('js');
    $this->load->view('beranda/js');
  }

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
