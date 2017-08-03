<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form extends CI_Controller {

  var $API  =" ";
  var $API2 =" ";

  public function __construct()
  {
    parent::__construct();
    $this->API="http://localhost/skripsiku-perpus/";
    // $this->API="http://localhost/perpustakaan";

    $this->API2="http://localhost/skripsiku-kemahasiswaan/";

    $this->load->model('Model_bebastanggungan');
  }

  public function index($id){

    $service      = $this->curl->simple_get($this->API.'Sirkulasi/data_mhs/'.$id);
    $service2     = $this->curl->simple_get($this->API2.'Service/getNim/'.$id);
    $data_perpus  = json_decode($service);
    $data_mhs     = json_decode($service2);

    // print_r($data_mhs);

    // memasang status apakah mahasiswa ada tanggungan
    $status = "";
    foreach ($data_perpus as $key => $value) {
      if($value->status_peminjaman=="belum lunas"){
        $status = "Masih ada Tanggungan";
      }else{ $status="Tidak ada Tanggungan"; }
    }

    $data['mhs'] = $data_mhs;
    $data['body'] = "body-normal";
    $data['data_tanggungan'] = $this->Model_bebastanggungan->list_tanggungan($id);
    $data['status_perpus'] = $status;

    // print_r($data['data_tanggungan']);

    $this->load->view('template', $data);
    $this->load->view('tabel',$data);
    $this->load->view('javascript');
  }

}

/* End of file Form.php */
/* Location: ./application/controllers/Form.php */
