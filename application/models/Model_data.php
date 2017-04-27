<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_data extends CI_Model{

  public function getData(){
    $query = $this->db->get('mahasiswa');

    return $query->result();
  }

  function tambah_mahasiswa(){

  		$insert = array (

  				'nim'    	           => $this->input->post('nim'),
  				'nama_mahasiswa'  	 => $this->input->post('nama_mahasiswa'),
  				'program_studi'		   => $this->input->post('program_studi')

  			);
  		$this->db->insert('mahasiswa', $insert);
  	}

  	function tampil_mahasiswa(){
  		$tampil = $this->db->get('mahasiswa');
  		return $tampil->result_array();
  	}

  	function data_update_mahasiswa($id){
  		$hasil = $this->db->get_where('mahasiswa', array('nim'=>$id));
  		return $hasil->first_row("array");
  	}

  	function update($id){
  		$object = array(
  			// 'id_gedung' 		=> $this->input->post('id_gedung'),
  			'nama_mahasiswa' 		=> $this->input->post('nama_mahasiswa'),
  			'program_studi' 		=> $this->input->post('program_studi')

  		);
  		$this->db->where('nim', $id);
  		$this->db->update('mahasiswa', $object);
  	}

  	function delete($id){
  		$this->db->where('nim', $id);
  		$this->db->delete('mahasiswa');
  	}
}
