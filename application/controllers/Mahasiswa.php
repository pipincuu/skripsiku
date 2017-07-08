<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller{

  public function __construct(){
  		parent::__construct();
  		$this->load->model('Model_data');
  	}


  function index()
  {
    // $this->load->view('navbar');
  	$this->load->view('input');
  }

  // ===========================================================================
  // SERVICES
  // ===========================================================================

  

}
