<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_detail extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function insert($jml){

    $this->db->from('bibliography');
    $this->db->order_by('id_buku', 'desc');
    $data_bibli = $this->db->get()->first_row();

    $id_bli = $data_bibli->id_buku;

    for($i=1;$i<=$jml;$i++){
      $data = array(
        "id_buku"             => $id_bli,
        "status_pinjam_buku"  => "tersedia"
      );
        $this->db->insert('detail_bibli', $data);
    }

  }



}