<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Model_data');
  }

  function index(){
    $data['tampil']	= $this->Model_data->tampil_mahasiswa();

		// $this->load->view('navbar');
		$this->load->view('data', $data);

  }
  public function tambah_mahasiswa(){
  		if(isset($_POST['ok'])){

  			$insert = $this->Model_data->tambah_mahasiswa();
  			redirect(base_url().'data');
  		}
  		// $this->load->view('navbar');
  		$this->load->view('data');

  	}

  	function ubah_mahasiswa($id){
  		$data['hasil'] = $this->Model_data->data_update_mahasiswa($id);

  		if(isset($_POST['submit'])){
  			$this->Model_data->update($id);
  			redirect(base_url().'Data');
  		}
  		// $this->load->view('navbar');
  		$this->load->view('update_input', $data);
  	}


  	function hapus($id){
  		$this->Model_data->delete($id);
  		redirect(base_url().'Data');
  	}
}
