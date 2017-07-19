<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Model_sirkulasi');
  }

  public function index()
  {
    // $data['id'] = $this->Model_sirkulasi->dpt_id();
    //
    // if(isset($_POST['ok'])){

      $id 	   = $this->Model_sirkulasi->master_number();
			$insert  = $this->Model_sirkulasi->tambah_sirkulasi($id);
      $insert2 = $this->Model_sirkulasi->tambah_detail($id);


			// redirect(base_url().'Sirkulasi/liat_sirkulasi');


		// }
    // $this->load->view('beranda/header');
    // $this->load->view('beranda/navbar');
    // $this->load->view('peminjaman/pinjam');
    // $this->load->view('js');
  }


}

/* End of file Peminjaman.php */
/* Location: ./application/controllers/Peminjaman.php */
