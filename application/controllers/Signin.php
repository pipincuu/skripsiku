<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signin extends CI_Controller {

  var $API = "";

  public function __construct(){
    parent::__construct();

    // set API
    $this->API="http://localhost/kemahasiswaan";

    $this->load->model('Model_data');
    // $this->load->model('Model_login');
  }

  public function index(){
    $this->load->view('mahasiswa/login');
    $this->load->view('beranda/js');
  }

  public function proses_login(){

       $data = array(
       'username'=>$this->input->post('username'),
       'password'=>$this->input->post('password'),
     );

      //send POST to service
      $insert = $this->curl->simple_post($this->API.'/Service/login', $data, array(CURLOPT_BUFFERSIZE => 10));
      $convert = json_decode($insert);

      if(count($convert)>=1){

      //set session
      $array = array(
        'nim'   => $convert->nim,
        'nama'  => $convert->nama_mahasiswa,
      );

      $this->session->set_userdata($array);
      redirect('Mahasiswa', 'refresh');
    }else{

      redirect('Signin', 'refresh');
    }
    }

    public function logout (){
      $this->session->sess_destroy();
      redirect(base_url(), 'refresh');
    }


}

/* End of file Signin.php */
/* Location: ./application/controllers Signin.php */
