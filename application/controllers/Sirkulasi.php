<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sirkulasi extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Model_sirkulasi');
  }

  public function index()
  {
    $data['tampil'] = $this->Model_sirkulasi->tampil_sirkulasi();
    $data['id']     = $this->Model_sirkulasi->dpt_id();

    $this->load->view('beranda/header');
    $this->load->view('beranda/navbar');
    $this->load->view('peminjaman/pinjam', $data);
    $this->load->view('js');
  }


  function liat_sirkulasi(){
    $data['tampil'] = $this->Model_sirkulasi->tampil_sirkulasi();

    $this->load->view('beranda/header');
    $this->load->view('beranda/navbar');
    $this->load->view('peminjaman/daftar_peminjaman', $data);
    $this->load->view('js');
  }

  // public function tambah_data_sirkulasi(){
  //   if(isset($_POST['ok'])){
  //     $id     = $this->Model_sirkulasi->master_number();
  //
  //     $insert = $this->Model_sirkulasi->tambah_sirkulasi($id);
  //     redirect(base_url().'Sirkulasi/liat_sirkulasi');
  //   }
  //   $this->load->view('beranda/header');
  //   $this->load->view('beranda/navbar');
  //   $this->load->view('peminjaman/pinjam');
  //   $this->load->view('js');
  //
  // }


	function ubah_sirkulasi($id){
		$data['hasil'] = $this->Model_sirkulasi->data_update_sirkulasi($id);

    if(isset($_POST['submit'])){
			$this->Model_sirkulasi->update_sirkulasi($id);
			redirect(base_url().'Sirkulasi/liat_sirkulasi');
		}
    $this->load->view('beranda/header');
    $this->load->view('beranda/navbar');
    $this->load->view('peminjaman/edit_peminjaman', $data);
    $this->load->view('js');
	}


	function hapus_data_sirkulasi($id){
		$this->Model_sirkulasi->hapus_sirkulasi($id);
		redirect(base_url().'Sirkulasi/liat_sirkulasi');
	}



}

/* End of file Sirkulasi.php */
/* Location: ./application/controllers/Sirkulasi.php */
