<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize dan validasi input
    $nama_pemesan = mysqli_real_escape_string($conn, trim($_POST['nama_pemesan']));
    $phone = mysqli_real_escape_string($conn, trim($_POST['phone']));
    $tanggal_pesan = mysqli_real_escape_string($conn, $_POST['tanggal_pesan']);
    $waktu_pelaksanaan = mysqli_real_escape_string($conn, trim($_POST['waktu_pelaksanaan']));
    
    // Checkbox values - gunakan nilai numerik untuk database
    $akomodasi = isset($_POST['akomodasi']) ? 1 : 0;
    $transportasi = isset($_POST['transportasi']) ? 1 : 0;
    $service_makanan = isset($_POST['service_makanan']) ? 1 : 0;
    
    $jumlah_peserta = (int)$_POST['jumlah_peserta'];
    $harga_paket = (int)$_POST['harga_paket']; // Sudah dalam bentuk angka dari hidden input
    $total_tagihan = (int)$_POST['total_tagihan']; // Sudah dalam bentuk angka dari hidden input

    // Validasi data
    if (empty($nama_pemesan) || empty($phone) || empty($tanggal_pesan) || empty($waktu_pelaksanaan) || $jumlah_peserta <= 0) {
        die("Error: Semua field wajib diisi dengan benar!");
    }

    // Prepared statement untuk keamanan
    $sql = "INSERT INTO pemesanan (nama_pemesan, phone, tanggal_pesan, waktu_pelaksanaan, akomodasi, transportasi, service_makanan, jumlah_peserta, harga_paket, total_tagihan) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("ssssiiiidd", $nama_pemesan, $phone, $tanggal_pesan, $waktu_pelaksanaan, $akomodasi, $transportasi, $service_makanan, $jumlah_peserta, $harga_paket, $total_tagihan);
        
        if ($stmt->execute()) {
            // Redirect dengan pesan sukses
            header("Location: modifikasi.php?success=1");
            exit();
        } else {
            echo "Error saat menyimpan data: " . $stmt->error;
        }
        
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
    
    $conn->close();
} else {
    // Jika bukan POST request, redirect ke homepage
    header("Location: homepage.php");
    exit();
}
?>