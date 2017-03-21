<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  public function __construct(){
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Model_admin');
  }

  function index(){

  }

  public function login(){
    $log = $this->Model_admin->login();

    if($log){
      $array = array(
        'id_admin' => $log->id_admin,
        'username' => $log->username,
        'nama'     => $log->nama
      );
      // print_r($array);
      $this->session->set_userdata($array);
      redirect('HalamanUtama');
    }
    else{
      $this->session->set_flashdata('Username atau Password Salah');
      redirect('Welcome/index');
    }

  }

  public function logout(){
    $this->session->sess_destroy();
    redirect('Welcome', 'refresh');
  }

}
