<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    
    $this->load->model('Model_sirkulasi');
    
  }

  public function index($id){

    $data['data_pinjam'] = $this->Model_sirkulasi->data_mhs($id);

    $this->load->view('mahasiswa/header1');
    $this->load->view('mahasiswa/navbar1');
    $this->load->view('mahasiswa/keanggotaan', $data);
    $this->load->view('beranda/js');
  }

}

/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */
