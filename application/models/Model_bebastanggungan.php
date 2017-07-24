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
				'id_tanggungan' 		=> $this->input->post('id_tanggungan'),
				'nim'    						=> $this->input->post('nim'),
				'jenis_tanggungan' 	=> $this->input->post('jenis_tanggungan'),
				'status'						=> "belum tuntas"

			);
		$this->db->insert('bebastanggungan_mhs', $insert);
	}

	public function list_tanggungan($nim){

		$this->db->from('bebastanggungan_mhs');
		$this->db->where('nim', $nim);
		$tampil = $this->db->get();
		
		return $tampil->result();
	}

	function tampil_bebastanggungan(){
		$tampil = $this->db->get('bebastanggungan_mhs');
		return $tampil->result();
	}

	function data_update_bebastanggungan($id){
		$hasil = $this->db->get_where('bebastanggungan_mhs', array('nim'=>$id));
		return $hasil->first_row("array");
	}

	function update($id){
		$object = array(
			// 'id_tanggungan' 		=> $this->input->post('id_tanggungan');
			'nim'    						=> $this->input->post('nim'),
			'jenis_tanggungan' 	=> $this->input->post('id_tanggungan'),
			'status'						=> $this->input->post('latitude')

		);
		$this->db->where('id_tanggungan', $id);
		$this->db->update('bebastanggungan_mhs', $object);
	}

	function tuntas($id){
		$object = array(
			'status' => "tuntas"
		);
		$this->db->where('id_tanggungan', $id);
		$this->db->update('bebastanggungan_mhs', $object);
	}

	function delete($id){
		$this->db->where('id_tanggungan', $id);
		$this->db->delete('bebastanggungan_mhs');
	}

	// function json_map(){
	// 	$json = $this->db->get('gedung');
	// 	return $json->result_array();

	// }

}

/* End of file model_gedung.php */
/* Location: ./application/models/model_gedung.php */
