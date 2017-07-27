<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Model_sirkulasi');
    $this->load->model('Model_bibli');
  }

  public function index()
  {
    // $data['id'] = $this->Model_sirkulasi->dpt_id();
    //
    // if(isset($_POST['ok'])){

      $id 	   = $this->Model_sirkulasi->master_number();
			$insert  = $this->Model_sirkulasi->tambah_sirkulasi($id);
      $insert2 = $this->Model_sirkulasi->tambah_detail($id);

      $data = $this->cart->contents();

      foreach ($data as $key => $value) {
        $bli    = $this->Model_bibli->data_update_bibli($value['id']);
        $count  = $bli['jumlah_stok_buku'];

        $kurang_stok = $this->Model_bibli->kurang_stok($value['id'], $count);
      }

      $this->cart->destroy();


			redirect(base_url().'Sirkulasi/liat_sirkulasi');


		// }
    // $this->load->view('beranda/header');
    // $this->load->view('beranda/navbar');
    // $this->load->view('peminjaman/pinjam');
    // $this->load->view('js');
  }


}

/* End of file Peminjaman.php */
/* Location: ./application/controllers/Peminjaman.php */
