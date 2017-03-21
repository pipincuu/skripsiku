<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_jenis_bebastanggungan extends CI_Model {

	// public function get_coor(){
	// 	// $this->db->select('latitude, longitude');
	// 	$query = $this->db->get('gedung');

	// 	return $query->result();
	// }

	function tambah_jenis_bebastanggungan(){

		$insert = array (

				'id_jenis'    	=> $this->input->post('id_jenis'),
				'nama_jenis'  	=> $this->input->post('nama_jenis')
				

			);
		$this->db->insert('jenis_bebas_tanggungan', $insert);
	}

	function tampil_jenis_bebastanggungan(){
		$tampil = $this->db->get('jenis_bebas_tanggungan');
		return $tampil->result_array();
	}

	function data_update_jenis_bebastanggungan($id){
		$hasil = $this->db->get_where('jenis_bebas_tanggungan', array('id_jenis'=>$id));
		return $hasil->first_row("array");
	}

	function update_jenis_bebastanggungan($id){
		$object = array(
			// 'id_jenis' 		=> $this->input->post('id_jenis'), 
			'nama_jenis' 		=> $this->input->post('nama_jenis'),
			
			
		);
		$this->db->where('id_jenis', $id);
		$this->db->update('jenis_bebas_tanggungan', $object);
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