<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function login(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $data = $this->db->get_where('admin', array('username'=>$username));

    return $data->first_row();
  }

}
?>
