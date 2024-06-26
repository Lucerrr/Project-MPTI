<?php $this->load->view('header'); ?>

<div class="header-image">
        <img src="<?php echo base_url('theme/user/images/Header.png')?>" alt="...">
</div>
<div class="head-bread" style="background-color: #191339; color: white;">
    <div class="container">
        <ol class="breadcrumb" style="background-color: transparent;">
            <li><a href="<?php echo base_url(); ?>" style="color: white;">Home</a></li>
            <li class="active" style="color: maroon;">Cart</li>
        </ol>
    </div>
</div>
<div class="container">
  <div class="col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading" style="background-color: #191339; color: white;">
        Data Keranjang
      </div>
      <div class="panel-body">
        <table class="table table-striped" style="background-color: white; color: maroon;">
          <thead>
            <tr>
              <th>No</th>
              <th>Gambar</th>
              <th>Product</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>#</th>
            </tr>
          </thead>
          <tbody>
          <?php
$data = $this->cart->contents();
if (!empty($data)) {
    $no = 1;
    foreach ($data as $k) {
        echo '<tr>';
        echo '<td>'.$no.'</td>';
        echo '<td><img src="'.base_url('upload/'.$k['gambar']).'" alt="'.$k['name'].'" style="width: 100px; height: auto;"></td>';
        echo '<td>'.$k['name'].'</td>';
        echo '<td>'.$k['qty'].'</td>';
        // echo '<td>';
        // if(isset($k['options']['dari'])) {
        //     echo $k['options']['dari'];
        // } else {
        //     echo 'N/A';
        // }
        // echo '</td>';
        // echo '<td>';
        // if(isset($k['options']['sampai'])) {
        //     echo $k['options']['sampai'];
        // } else {
        //     echo 'N/A';
        // }
        // echo '</td>';
        echo '<td>'.$this->all_model->format_harga($k['subtotal']).'</td>';
        echo '<td><a href="'.base_url('sewa/hapus/'.$k['rowid']).'">Hapus</a></td>';
        echo '</tr>';
        $no++;
    }
}
?>
          </tbody>
          <tfoot>
            <tr>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th>Total</th>
              <th><?php echo $this->all_model->format_harga($this->cart->total());?></th>
              <th></th>
            </tr>
          </tfoot>
        </table>
      </div>
      <div class="panel-footer" style="background-color: #191339;">
        <a href="<?php echo base_url('produk')?>" class="btn btn-primary">Sewa Lagi</a>
        <a href="<?php echo base_url('sewa/simpan_sewa')?>" class="btn btn-info pull-right">Proceed to Checkout</a>
      </div>
    </div>
  </div>
</div>

<style>
.table-custom {
    background-color: #12232e;
    color: #ee6c4d;
}
.table-custom thead {
    background-color: #203647;
    color: #ffffff;
}
.table-custom th, .table-custom td {
    text-align: center;
    vertical-align: middle;
}
.table-custom .product-img {
    width: 100px;
    height: auto;
}
.table-custom tfoot {
    background-color: #203647;
    color: #ffffff;
}
.btn-danger {
    background-color: #e63946;
    border-color: #e63946;
}
.btn-primary, .btn-info {
    border-radius: 20px;
}
</style>
<?php $this->load->view('footer'); ?>
