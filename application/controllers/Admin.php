<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  public function __construct(){
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Model_admin');
  }

  public function index(){
    $this->load->view('admin/login');
  }

  public function login(){
    $log = $this->Model_admin->login();

    // print_r($log);

    $array = array(
      'username' => $log->username,
      'id'       => $log->id_admin
    );

    $this->session->set_userdata($array);
    redirect('Dashboard', 'refresh');
  }

}

?>
