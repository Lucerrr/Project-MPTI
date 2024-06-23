<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model jika diperlukan
        // $this->load->model('all_model');
    }

    public function index() {
        // Ambil data kontak dari model jika diperlukan
        // $data['kontak'] = $this->all_model->get_where(array(), 'pengaturan');
        $this->load->view('kontak_view');
    }

    public function send_message() {
        // Proses data yang diterima dari formulir
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $message = $this->input->post('message');
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Message: $message<br>";
    }

}
