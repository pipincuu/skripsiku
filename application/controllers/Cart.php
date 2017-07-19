<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cart extends CI_Controller{

  public function __construct(){
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Model_bibli');
  }

  public function add($id){
    $buku = $this->Model_bibli->data_update_bibli($id);
    $cart = $this->cart->contents();

    // print_r($cart);
    // echo "<br>";

    $flag = TRUE;

    foreach ($cart as $item) {
    	if($id == $item['id']){

        // echo $item['id'];

    		$data = array(
    			'rowid' => $item['rowid'],
    			'qty'   => 1
    			);

    		$this->cart->update($data);
    		$flag = FALSE;
    		break;
    	}
    }

    if($flag){
    $data = array(
    	'id'      => $id,
    	'qty'     => 1,
    // 'id_buku' => $buku=>id_buku,
    	'price'   => "0.0",
    	'name'    => $buku['judul_buku']
    	);

    $this->cart->insert($data);
    }

    redirect(base_url().'Dashboard');
  }

  public function show(){

    $cart = $this->cart->contents();

    echo "<pre>";
    print_r($cart);
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
