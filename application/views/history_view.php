<?php $this->load->view('header'); ?>
<style>
    body {
        background: linear-gradient(to bottom, #1D3A5D, #8594AB);
        color: white;
    }
    .container {
        background: transparent;
    }
    .table {
        background: transparent;
        color: white;
    }
    .table thead th {
        background-color: rgba(25, 19, 57, 0.8);
    }
    .table tbody tr {
        background-color: rgba(25, 19, 57, 0.5);
    }
    .breadcrumb a {
        color: white;
    }
    .breadcrumb .active {
        color: maroon;
    }
    .header-image img {
        width: 100%;
    }
</style>

<div class="header-image">
    <img src="<?php echo base_url('theme/user/images/Header.png')?>" alt="...">
</div>
<div class="head-bread" style="background-color: #191339; color: white;">
    <div class="container">
        <ol class="breadcrumb" style="background-color: transparent;">
            <li><a href="index.html">Home</a></li>
            <li class="active">History</li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="col-sm-10 col-sm-offset-1">
        <legend style="color: maroon;">History Sewa</legend>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Jumlah</th>
                    <th>Dari</th>
                    <th>Sampai</th>
                    <th>Total Bayar</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($transaksi_sewa)):
                    foreach ($transaksi_sewa as $key => $p) {
                        $no = $key + 1;
                        if ($p->status == '0') {
                            $status = '<label class="label label-default">Menunggu</label>';
                        } elseif ($p->status == '2') {
                            $status = '<label class="label label-warning">Kembali</label>';
                        } else {
                            $status = '<label class="label label-success">Disetujui</label>';
                        }
                        echo '<tr>';
                            echo '<td>'.$no.'</td>';
                            echo '<td><img src="'.base_url('upload/'.$p->gambar).'" alt="'.$p->nama_produk.'" style="width: 100px; height: auto;"></td>';
                            echo '<td>'.$p->nama_produk.'</td>';
                            echo '<td>'.$p->nama_kategori.'</td>';
                            echo '<td>'.$p->jumlah.'</td>';
                            echo '<td>'.$this->all_model->format_tanggal($p->dari).'</td>';
                            echo '<td>'.$this->all_model->format_tanggal($p->sampai).'</td>';
                            echo '<td>'.$this->all_model->format_harga($p->harga).'</td>';
                            echo '<td>'.$status.'</td>';
                        echo '</tr>';
                    } endif; ?>
            </tbody>
        </table>
    </div>
</div>
<!-- <?php $this->load->view('footer'); ?> -->
