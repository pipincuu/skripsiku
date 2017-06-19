<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bibliography extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Model_bibli');
    $this->load->model('Model_detail');
  }


  public function index()
  {
    $data['tampil']	= $this->Model_bibli->tampil_bibli();
    // $data['query'] = $this->model_bibli->getData();

    $this->load->view('beranda/header');
    $this->load->view('beranda/navbar');
    $this->load->view('bibliography/daftar_bibli', $data);
    $this->load->view('js');
  }

	function ubah_bibli($id){
		$data['hasil'] = $this->Model_bibli->data_update_bibli($id);

		if(isset($_POST['submit'])){
			$this->Model_bibli->update($id);
			redirect(base_url().'Bibliography');
		}
    $this->load->view('beranda/header');
    $this->load->view('beranda/navbar');
    $this->load->view('js');
    $this->load->view('bibliography/update_bibli', $data);
	}


	function hapus_bibli($id){
		$this->Model_bibli->delete($id);
		redirect(base_url().'Bibliography');
	}

  function dashboard(){
    $this->load->view('beranda/header');
    $this->load->view('beranda/navbar');
    $this->load->view('js');
    $this->load->view('beranda/dashboard');
  }

}

/* End of file Bibliography.php */
/* Location: ./application/controllers/Bibliography.php */
