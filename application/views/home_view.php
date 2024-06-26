<?php $this->load->view('header'); ?>
<style>
    .add-button {
        background-color: maroon;
        color: white;
        padding: 5px 50px; /* Sesuaikan dengan ukuran yang diinginkan */
        border-radius: 20px; /* Ubah hanya satu properti border-radius */
        display: inline-block;
        text-decoration: none; 
        position: relative; 
    }

    .product-details {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .products-gallery {
        background: linear-gradient(to bottom, #1D3A5D, #8594AB);
        padding: 20px 0;
        color: white;
    }
    
    .product-container {
    background: linear-gradient(to bottom, #1D3A5D, #8594AB); /* Gradasi linier dari biru tua ke putih */
    padding: 5px;
    border-radius: 10px;
    color: black; /* Ubah warna teks menjadi hitam untuk kontras yang lebih baik */
    margin-bottom: 20px; /* Tambahkan margin bawah untuk spasi antar produk */
}
    
</style>

<div class="header-image">
    <img src="<?php echo base_url('theme/user/images/Header.png')?>" alt="...">
</div>
<?php $this->load->view('slider'); ?>

<div class="products-gallery">
    <div class="container">
        <div class="col-md-12 grid-gallery">
            <?php if(!empty($produk)) {
                foreach ($produk as $key => $p) {
                    echo '<div class="col-md-4 grid-stn simpleCart_shelfItem">
                        <div class="product-container">
                            <div class="img">
                                <img src="'.base_url('upload/'.$p->gambar).'" alt="/" class="img-responsive gri-wid">
                            </div>
                            <div class="product-details">
                                <h3>'.$p->nama_produk.'</h3>
                                <p class="product-price">'.$this->all_model->format_harga($p->harga).'</p>
                                <a href="'.base_url('produk/detail/'.$p->produk_id).'" class="add-button">Add</a>
                            </div>
                        </div>
                    </div>';
                }
            } ?>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<?php $this->load->view('footer'); ?>
