<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datapinjam extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('mahasiswa/menumhs');
    $this->load->view('mahasiswa/datapinjam');
    $this->load->view('beranda/js');
  }

}

/* End of file Datapinjam.php */
/* Location: ./application/controllers/Datapinjam.php */
