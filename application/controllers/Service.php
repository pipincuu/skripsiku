<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('Model_data');
    $this->load->model('Model_login');
  }

  public function get(){
    // variabel untuk menampung data dari database
    $data = $this->Model_data->getData();

    // ini untuk menghasilkan json
    $this->output
    ->set_status_header(200) //header untuk service
    ->set_content_type('application/json', 'utf-8') //tipe dari data=>pake JSON
    ->set_output(json_encode($data, JSON_PRETTY_PRINT)) //hasil yang ditampilkan menggunakan json_encode dalam bentuk tampilan cantik
    ->_display();
    exit;
  }

  public function login(){
    $data = (array)json_decode(file_get_contents('php://input'));
    $login = $this->Model_login->service_login($data);

    // json_decode(json_encode($data), true);

    $this->output
    ->set_status_header(200) //header untuk service
    ->set_content_type('application/json', 'utf-8') //tipe dari data=>pake JSON
    ->set_output(json_encode($login, JSON_PRETTY_PRINT)) //hasil yang ditampilkan menggunakan json_encode dalam bentuk tampilan cantik
    ->_display();
    exit;
  }

  public function getNim($id){
    $data = $this->Model_data->getNim($id);

    $this->output
    ->set_status_header(200) //header untuk service
    ->set_content_type('application/json', 'utf-8') //tipe dari data=>pake JSON
    ->set_output(json_encode($data, JSON_PRETTY_PRINT)) //hasil yang ditampilkan menggunakan json_encode dalam bentuk tampilan cantik
    ->_display();
    exit;
  }

  public function post(){
    // mengambil data json yang dikirim dari konten input post
    $data = (array)json_decode(file_get_contents('php://input'));
    $simpan = $this->Model_data->tambahMahasiswa($data);

    //hasil respon kalau data sukses tersimpan
    $response = array(
        'Success' => true,
        'Info' => 'Data Tersimpan'
    );

    //melaporkan bahwa data bisa disimpan dalam format json
    $this->output
        ->set_status_header(201)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($response, JSON_PRETTY_PRINT))
        ->_display();
        exit;
  }

  public function patch($id){
    # code...
  }

  public function delete($id){
    # code...
  }

}
