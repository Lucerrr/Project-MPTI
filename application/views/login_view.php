<?php $this->load->view('header') ?>
<style media="screen">
  /* Gaya untuk wadah formulir */
  .reg-form {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 80vh;
    background-image: url('theme/user/images/Login3.jpg'); /* Ganti path/to/your/image.jpg dengan path gambar Anda */
    background-size: cover; /* Untuk memastikan gambar latar belakang menutupi seluruh area */
    background-position: center; /* Untuk menentukan posisi gambar latar belakang */
  }

  /* Gaya untuk formulir login */
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
    color: maroon; /* Mengubah warna teks pada judul "Login" */
  }

  .reg p {
    margin-bottom: 10px;
    color: #fff; /* Mengubah warna teks */
  }

  .reg a {
    color: #007bff;
    text-decoration: none; /* Hapus dekorasi tautan */
  }

  .reg a:hover {
    text-decoration: underline; /* Tambahkan garis bawah saat dihover */
  }

  /* Gaya untuk input */
  input[type="text"],
  input[type="password"],
  input[type="submit"],
  textarea[name="email"],
  textarea[name="password"] {
    border: 1px solid #e6e6e6;
    margin-top: 10px;
    width: 100%;
    padding: 10px; /* Mengurangi padding untuk membuat input lebih kecil */
    font-weight: 100;
    font-family: sans-serif;
    color: maroon; /* Mengubah warna teks pada input */
    resize: none;
    outline: none;
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 15px; /* Mengubah radius border */
    overflow: hidden; /* Menghilangkan scrollbar */
  }

  /* Gaya untuk tombol "Login" */
  input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 15px 20px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  input[type="submit"]:hover {
    background-color: #0056b3;
  }
</style>

<div class="reg-form">
    <div class="reg">
        <h3>LOGIN</h3>
        <form data-parsley-validate action="<?php echo base_url('login/aksi_login')?>" method="post">
            <ul>
                <li><textarea name="email" style="height: 40px;" placeholder="Email" data-parsley-type="email" required></textarea></li>
            </ul>
            <ul>
                <li><input type="password" name="password" style="height: 40px; width: 100%;" placeholder="Password" required></li>
            </ul>
            <div class="input-field ">
                <a href="<?php echo base_url('application/views/forgot_password_view') ?>" tabindex="-1"><small><strong>Forgot Password?</strong></small></a>
            </div>
            <input type="submit" value="Login">
            <p>Jika belum punya akun, silahkan <a href="<?php echo base_url('daftar')?>">klik disini</a></p>
        </form>
    </div>
</div>

