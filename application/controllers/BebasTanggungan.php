<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BebasTanggungan extends CI_Controller{

  public function __construct(){
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index(){

    $data['body'] = "body-normal";

    $this->load->view('template',$data);
    $this->load->view('navbar');
    $this->load->view('bebasTanggungan/index');
    $this->load->view('javascript');
  }

}
