<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Bibli extends CI_Controller {


  // public function getData(){
  //   $query = $this->db->get('bibliography');
  //
  //   return $query->result();
  // }

  // function dpt_id(){
  // 		$id = $this->db->get('kategori');
  // 		return $id->result();
  // 	}

  function tambah_bibli(){
    $insert = array (

				'id_buku'    	       => $this->input->post('id_buku'),
				'no_kategori'        => $this->input->post('no_kategori'),
				'judul_buku'	       => $this->input->post('judul_buku'),
				'pengarang_buku'     => $this->input->post('pengarang_buku'),
				'penerbit_buku'	     => $this->input->post('penerbit_buku'),
        'tahun_terbit'	     => $this->input->post('tahun_terbit'),
        'tempat_terbit'	     => $this->input->post('tempat_terbit'),
        'edisi'	             => $this->input->post('edisi'),
        'jumlah_eksemplar'	 => $this->input->post('jumlah_eksemplar'),
        'jumlah_stok_buku'	 => $this->input->post('jumlah_stok_buku'),
        'jenis_koleksi_buku' => $this->input->post('jenis_koleksi_buku'),
        'no_registrasi'	     => $this->input->post('no_registrasi'),
        'no_acc'	           => $this->input->post('no_acc'),
        'keterangan'	       => $this->input->post('keterangan')

			);
		$this->db->insert('bibliography', $insert);
  }

  function tampil_bibli(){
   $tampil = $this->db->get('bibliography');
   return $tampil->result_array();
 }

 function data_update_bibli($id){
		$hasil = $this->db->get_where('bibliography', array('id_buku'=>$id));
		return $hasil->first_row("array");
	}

  function update($id){
		$object = array(

      'no_kategori'        => $this->input->post('no_kategori'),
      'judul_buku'	       => $this->input->post('judul_buku'),
      'pengarang_buku'     => $this->input->post('pengarang_buku'),
      'penerbit_buku'	     => $this->input->post('penerbit_buku'),
      'tahun_terbit'	     => $this->input->post('tahun_terbit'),
      'tempat_terbit'	     => $this->input->post('tempat_terbit'),
      'edisi'	             => $this->input->post('edisi'),
      'jumlah_eksemplar'	 => $this->input->post('jumlah_eksemplar'),
      'jumlah_stok_buku'	 => $this->input->post('jumlah_stok_buku'),
      'jenis_koleksi_buku' => $this->input->post('jenis_koleksi_buku'),
      'no_registrasi'	     => $this->input->post('no_registrasi'),
      'no_acc'	           => $this->input->post('no_acc'),
      'keterangan'	       => $this->input->post('keterangan')

		);
		$this->db->where('id_buku', $id);
		$this->db->update('bibliography', $object);
	}

	function delete($id){
		$this->db->where('id_buku', $id);
		$this->db->delete('bibliography');
	}

}

/* End of file Model_Bibli.php */
/* Location: ./application/controllers/Model_Bibli.php */
