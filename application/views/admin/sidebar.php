<style>
    .skin-navy .main-sidebar {
        background-color: #191339;
    }

    .skin-navy .main-sidebar .sidebar-menu > li > a {
        color: white;
    }

    .skin-navy .main-sidebar .sidebar-menu > li > a:hover {
        background-color: maroon;
    }

    .skin-navy .main-sidebar .sidebar-menu > li.active > a {
        background-color: maroon !important;
    }

    .skin-navy .main-sidebar .sidebar-menu > li.active > a:hover {
        background-color: maroon !important;
    }
</style>

<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="<?php echo base_url('dashboard')?>"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li><a href="<?php echo base_url('data_transaksi_sewa')?>"><i class="fa fa-file"></i> <span>Transaksi Sewa</span></a></li>
            <li><a href="<?php echo base_url('data_kategori_sewa')?>"><i class="fa fa-file"></i> <span>Kategori Produk</span></a></li>
            <li><a href="<?php echo base_url('laporan_sewa')?>"><i class="fa fa-file"></i> Penyewaan</a></li>
            <li><a href="<?php echo base_url('data_produk')?>"><i class="fa fa-file"></i> <span>Stok Barang</span></a></li>
        </ul>
    </section>
</aside>


