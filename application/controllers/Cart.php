<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cart extends CI_Controller{

  public function __construct(){
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Model_admin');
  }

  public function add($id){
    $buku = $this->Model_buku->get_id($id);
		$cart = $this->cart->contents();

		$flag = TRUE;

		foreach ($cart as $item) {
			if($id == $item['id']){

				$data = array(
					'rowid' => $id,
					'qty'   => '1'
					);

				$this->cart->update($data);
				$flag = FALSE;
				break;
				// redirect(base_url().'halaman_utama');
			}
		}

		if($flag){
			$data = array(
				'id'      => $id,
				'qty'     => 1,
			// 'id_buku' => $buku=>id_buku,
				'price'   => '0',
				'name'    => $buku->nama_buku,
				'foto'	  => $buku->foto
				);

			$this->cart->insert($data);
		}

		redirect(base_url().'halaman_utama');
  }

  public function remove($id){

		$data = array(
			'rowid' => $id,
			'qty'   => '0'
			);

		$this->cart->update($data);
		redirect(base_url().'halaman_utama');
	}

	public function destroy(){

		$this->cart->destroy();
		redirect(base_url().'halaman_utama');

	}

}
