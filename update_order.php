<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
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

    $sql = "UPDATE pemesanan 
            SET nama_pemesan='$nama_pemesan', phone='$phone', tanggal_pesan='$tanggal_pesan', waktu_pelaksanaan='$waktu_pelaksanaan', akomodasi=$akomodasi, transportasi=$transportasi, service_makanan=$service_makanan, jumlah_peserta=$jumlah_peserta, harga_paket=$harga_paket, total_tagihan=$total_tagihan 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: modifikasi.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
