<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BebasTanggungan extends CI_Controller{

  var $API="";

  public function __construct(){
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Model_bebastanggungan');
    $this->API = 'http://localhost/kemahasiswaan';
  }

  function index(){

    $data['body']       = "body-normal";
    $data['tanggungan'] = $this->Model_bebastanggungan->tampil_bebastanggungan();
    $data_mahasiswa = $this->curl->simple_get($this->API.'/Service/get', $data);

    $data['mhs']    = json_decode($data_mahasiswa, TRUE);

    $this->load->view('template',$data);
    $this->load->view('navbar');
    $this->load->view('bebasTanggungan/index');
    $this->load->view('javascript');
    $this->load->view('DataTables');
  }

  public function simpan(){

    $this->Model_bebastanggungan->tambah_bebastanggungan();
    redirect('BebasTanggungan', 'refresh');

  }

  public function tuntas($id){
    $this->Model_bebastanggungan->tuntas($id);
    redirect('BebasTanggungan', 'refresh');
  }

}
