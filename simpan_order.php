<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_pemesan = $_POST['nama_pemesan'];
    $phone = $_POST['phone'];
    $tanggal_pesan = $_POST['tanggal_pesan'];
    $waktu_pelaksanaan = $_POST['waktu_pelaksanaan'];
    $akomodasi = isset($_POST['akomodasi']) ? 1 : 0;
    $transportasi = isset($_POST['transportasi']) ? 1 : 0;
    $service_makanan = isset($_POST['service_makanan']) ? 1 : 0;
    $jumlah_peserta = $_POST['jumlah_peserta'];
    $harga_paket = $_POST['harga_paket'];
    $total_tagihan = $_POST['total_tagihan'];

    $sql = "INSERT INTO pemesanan (nama_pemesan, phone, tanggal_pesan, waktu_pelaksanaan, akomodasi, transportasi, service_makanan, jumlah_peserta, harga_paket, total_tagihan)
            VALUES ('$nama_pemesan', '$phone', '$tanggal_pesan', '$waktu_pelaksanaan', $akomodasi, $transportasi, $service_makanan, $jumlah_peserta, $harga_paket, $total_tagihan)";

    if ($conn->query($sql) === TRUE) {
        header("Location: modifikasi.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
