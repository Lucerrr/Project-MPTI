<?php

/**
 *
 */
class Jasa extends CI_Controller {

  public function __construct() {
    parent::__construct();
    if (empty($this->session->userdata('is_login'))) {
      echo '<script>alert("anda harus login");window.location.href="'.base_url('login').'"</script>';
    }
  }

  public function index() {
    $this->load->view('cart');
    $this->load->model('all_model');
  }
  
  public function add_to_cart() {
      $data = array(
          'id' => $this->input->post('id'),
          'name' => $this->input->post('name'),
          'qty' => $this->input->post('qty'),
          'price' => $this->input->post('price'),
          'options' => array(
              'dari' => $this->input->post('dari'),
              'sampai' => $this->input->post('sampai'),
              'gambar' => $this->input->post('gambar')
          )
      );

      $this->cart->insert($data);
      redirect('cartcontroller');
  }

  public function remove_from_cart($rowid) {
      $data = array(
          'rowid' => $rowid,
          'qty' => 0
      );

      $this->cart->update($data);
      redirect('cartcontroller');
  }

  public function save_cart() {
      // Implement your saving logic here
      // Example: Save the cart data to the database
      $cart_data = $this->cart->contents();
      
      foreach ($cart_data as $item) {
          $data = array(
              'product_id' => $item['id'],
              'product_name' => $item['name'],
              'quantity' => $item['qty'],
              'price' => $item['price'],
              'subtotal' => $item['subtotal'],
              'dari' => isset($item['options']['dari']) ? $item['options']['dari'] : NULL,
              'sampai' => isset($item['options']['sampai']) ? $item['options']['sampai'] : NULL,
              'user_id' => $this->session->userdata('user_id') // Assuming you have user login session
          );

          $this->all_model->save_order($data); // Assuming save_order is a method in your model
      }

      $this->cart->destroy(); // Clear the cart after saving
      redirect('cartcontroller');
  }
}
 ?>
