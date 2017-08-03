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
      // 'id_buku'	              => $this->input->post('id_buku'),
      // 'id_detail_buku'        => $this->input->post('id_detail_buku'),
      'tanggal_pinjam'	      => date('Y-m-d', strtotime('now')),
      'tanggal_kembali'	      => date('Y-m-d', strtotime('+1 week')),
      'tanggal_diperbarui'    => NULL,
      'tanggal_dikembalikan'	=> NULL,
      'status_peminjaman'     => "belum lunas"
    );
    $this->db->insert('sirkulasi', $insert);
  }

  function tambah_detail($id){
    $cart = $this->cart->contents();
    foreach ($cart as $key => $value) {
      $insert = array(
        'id_sirkulasi'          => $id,
        'id_buku'	              => $value['id'],
      );
      $this->db->insert('sirkulasi_detail', $insert);
    }

  }

  function data_update_sirkulasi($id){
    $hasil = $this->db->get_where('sirkulasi', array('id_pinjam'=>$id));
    return $hasil->first_row("array");
  }

  function data_mhs($id){
    $hasil = $this->db->get_where('sirkulasi', array('nim'=>$id));
    return $hasil->result();
  }

  public function detail_sirkulasi($id){
    $this->db->join('bibliography', 'bibliography.id_buku = sirkulasi_detail.id_buku');
    $this->db->from('sirkulasi_detail');
    $this->db->where('sirkulasi_detail.id_sirkulasi', $id);
    $data = $this->db->get();

    return $data->result();
  }

  function kembalikan($id){
    $object = array(
      'tanggal_dikembalikan'	=> date("Y-m-d"),
      'status_peminjaman'     => 'lunas'
    );

    $this->db->where('id_pinjam', $id);
    $this->db->update('sirkulasi', $object);
  }

  function perpanjang($id){
    $object = array(
      'tanggal_diperbarui'	=> date('Y-m-d', strtotime('+1 week'))
    );

    $this->db->where('id_pinjam', $id);
    $this->db->update('sirkulasi', $object);
  }

  function update_sirkulasi($id){
    $object = array(
      'nim'                   => $this->input->post('nim'),
      // 'id_buku'	              => $this->input->post('id_buku'),
      // 'id_detail_buku'        => $this->input->post('id_detail_buku'),
      'tanggal_pinjam'	      => $this->input->post('tanggal_pinjam'),
      'tanggal_kembali'	      => $this->input->post('tanggal_kembali'),
      'tanggal_diperbarui'    => $this->input->post('tanggal_diperbarui'),
      'tanggal_dikembalikan'	=> $this->input->post('tanggal_dikembalikan'),
      'status_peminjaman'     => $this->input->post('status_peminjaman')
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
