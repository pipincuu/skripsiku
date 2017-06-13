<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_kategori extends CI_Model {

public function getData(){
  $query = $this->db->get('kategori');

  return $query->result();
}

// public function getNim($id){
//   $query = $this->db->get_where('perpustakaan', array('nim'=>$id));
//
//   return $query->first_row();
// }

function tambah_kategori(){

  $insert = array (

    'no_kategori'    	   => $this->input->post('no_kategori'),
    'nama_kategori'  	   => $this->input->post('nama_kategori'),
    'deskripsi'  	       => $this->input->post('deskripsi')

  );
  $this->db->insert('kategori', $insert);
}

// function tambahMahasiswa($dataMahasiswa){
//     $val = array(
//       'nim'            => $dataMahasiswa['nim'],
//       'nama_mahasiswa' => $dataMahasiswa['nama_mahasiswa'],
//       'program_studi'  => $dataMahasiswa['program_studi']
//     );
//     $this->db->insert('mahasiswa', $val);
// }
//
function tampil_kategori(){
  $tampil = $this->db->get('kategori');
  return $tampil->result_array();
}

function data_update_kategori($id){
  $hasil = $this->db->get_where('kategori', array('no_kategori'=>$id));
  return $hasil->first_row("array");
}

function update($id){
  $object = array(

    'nama_kategori'  	   => $this->input->post('nama_kategori'),
    'deskripsi'  	       => $this->input->post('deskripsi')

  );
  $this->db->where('no_kategori', $id);
  $this->db->update('kategori', $object);
}

function delete($id){
  $this->db->where('no_kategori', $id);
  $this->db->delete('kategori');
}
}

/* End of file Model_anggota.php */
/* Location: ./application/models/Model_anggota.php */
