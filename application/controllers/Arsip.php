<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Arsip extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Model_kategori');
        $this->load->model('Model_detail');
    $this->load->model('Model_bibli');

  }

  public function index(){

    // $data['id'] = $this->model_bibli->dpt_id();

    if(isset($_POST['ok'])){

      $insert = $this->Model_bibli->tambah_bibli();
      $this->Model_detail->insert($this->input->post('jumlah_stok_buku'));
      redirect(base_url().'Bibliography');

    }

    $data['kategori'] = $this->Model_kategori->get_data();

    $this->load->view('beranda/header');
    $this->load->view('beranda/navbar');
    $this->load->view('bibliography/bibli', $data);
    $this->load->view('beranda/js');
		}

  }


/* End of file Arsip.php */
/* Location: ./application/controllers/Arsip.php */
