<?php

class Sewa extends CI_Controller {

  public function __construct() {
    parent::__construct();
    if (empty($this->session->userdata('is_login'))) {
      echo '<script>alert("Anda harus login");window.location.href="'.base_url('login').'";</script>';
      exit(); // Setelah melakukan redirect, keluar dari konstruktor untuk menghentikan eksekusi selanjutnya.
    }
    $this->load->model('all_model'); // Memuat model all_model untuk digunakan dalam controller.
  }

  public function index() {
    $this->load->view('sewa_view');
  }

  public function tambah_sewa() {
    $produk_id    = $this->input->post('produk_id');
    $dari         = $this->input->post('dari');
    $sampai       = $this->input->post('sampai');
    $qty          = $this->input->post('qty');
    $nama         = $this->input->post('nama_produk');
    $harga        = $this->input->post('harga');
    $selisih      = $this->all_model->hitung_selisih($dari, $sampai);
    $tharga       = $harga * $selisih;
    $data = array(
        'id'         => $produk_id, // Menggunakan produk_id sebagai ID unik item dalam keranjang.
        'qty'        => $qty,
        'price'      => $harga, // Harga per unit.
        'name'       => $nama,
        'options'    => array('dari' => $dari, 'sampai' => $sampai) // Menambahkan informasi tambahan sebagai opsi item.
    );
    $in = $this->cart->insert($data);
    if ($in) {
      redirect('sewa');
    }
  }

  public function hapus($row_id)   {
    $in = $this->cart->remove($row_id); // Menghapus item berdasarkan row_id.
    if ($in) {
      redirect('sewa');
    }
  }

  public function simpan_sewa() {
    $data = $this->cart->contents();
    foreach ($data as $k) {
        $data_simpan = array(
          'user_id'    => $this->session->userdata('user_id'),
          'produk_id'  => $k['id'], // Menggunakan ID produk dari keranjang.
          'dari'       => $k['options']['dari'], // Mendapatkan informasi dari opsi item.
          'sampai'     => $k['options']['sampai'], // Mendapatkan informasi dari opsi item.
          'jumlah'     => $k['qty'],
          'harga'      => $k['subtotal']
        );
        $this->all_model->insert($data_simpan, 'transaksi');
    }
    $this->cart->destroy(); // Menghapus semua item dari keranjang setelah transaksi selesai.
    redirect('sewa/selesai');
  }

  public function selesai() {
    $this->load->view('selesai_view');
  }

  public function tutup() {
     $this->cart->destroy();
     redirect('home');
  }

  public function invoice() {
    $user_id = $this->session->userdata('user_id');
    $user = $this->all_model->get_user($user_id); // Ensure this method exists in the model
    $transaksi = $this->all_model->get_transaksi($user_id); // Ensure this method exists in the model
  
    $data = array(
        'nama' => $user->nama,
        'nohp' => $user->nohp,
        'alamat' => $user->alamat,
        'order_list' => $transaksi,
        'date_return' => end($transaksi)->sampai,
        'total_payment' => array_sum(array_column($transaksi, 'harga'))
    );
  
    $this->load->view('invoice_view', $data);
  }
}

?>
