<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Arsip extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Model_bibli');
  }

  public function index(){

    if(isset($_POST['ok'])){

      $insert = $this->Model_bibli->tambah_bibli();
      redirect(base_url().'Bibliography');
    }
    $this->load->view('beranda/header');
    $this->load->view('beranda/navbar');
    $this->load->view('bibliography/bibli');
    $this->load->view('beranda/js');
		}
  }


/* End of file Arsip.php */
/* Location: ./application/controllers/Arsip.php */
