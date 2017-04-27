<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {

  public function __construct(){
		parent::__construct();
		$this->load->model('Model_data');
	}

  public function index()
  {
    $this->load->view('navbar');
  	$this->load->view('home');
  }

  public function input(){

		if(isset($_POST['submit'])){
			$this->Model_data->tambah_mahasiswa();
		}

		$this->load->view('admin/navbar');
		$this->load->view('admin/data');
	}

}

/* End of file ControllerName.php */
/* Location: ./application/controllers/ControllerName.php */
