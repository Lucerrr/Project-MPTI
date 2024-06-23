<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
</head>
<body>
    <h1>Invoice</h1>
    <p><strong>Nama:</strong> <?= $nama ?></p>
    <p><strong>No HP:</strong> <?= $notelp ?></p>
    <p><strong>Alamat:</strong> <?= $alamat ?></p>
    <h2>Order List</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Periode Sewa</th>
                <th>Jumlah</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($order_list as $order): ?>
            <tr>
                <td><?= $order->nama ?></td>
                <td><?= $order->dari ?> - <?= $order->sampai ?></td>
                <td><?= $order->jumlah ?></td>
                <td><?= $order->harga ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <p><strong>Date Return:</strong> <?= $date_return ?></p>
    <p><strong>Total Payment:</strong> <?= $total_payment ?></p>
</body>
</html>
