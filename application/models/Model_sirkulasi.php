<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_sirkulasi extends CI_Model {


      function tampil_sirkulasi(){
      $tampil = $this->db->get('sirkulasi');

      return $tampil->result_array();
  }

  	function dpt_id(){
  		$id = $this->db->get('anggota');
  		return $id->result();
  	}

  	function master_number(){
      $kode 	= "P";
  		$sql 	  = $this->db->count_all('sirkulasi')+1;
  		$acak 	= $kode.sprintf("%05s", $sql);

  		return $acak;
  	}

    function tambah_sirkulasi($id){
    $insert = array(

  				'id_pinjam'    	        => $id,
  				'nim'                   => $this->input->post('nim'),
  				'id_buku'	              => $this->input->post('id_buku'),
  				'id_detail_buku'        => $this->input->post('id_detail_buku'),
  				'tanggal_pinjam'	      => $this->input->post('tanggal_pinjam'),
          'tanggal_kembali'	      => $this->input->post('tanggal_kembali'),
          'tanggal_diperbarui'    => $this->input->post('tanggal_diperbarui'),
          'tanggal_dikembalikan'	=> $this->input->post('tanggal_dikembalikan')

  			);
  		$this->db->insert('sirkulasi', $insert);
    }

  	function data_update_sirkulasi($id){
  		$hasil = $this->db->get_where('sirkulasi', array('id_pinjam'=>$id));
  		return $hasil->first_row("array");
  	}

  	function update_sirkulasi($id){
  		$object = array(
        'nim'                   => $this->input->post('nim'),
        'id_buku'	              => $this->input->post('id_buku'),
        'id_detail_buku'        => $this->input->post('id_detail_buku'),
        'tanggal_pinjam'	      => $this->input->post('tanggal_pinjam'),
        'tanggal_kembali'	      => $this->input->post('tanggal_kembali'),
        'tanggal_diperbarui'    => $this->input->post('tanggal_diperbarui'),
        'tanggal_dikembalikan'	=> $this->input->post('tanggal_dikembalikan'),
  		);

  		$this->db->where('id_pinjam', $id);
  		$this->db->update('sirkulasi', $object);
  	}

  		function hapus_data_sirkulasi($id){

  		$object = array(
  			'status_hapus' 			=> 1
  		);

  		$this->db->where('id_pinjam', $id);
  		$this->db->update('sirkulasi', $object);
  	}


  	function hapus_sirkulasi($id){
  		$this->db->where('id_pinjam', $id);
  		$this->db->delete('sirkulasi');
  	}



}

/* End of file Model_Sirkulasi.php */
/* Location: ./application/models/Model_Sirkulasi.php */
