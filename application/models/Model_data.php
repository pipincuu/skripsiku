<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_data extends CI_Model{

  public function getData(){
    $query = $this->db->get('mahasiswa');

    return $query->result();
  }

  public function getNim($id){
    $query = $this->db->get_where('mahasiswa', array('nim'=>$id));

    return $query->first_row();
  }

  function tambah_mahasiswa(){

    $insert = array (

      'nim'    	           => $this->input->post('nim'),
      'nama_mahasiswa'  	 => $this->input->post('nama_mahasiswa'),
      'program_studi'		   => $this->input->post('program_studi'),
      'jk'                 => $this->input->post('jk'),
      'tanggal_lahir'      => $this->input->post('tanggal_lahir')

    );
    $this->db->insert('mahasiswa', $insert);
  }

  function tambahMahasiswa($dataMahasiswa){
      $val = array(
        'nim'            => $dataMahasiswa['nim'],
        'nama_mahasiswa' => $dataMahasiswa['nama_mahasiswa'],
        'program_studi'  => $dataMahasiswa['program_studi']
      );
      $this->db->insert('mahasiswa', $val);
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
      'program_studi' 		=> $this->input->post('program_studi'),
      'jk'                 => $this->input->post('jk'),
      'tanggal_lahir'      => $this->input->post('tanggal_lahir')

    );
    $this->db->where('nim', $id);
    $this->db->update('mahasiswa', $object);
  }

  function delete($id){
    $this->db->where('nim', $id);
    $this->db->delete('mahasiswa');
  }

  // ===========================================================================
  // SERVICE
  // ===========================================================================
  public function service_login($data){
    $username = $data['username'];
    $password = $data['password'];

    $tahun      = substr($password, 0,4);
    $bulan      = substr($password, 4,2);
    $tanggal    = substr($password, 6,2);
    $tgl        = $tahun."-".$bulan."-".$tanggal;

    $inisial_1  = substr($password, 8,1);
    $inisial_2  = strtolower(substr($password, 9,1));
    $nama_depan = $inisial_1.$inisial_2;

    // return $nama_depan;

    $this->db->select('*');
    $this->db->from('mahasiswa');
    $this->db->where('tgl_lahir', $tgl);
    $this->db->like('nama_mahasiswa', $nama_depan, 'after');
    $this->db->where('nim', $username);
    $data = $this->db->get();
    // $data = $this->db->get_where('mahasiswa', array('nim' =>$username, 'jk' =>$password));

    if(count($data)>=1){
      return $data->first_row();
    }else{
      return NULL;
    }
  }
}
