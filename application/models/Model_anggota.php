<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_anggota extends CI_Model {

public function getData(){
  $query = $this->db->get('anggota');

  return $query->result();
}

// public function getNim($id){
//   $query = $this->db->get_where('perpustakaan', array('nim'=>$id));
//
//   return $query->first_row();
// }

function tambah_anggota(){

  $insert = array (

    'nim'    	           => $this->input->post('nim'),
    'nama_mahasiswa'  	 => $this->input->post('nama_mahasiswa'),
    'jurusan'  	         => $this->input->post('jurusan'),
    'program_studi'		   => $this->input->post('program_studi'),
    'tanggal_lahir'		   => $this->input->post('tanggal_lahir'),
    'tanggal_registrasi' => $this->input->post('tanggal_registrasi'),
    'tanggal_expired'		 => $this->input->post('tanggal_expired'),
    'jenis_kelamin'		   => $this->input->post('jenis_kelamin'),
    'alamat'		         => $this->input->post('alamat'),
    'no_telepon'		     => $this->input->post('no_telepon')

  );
  $this->db->insert('anggota', $insert);
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
function tampil_anggota(){
  $tampil = $this->db->get('anggota');
  return $tampil->result_array();
}

function data_update_anggota($id){
  $hasil = $this->db->get_where('anggota', array('nim'=>$id));
  return $hasil->first_row("array");
}

function update($id){
  $object = array(
    // 'id_gedung' 		=> $this->input->post('id_gedung'),
    'nama_mahasiswa'  	 => $this->input->post('nama_mahasiswa'),
    'jurusan'  	         => $this->input->post('jurusan'),
    'program_studi'		   => $this->input->post('program_studi'),
    'tanggal_lahir'		   => $this->input->post('tanggal_lahir'),
    'tanggal_registrasi' => $this->input->post('tanggal_registrasi'),
    'tanggal_expired'		 => $this->input->post('tanggal_expired'),
    'jenis_kelamin'		   => $this->input->post('jenis_kelamin'),
    'alamat'		         => $this->input->post('alamat'),
    'no_telepon'		     => $this->input->post('no_telepon')

  );
  $this->db->where('nim', $id);
  $this->db->update('anggota', $object);
}

function delete($id){
  $this->db->where('nim', $id);
  $this->db->delete('anggota');
}
}

/* End of file Model_anggota.php */
/* Location: ./application/models/Model_anggota.php */
