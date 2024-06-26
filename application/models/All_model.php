<?php

/**
 *
 */
class All_model extends CI_model {

  public function __construct() {
    $this->load->database();
  }

  public function get_user($user_id) {
    $this->db->where('user_id', $user_id); // Ensure this matches the actual column name
    return $this->db->get('users')->row();
  }

  public function get_transaksi($user_id) {
    $this->db->where('user_id', $user_id);
    return $this->db->get('transaksi')->result();
  }

  public function format_tanggal($tgl) {
    $y    = date('Y', strtotime($tgl));
    $d    = date('d', strtotime($tgl));
    $dt_m = date('m', strtotime($tgl));
    $m    = $this->month($dt_m);
		$date = $d.' '.$m.' '.$y;
    return $date;
  }

  public function month($dt) {
		$array = array(
			'01'=>'Januari',
			'02'=>'Febuari',
			'03'=>'Maret',
			'04'=>'April',
			'05'=>'Mei',
			'06'=>'Juni',
			'07'=>'Juli',
			'08'=>'Agustus',
			'09'=>'September',
			'10'=>'Oktober',
			'11'=>'November',
			'12'=>'Desember',
		);
		return $array[$dt];
	}

  public function hitung_selisih($dari, $sampai) {
    $start_date = new DateTime($dari);
    $end_date = new DateTime($sampai);
    $interval = $start_date->diff($end_date);
    return $interval->days;
  }

  public function format_harga($harga) {
    $new = number_format($harga, 0, '.','.');
    return 'Rp. '.$new;
  }

  public function get_laporan_sewa($tgl1, $tgl2) {
    $this->db->from('transaksi');
    $this->db->join('produk', 'transaksi.produk_id = produk.produk_id', 'LEFT');
    $this->db->join('kategori', 'produk.kategori_id = kategori.kategori_id', 'LEFT');
    $this->db->join('users', 'users.user_id = transaksi.user_id', 'LEFT');
    if (!empty($tgl1)) {
      $this->db->where('DATE(transaksi.created_on) BETWEEN "'.$tgl1.'" AND "'.$tgl2.'"');
    }
    return $this->db->get()->result();
  }

  public function get_user_details($user_id) {
    // Example query to fetch user details
    return $this->db->get_where('users', array('id' => $user_id))->row();
  }

  public function get_transaksi_details($transaksi_id) {
    // Example query to fetch transaction details
    $transaksi = $this->db->get_where('transaksi', array('id' => $transaksi_id))->row();
    $transaksi->items = $this->db->get_where('transaksi_items', array('transaksi_id' => $transaksi_id))->result_array();
    return $transaksi;
  }

  public function get_where($where = array(), $table) {
    $this->db->from($table);
    $this->db->where($where);
    return $this->db->get()->result();
  }

  public function get_produk($where = array()) {
    $this->db->from('produk');
    $this->db->join('kategori', 'produk.kategori_id = kategori.kategori_id', 'LEFT');
    $this->db->where($where);
    return $this->db->get()->result();
  }

  public function get_produk_limit($where = array()) {
    $this->db->from('produk');
    $this->db->join('kategori', 'produk.kategori_id = kategori.kategori_id', 'LEFT');
    $this->db->where($where);
    $this->db->limit(3);
    return $this->db->get()->result();
  }

  public function get_transaksi_sewa($where) {
    $this->db->from('transaksi');
    $this->db->join('produk', 'transaksi.produk_id = produk.produk_id', 'LEFT');
    $this->db->join('kategori', 'produk.kategori_id = kategori.kategori_id', 'LEFT');
    $this->db->join('users', 'users.user_id = transaksi.user_id', 'LEFT');
    $this->db->where($where);
      return $this->db->get()->result();
  }

  public function insert($data, $table) {
    return $this->db->insert($table, $data);
  }

  public function delete($where, $table) {
    $this->db->where($where);
    return $this->db->delete($table);
  }

  public function update($where, $data, $table) {
    $this->db->where($where);
    return $this->db->update($table, $data);
  }

}

 ?>
