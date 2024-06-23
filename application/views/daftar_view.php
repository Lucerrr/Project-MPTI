<?php $this->load->view('header'); ?>
<style media="screen">

div input[type="text"], div input[type="password"], div textarea, input[type="submit"] {
  border: 1px solid #e6e6e6;
  margin-top: 2px;
  width: 100%;
  padding: 10px; /* Mengurangi padding untuk membuat textarea lebih kecil */
  font-weight: 100;
  font-family: sans-serif;
  color: maroon; /* Mengubah warna teks pada input dan textarea */
  resize: none;
  outline: none;
  background-color: rgba(255, 255, 255, 0.8);
  border-radius: 15px; /* Mengubah radius border */
  box-sizing: border-box; /* Menyesuaikan padding dan border ke dalam ukuran element */
}

input[type="submit"] {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 15px 20px;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  margin-top: 20px; /* Sesuaikan jarak dari atas */
}

input[type="submit"]:hover {
  background-color: #0056b3;
}

.head-bread {
  margin-bottom: 20px;
}

.reg-form {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 80vh;
    background-image: url('theme/user/images/Login3.jpg'); /* Ganti path/to/your/image.jpg dengan path gambar Anda */
    background-size: cover; /* Untuk memastikan gambar latar belakang menutupi seluruh area */
    background-position: center; /* Untuk menentukan posisi gambar latar belakang */
  }

/* Gaya untuk formulir */
.reg {
  background-color: rgba(0, 0, 80, 0.8);
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  width: 400px;
  text-align: center; /* Pusatkan konten dalam formulir */
}

.reg h3 {
  margin-bottom: 20px;
  color: maroon; /* Mengubah warna teks pada judul "Daftar Sekarang" */
  text-align: center; /* Membuat judul berada di tengah */
}

.reg p {
  margin-bottom: 10px;
  color: #777;
}

.reg a {
  color: #007bff;
}

.reg a:hover {
  text-decoration: underline;
}

.reg ul {
  list-style: none;
  padding: 0;
}

.reg ul li {
  margin-bottom: 10px;
  color: #191339;
}

.reg ul li.text-info {
  font-weight: bold;
}

input[type="submit"]:hover {
  background-color: #F5FFFA; /* Warna tombol saat dihover */
}

/* Gaya untuk placeholder */
::-webkit-input-placeholder {
  color: maroon;
}

:-moz-placeholder {
  color: maroon;
}

::-moz-placeholder {
  color: maroon;
}

:-ms-input-placeholder {
  color: maroon;
}

</style>
<div class="reg-form">
  <div class="reg">
    <h3>REGISTRASI</h3> <!-- Perubahan warna teks pada judul -->
    <?php echo $this->session->flashdata('msg');?>
    <form data-parsley-validate action="<?php echo base_url('daftar/simpan')?>" method="post">
  <ul>
    <li><textarea name="nama" style="height: 50px;" placeholder="Nama Lengkap" required></textarea></li>
  </ul>
  <ul>
    <li><textarea name="email" style="height: 50px;" placeholder="Email" data-parsley-type="email" required></textarea></li>
  </ul>
  <ul>
    <li><textarea name="notelp" style="height: 50px;" placeholder="No HP" data-parsley-type="number" required></textarea></li>
  </ul>
  <ul>
    <li><textarea name="alamat" style="height: 50px;" placeholder="Alamat" required></textarea></li>
  </ul>
  <ul>
    <li><input type="password" name="password" style="height: 40px; width: 100%;" placeholder="Password" required></li>
  </ul>
  <ul>
    <li><input type="password" name="confirm Password" style="height: 40px; width: 100%;" placeholder="Confirm Password" required></li>
  </ul>
  <input type="submit" value="Daftar"> <!-- Tombol "Daftar" dipindahkan ke luar form -->
</form>
  </div>
</div>
