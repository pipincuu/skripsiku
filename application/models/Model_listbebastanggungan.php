<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_list_bebastanggungan extends CI_Model {

	// public function get_coor(){
	// 	// $this->db->select('latitude, longitude');
	// 	$query = $this->db->get('gedung');

	// 	return $query->result();
	// }

	function tambah_list_bebastanggungan(){

		$insert = array (

				'id_list'    	=> $this->input->post('id_jenis'),
				'nama_list'  	=> $this->input->post('nama_jenis'),
				'status'  		=> $this->input->post('status')

			);
		$this->db->insert('list_bebas_tanggungan', $insert);
	}

	function tampil_list_bebastanggungan(){
		$tampil = $this->db->get('list_bebas_tanggungan');
		return $tampil->result_array();
	}

	function data_update_list_bebastanggungan($id){
		$hasil = $this->db->get_where('list_bebas_tanggungan', array('id_list'=>$id));
		return $hasil->first_row("array");
	}

	function update_list_bebastanggungan($id){
		$object = array(
			// 'id_list' 		=> $this->input->post('id_list'), 
			'nama_list' 		=> $this->input->post('nama_list'),
			'status' 			=> $this->input->post('status')
			
			
		);
		$this->db->where('id_list', $id);
		$this->db->update('list_bebas_tanggungan', $object);
	}

	function delete($id){
		$this->db->where('id_jenis', $id);
		$this->db->delete('jenis_bebas_tanggungan');
	}

	// function json_map(){
	// 	$json = $this->db->get('gedung');
	// 	return $json->result_array();

	}

}

/* End of file model_gedung.php */
/* Location: ./application/models/model_gedung.php */