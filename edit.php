<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Pemesanan</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Edit Pemesanan Paket Wisata</h2>
        <?php
        include 'db_connection.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM pemesanan WHERE id = $id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        ?>
        <form action="update_order.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label for="nama_pemesan">Nama Pemesan:</label>
            <input type="text" id="nama_pemesan" name="nama_pemesan" value="<?php echo $row['nama_pemesan']; ?>" required>

            <label for="phone">Nomor HP/Telp:</label>
            <input type="text" id="phone" name="phone" value="<?php echo $row['phone']; ?>" required>

            <label for="tanggal_pesan">Tanggal Pesan:</label>
            <input type="date" id="tanggal_pesan" name="tanggal_pesan" value="<?php echo $row['tanggal_pesan']; ?>" required>

            <label for="waktu_pelaksanaan">Waktu Pelaksanaan Perjalanan:</label>
            <input type="text" id="waktu_pelaksanaan" name="waktu_pelaksanaan" value="<?php echo $row['waktu_pelaksanaan']; ?>" required>

            <label for="akomodasi">Akomodasi (Rp 1,000,000):</label>
            <input type="checkbox" id="akomodasi" name="akomodasi" <?php echo $row['akomodasi'] ? 'checked' : ''; ?>>

            <label for="transportasi">Transportasi (Rp 1,200,000):</label>
            <input type="checkbox" id="transportasi" name="transportasi" <?php echo $row['transportasi'] ? 'checked' : ''; ?>>

            <label for="service_makanan">Service/Makanan (Rp 500,000):</label>
            <input type="checkbox" id="service_makanan" name="service_makanan" <?php echo $row['service_makanan'] ? 'checked' : ''; ?>>

            <label for="jumlah_peserta">Jumlah Peserta:</label>
            <input type="number" id="jumlah_peserta" name="jumlah_peserta" value="<?php echo $row['jumlah_peserta']; ?>" required>

            <label for="harga_paket">Harga Paket Perjalanan:</label>
            <input type="number" id="harga_paket" name="harga_paket" value="<?php echo $row['harga_paket']; ?>" readonly>

            <label for="total_tagihan">Jumlah Tagihan:</label>
            <input type="number" id="total_tagihan" name="total_tagihan" value="<?php echo $row['total_tagihan']; ?>" readonly>

            <button type="submit">Update</button>
            <button type="button" onclick="calculateTotal()">Hitung</button>
            <button type="reset">Reset</button>
        </form>
    </div>
    <script>
        function calculateTotal() {
            let akomodasi = document.getElementById('akomodasi').checked ? 1000000 : 0;
            let transportasi = document.getElementById('transportasi').checked ? 1200000 : 0;
            let service_makanan = document.getElementById('service_makanan').checked ? 500000 : 0;
            let jumlah_peserta = parseInt(document.getElementById('jumlah_peserta').value);
            let harga_paket = akomodasi + transportasi + service_makanan;
            let total_tagihan = harga_paket * jumlah_peserta;

            document.getElementById('harga_paket').value = harga_paket;
            document.getElementById('total_tagihan').value = total_tagihan;
        }
    </script>
</body>
</html>
