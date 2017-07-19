<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sirkulasi extends CI_Controller {

  var $API = "";

  public function __construct()
  {
    parent::__construct();
    // $this->API="http://localhost/skripsiku-kemahasiswaan";
    $this->API="http://localhost/kemahasiswaan"; //ganti sama link punyamu donk
    $this->load->model('Model_sirkulasi');
  }

  public function index()
  {

    $data['tampil'] = $this->Model_sirkulasi->tampil_sirkulasi();
    $data['id']     = $this->Model_sirkulasi->dpt_id();
    $data['cart']   = $this->cart->contents();

    $data_mahasiswa = $this->curl->simple_get($this->API.'/Service/get', $data);

    $data['mhs']    = json_decode($data_mahasiswa, TRUE);

    print_r($data['cart']);

    // foreach ($mhs as $key => $value) {
    //   echo $value['nama_mahasiswa']."<br>";
    // }

    $this->load->view('beranda/header');
    $this->load->view('beranda/navbar');
    $this->load->view('peminjaman/pinjam', $data);
    // $this->load->view('js');
  }


  function liat_sirkulasi(){
    $data['tampil'] = $this->Model_sirkulasi->tampil_sirkulasi();

    $this->load->view('beranda/header');
    $this->load->view('beranda/navbar');
    $this->load->view('peminjaman/daftar_peminjaman', $data);
    $this->load->view('js');
    $this->load->view('beranda/js');
  }

  public function konfirmasi($id){

    $data['id'] = $id;
    $data['detail'] = $this->Model_sirkulasi->detail_sirkulasi($id);

    // print_r($data);

    $this->load->view('beranda/header');
    $this->load->view('beranda/navbar');
    $this->load->view('peminjaman/konfirmasi_peminjaman', $data);
  }

  public function kembalikan($id){
    $this->Model_sirkulasi->kembalikan($id);
    redirect('Sirkulasi/liat_sirkulasi', 'refresh');
  }

  public function perpanjang($id){
    $this->Model_sirkulasi->perpanjang($id);
    redirect('Sirkulasi/liat_sirkulasi', 'refresh');
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

// =============================================================================
// SERVICE
// =============================================================================

public function data_mhs($nim){
  $data = $this->Model_sirkulasi->data_mhs($nim);

  // ini untuk menghasilkan json
    $this->output
    ->set_status_header(200) //header untuk service
    ->set_content_type('application/json', 'utf-8') //tipe dari data=>pake JSON
    ->set_output(json_encode($data, JSON_PRETTY_PRINT)) //hasil yang ditampilkan menggunakan json_encode dalam bentuk tampilan cantik
    ->_display();
    exit;
}

}

/* End of file Sirkulasi.php */
/* Location: ./application/controllers/Sirkulasi.php */
