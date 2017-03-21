<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_bebastanggungan extends CI_Model {

	// public function get_coor(){
	// 	// $this->db->select('latitude, longitude');
	// 	$query = $this->db->get('gedung');

	// 	return $query->result();
	// }

	function tambah_bebastanggungan(){

		$insert = array (

				'nim'    		=> $this->input->post('nim'),
				'id_list'  		=> $this->input->post('id_list'),
				'status'		=> $this->input->post('latitude')

			);
		$this->db->insert('bebastanggungan_mhs', $insert);
	}

	function tampil_bebastanggungan(){
		$tampil = $this->db->get('bebastanggungan_mhs');
		return $tampil->result_array();
	}

	function data_update_bebastanggungan($id){
		$hasil = $this->db->get_where('bebastanggungan_mhs', array('nim'=>$id));
		return $hasil->first_row("array");
	}

	function update($id){
		$object = array(
			// 'nim' 			=> $this->input->post('nim'), 
			'id_list' 			=> $this->input->post('id_list'),
			'status' 			=> $this->input->post('status')

			
		);
		$this->db->where('nim', $id);
		$this->db->update('bebastanggungan_mhs', $object);
	}

	function delete($id){
		$this->db->where('nim', $id);
		$this->db->delete('bebastanggungan_mhs');
	}

	// function json_map(){
	// 	$json = $this->db->get('gedung');
	// 	return $json->result_array();

	}

}

/* End of file model_gedung.php */
/* Location: ./application/models/model_gedung.php */