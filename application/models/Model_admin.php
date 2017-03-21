<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {

	public function getAll(){
		$data =  $this->db->get('admin');
		return $data->result();
	}

	public function get($id){
		$data = $this->db->get_where('admin', array('id_admin'=>$id));
		return $data->first_all();
	}

	public function insert(){
		$object = array(
			"id_admin" 	=> $this->input->post('id_admin'),
			"nama" 			=> $this->input->post('nama'),
			"username" 	=> $this->input->post('username'),
			"password" 	=> $this->input->post('password'),
			"alamat"		=> $this->input->post('alamat'),
			"notelepon" => $this->input->post('notelepon')
		);
		$this->db->insert('admin', $object);
	}

	public function update($id){
		$object = array(
		"nama" 			=> $this->input->post('nama'),
		"username" 	=> $this->input->post('username'),
		"password" 	=> $this->input->post('password'),
		"alamat"		=> $this->input->post('alamat'),
		"notelepon" => $this->input->post('notelepon')
	  );
		$this->db->where('id_admin', $id);
		$this->db->update('admin', $object);
	}

	public function delete($id){
		$this->db->where('id_admin', $id);
		$this->db->delete('admin');
	}

	public function login(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$data = $this->db->get_where('admin', array('username'=>$username, 'password'=>$password));

			if(count($data)>=1){
				return $data->first_row();
			}else{
				return NULL;
			}

	}

}

/* End of file Model_admin.php */
/* Location: ./application/models/Model_admin.php */
