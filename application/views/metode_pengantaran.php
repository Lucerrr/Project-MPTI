<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            background: linear-gradient(to bottom, #1D3A5D, #8594AB);
            color: #FFFFFF; /* Optional: This ensures the text is readable on the gradient background */
            font-family: Arial, sans-serif; /* Optional: This sets a default font for the page */
        }
        .header-image img, .contact-info img {
            display: inline-block;
        }
        .head-bread {
            margin: 20px 0;
        }
        .head-bread .breadcrumb {
            background-color: transparent;
            padding: 0;
            margin: 0;
            list-style: none;
        }
        .breadcrumb li {
            display: inline;
            font-size: 18px;
        }
        .breadcrumb li a {
            color: #FFFFFF;
            text-decoration: none;
        }
        .breadcrumb li+li:before {
            padding: 8px;
            color: #FFFFFF;
            content: "/\00a0";
        }
        .container {
            padding: 20px;
        }
        h1 {
            color: #FFFFFF;
        }
        .contact-info p {
            font-size: 18px;
            margin: 10px 0;
        }
        .contact-info img {
            vertical-align: middle;
            margin-right: 10px;
        }
    </style>
</head>
<body>
<?php $this->load->view('header'); ?>
<div class="header-image">
    <img src="<?php echo base_url('theme/user/images/Header.png')?>" alt="...">
</div>
<div class="head-bread">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li><a href="<?php echo base_url('kontak')?>">Contact Us</a></li>
        </ol>
    </div>
</div>

<div class="container">
    <h1>Contact Us</h1>
    <p>Fill out the form below or reach us through our contact details:</p>
    <div class="contact-info">
        <p><img src="<?php echo base_url('theme/user/images/Lokasi.png')?>" alt="Address Icon" width="40"> <strong>Address:</strong> Grojogan RT 01, Tamanan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55191</p>
        <p><img src="<?php echo base_url('theme/user/images/Telepon.png')?>" alt="Phone Icon" width="40"> <strong>Phone:</strong> +628145637475</p>
        <p><img src="<?php echo base_url('theme/user/images/Email.png')?>" alt="Email Icon" width="40"> <strong>Email:</strong> pesagi@gmail.com</p>
    </div>
</div>

<!-- <?php $this->load->view('footer'); ?> -->
</body>
</html>
