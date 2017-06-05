<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anggota extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Model_anggota');
  }

  public function index()
  {
    $data['tampil']	= $this->Model_anggota->tampil_anggota();
    $this->load->view('beranda/header');
    $this->load->view('beranda/navbar');
    $this->load->view('membership/daftar_anggota', $data);
    $this->load->view('beranda/js');
  }

  function ubah_anggota($id){
    $data['hasil'] = $this->Model_anggota->data_update_anggota($id);

    if(isset($_POST['submit'])){
      $this->Model_anggota->update($id);
      redirect(base_url().'Anggota');
    }
    // $this->load->view('navbar');
    $this->load->view('beranda/header');
    $this->load->view('beranda/navbar');
    $this->load->view('beranda/js');
    $this->load->view('membership/update_anggota', $data);
  }


  function hapus_anggota($id){
    $this->Model_anggota->delete($id);
    redirect(base_url().'Anggota');
  }
}




/* End of file Anggota.php */
/* Location: ./application/controllers/Anggota.php */
