<?php

/**
 *
 */
class Daftar extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $this->load->view('daftar_view');
  }

  public function simpan()  {
    $email = $this->input->post('email');
    $nama = $this->input->post('nama');
    $notelp = $this->input->post('notelp');
    $password = $this->input->post('password');
    $alamat = $this->input->post('alamat');

    $data = array(
      'email'        => $email,
      'nama_lengkap' => $nama,
      'password'     => $password,
      'notelp'       => $notelp,
      'alamat'       => $alamat,
    );
    $a = $this->all_model->insert($data, 'users');
    if ($a) {
      $this->session->set_flashdata('msg', '<div class="alert alert-success">Anda Berhasil mendaftar, silahkan login</div>');
      redirect('daftar');
    }else {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger">Anda gagal mendaftar, coba lagi</div>');
      redirect('daftar');
    }
  }
}

 ?>
