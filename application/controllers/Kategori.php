<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Model_kategori');
  }

  public function index()
  {
    $data['tampil']	= $this->Model_kategori->tampil_kategori();

    $this->load->view('beranda/header');
    $this->load->view('beranda/navbar');
    $this->load->view('kategori/daftar_kategori', $data);
    $this->load->view('js');
  }

  function ubah_kategori($id){
		$data['hasil'] = $this->Model_kategori->data_update_kategori($id);

		if(isset($_POST['submit'])){
			$this->Model_kategori->update($id);
			redirect(base_url().'Kategori');
		}
    $this->load->view('beranda/header');
    $this->load->view('beranda/navbar');
    $this->load->view('js');
    $this->load->view('bibliography/update_kategori', $data);
	}


	function hapus_kategori($id){
		$this->Model_kategori->delete($id);
		redirect(base_url().'Kategori');
	}

}

/* End of file Kategori.php */
/* Location: ./application/controllers/Kategori.php */
