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
    $this->load->view('head');
    $this->load->view('navbar');
    $this->load->view('data', $data);
    $this->load->view('js');

  }
  public function tambah_mahasiswa(){
    $this->load->view('head');
    $this->load->view('navbar');
    $this->load->view('input');
    $this->load->view('js');


    if(isset($_POST['ok'])){
      $this->Model_data->tambah_mahasiswa();
      redirect(base_url().'Data');
    }



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

  function beranda(){
    $this->load->view('head');
    $this->load->view('navbar');
    $this->load->view('home');
    $this->load->view('js');
  }
}
