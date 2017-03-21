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

  function login(){
    $log = $this->Model_admin->login();
    if($log){
      redirect('HalamanUtama');
    }else{
      $this->session->set_flashdata('Username atau Password Salah');
      redirect('Welcome/index');

    }

  }

}
