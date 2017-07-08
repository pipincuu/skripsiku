<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Model_login');
  }

  public function index()
  {

  }

  public function login(){
    $log = $this->Model_login->login();

    if($log){
      $array = array(
        'id_admin'    => $log->id_admin,
        'nama_admin'  => $log->nama_admin,
        'username'    => $log->username
      );

      $this->session->set_userdata($array);
      redirect('Beranda');
    }
    else {
      $this->session->set_flashdata('username atau password salah');
      redirect('welcome/index');
    }
  }

  public function logout(){
    $this->session->sess_destroy();
    redirect(base_url().'welcome');
  }
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
