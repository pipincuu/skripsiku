<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Bibli extends CI_Controller {


  public function get_arsip(){
    $query = $this->db->get('bibliography');

    return $query->result();
  }

  function tambah_bibli(){
    $insert = array (

				'id_buku'    	=> $this->input->post('id_buku'),
				'no_kategori'  	=> $this->input->post('nama_gedung'),
				'latitude'		=> $this->input->post('latitude'),
				'longitude'		=> $this->input->post('longitude'),
				'status_gedung'	=> $this->input->post('status')

			);
		$this->db->insert('gedung', $insert);

  }

}

/* End of file Model_Bibli.php */
/* Location: ./application/controllers/Model_Bibli.php */
