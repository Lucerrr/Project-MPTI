<?php $this->load->view('header') ?>

<style>
    body {
        background: linear-gradient(to bottom, #1D3A5D, #8594AB); /* Gradien dari biru tua (#001f3f) ke abu-abu (#cccccc) */
    }

    .table-profile {
        margin-bottom: 20px;
        background-color: #ffffff; /* Warna latar belakang konten */
        border-radius: 10px; /* Menggunakan border-radius untuk sudut melengkung */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Bayangan untuk memberi efek elevasi */
        padding: 20px; /* Ruang dalam konten */
    }

    .table-profile td {
        text-align: left;
    }

    .profile-img {
        max-width: 150px;
        max-height: 150px;
        border-radius: 50%;
        margin: 20px auto;
        display: block;
    }

    .head-bread {
        background-color: #191339; /* Warna latar belakang untuk breadcrumb */
        padding: 10px 0;
        margin-bottom: 20px;
    }

    .breadcrumb {
        background-color: transparent; /* Hapus latar belakang breadcrumb */
        padding: 0;
        margin: 0;
    }

    .breadcrumb li {
        display: inline;
        font-size: 16px;
    }

    .breadcrumb li a {
        color: white; /* Warna teks link breadcrumb */
        text-decoration: none;
    }

    .breadcrumb li.active {
        color: maroon; /* Warna teks untuk bagian aktif breadcrumb */
    }
</style>


<div class="head-bread">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li class="active">My Profile</li>
        </ol>
    </div>
</div>

<div class="container">
    <table class="table table-bordered table-profile">
        <tr>
            <td colspan="2" style="background-color: #001f3f; color: #fff; text-align: center;">
                <img src="theme/user/images/profil1.jpg" alt="Profile Picture" class="profile-img">
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $this->session->userdata('nama')?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $this->session->userdata('email')?></td>
        </tr>
        <tr>
            <td>No Telp</td>
            <td><?php echo $this->session->userdata('notelp')?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?php echo $this->session->userdata('alamat')?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><?php echo $this->session->userdata('password')?></td>
        </tr>
    </table>
</div>

<!-- <?php $this->load->view('footer') ?> -->
