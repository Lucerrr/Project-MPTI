
<style>
/* Container utama untuk kategori */
.kategori-horizontal {
    list-style-type: none; /* Menghilangkan tanda bullet list default */
    padding: 0;
    margin: 0;
    display: flex; /* Menggunakan flexbox untuk menyusun item secara horizontal */
    justify-content: space-between; /* Menyebar item hingga ujung kanan */
    align-items: center; /* Menyelaraskan item secara vertikal di tengah */
    flex-wrap: nowrap; /* Mencegah item membungkus ke baris berikutnya */
    width: 100%; /* Mengatur lebar kontainer ke 100% */
    gap: 50px; /* Menambahkan jarak antar item */
}

/* Styling item daftar */
.kategori-horizontal li {
    font-size: 1.0em; /* Membuat teks lebih besar */
    font-weight: bold; /* Membuat tulisan tebal */
}

/* Styling tautan */
.kategori-horizontal li a {
    text-decoration: none; /* Menghilangkan garis bawah pada tautan */
    color: #000; /* Menyesuaikan warna teks */
    padding: 10px 20px; /* Menambahkan padding untuk area klik yang lebih besar */
    border: 2px solid transparent; /* Menambahkan border transparan */
    transition: all 0.3s ease; /* Menambahkan transisi untuk efek hover */
}


/* Efek hover untuk tautan */
.kategori-horizontal li a:hover {
    color: #fff; /* Mengubah warna teks saat di-hover */
    background-color: #191339; /* Mengubah latar belakang saat di-hover */
    border-color: maroon; /* Mengubah warna border saat di-hover */
    border-radius: 5px; /* Menambahkan border radius untuk membuat sudut membulat */
}

.footer-grid {
        background: #8594AB;
        padding: 20px 0; /* Tambahkan padding atas dan bawah */
        color: white; /* Agar teks terlihat jelas pada latar belakang biru */
    }

</style>


<div class="footer-grid">
    <div class="container">
        <!-- <div class="col-md-3 re-ft-grd">
            <h3>Kategori Sewa</h3>
            <ul class="categories kategori-horizontal">
              <?php $kategori = $this->all_model->get_where(array(), 'kategori');
                    foreach ($kategori as $key => $value) {
                        echo '<li><a href="'.base_url('produk/kategori/'.$value->kategori_id).'">'.$value->nama_kategori.'</a></li>';
                    }
              ?>
            </ul>
        </div> -->
        <!-- <div class="col-md-7 re-ft-grd">
            <h3>Social</h3>
            <ul class="social">
                <li><a href="#" class="fb">facebook</a></li>
                <li><a href="#" class="twt">twitter</a></li>
                <li><a href="#" class="gpls">g+ plus</a></li>
                <div class="clearfix"></div>
            </ul>
        </div> -->
        <!-- <div class="col-md-2 re-ft-grd">
            <div class="bt-logo">
                <div class="logo">
                    <a href="index.html" class="ft-log">bB</a>
                </div>
            </div>
        </div> -->
<div class="clearfix"></div>
    </div>
    <div class="copy-rt">
        <div class="container">
    <p>&copy;   2024 Kamayel All Rights Reserved.</a></p>
        </div>
    </div>
</div>
