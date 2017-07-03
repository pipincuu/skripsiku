<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dataanggota extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Model_anggota');
  }

  public function index()
  {
    $data['tampil']	= $this->Model_anggota->tampil_anggota();
    $this->load->view('mahasiswa/menumhs');
    $this->load->view('mahasiswa/dataanggota', $data);
    $this->load->view('beranda/js');
  }

}

/* End of file Dataanggota.php */
/* Location: ./application/controllers/Dataanggota.php */
