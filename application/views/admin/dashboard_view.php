<?php $this->load->view('admin/header') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .options {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .option {
            width: 80%; /* Mengubah lebar menjadi 45% dari container */
            background-color:  #191339;
            padding: 30px; /* Meningkatkan padding untuk membuatnya lebih besar */
            border-radius: 10px; /* Menambahkan sedikit lengkungan ke sudut */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .option:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .option h2 {
            margin-top: 0;
            cursor: pointer;
            color: #fff;
            text-decoration: none;
            background-color: maroon;
            padding: 30px 30px; /* Menyesuaikan padding untuk teks judul */
            border-top-right-radius: 50px; /* Membuat ujung semicircle lebih besar */
            font-size: 24px; /* Menambahkan ukuran font */
        }

        .option p {
            margin: 0px 10px;
            font-size: 18px; /* Menambahkan ukuran font untuk teks tambahan */
        }

        .option a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="options">
            <a href="data_transaksi_sewa" class="option">
                <h2>Transaksi Sewa</h2>
            </a>
            <a href="data_kategori_sewa" class="option">
                <h2>Kategori Produk</h2>
            </a>
        </div>
        <div class="options">
            <a href="laporan_sewa" class="option">
                <h2>Penyewaan</h2>
            </a>
            <a href="data_produk" class="option">
                <h2>Stok Barang</h2>
            </a>
        </div>
    </div>
</body>
</html>


<?php $this->load->view('admin/footer') ?>
