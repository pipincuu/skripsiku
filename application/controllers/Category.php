<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Model_kategori');
  }

  public function index()
  {
    if(isset($_POST['ok'])){
      $this->Model_kategori->tambah_kategori();
      redirect(base_url().'Kategori');
  }

    $this->load->view('beranda/header');
    $this->load->view('beranda/navbar');
    $this->load->view('kategori/kategori');
    $this->load->view('beranda/js');
    }


}
/* End of file Categorry.php */
/* Location: ./application/controllers/Categorry.php */
