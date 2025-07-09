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
    $harga_paket = (int)$_POST['harga_paket'];
    $total_tagihan = (int)$_POST['total_tagihan'];

    // Validasi dasar
    if (empty($nama_pemesan) || empty($phone) || empty($tanggal_pesan) || empty($waktu_pelaksanaan) || $jumlah_peserta <= 0) {
        die("Error: Semua field wajib diisi dengan benar!");
    }

    // ========================================
    // Cek apakah tanggal_pesan sudah dipesan oleh orang lain
    $checkQuery = "SELECT COUNT(*) as jumlah FROM pemesanan WHERE tanggal_pesan = ?";
    $stmtCheck = $conn->prepare($checkQuery);

    if ($stmtCheck) {
        $stmtCheck->bind_param("s", $tanggal_pesan);
        $stmtCheck->execute();
        $result = $stmtCheck->get_result();
        $row = $result->fetch_assoc();

        if ($row['jumlah'] > 0) {
            echo "<script>alert('Tanggal tersebut sudah dipesan. Silakan pilih tanggal lain.'); window.location.href='homepage.php';</script>";
            exit();
        }

        $stmtCheck->close();
    } else {
        die("Query Error (pengecekan tanggal): " . $conn->error);
    }
    // ========================================

    // Prepared statement untuk penyimpanan data
    $sql = "INSERT INTO pemesanan (nama_pemesan, phone, tanggal_pesan, waktu_pelaksanaan, akomodasi, transportasi, service_makanan, jumlah_peserta, harga_paket, total_tagihan) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("ssssiiiidd", $nama_pemesan, $phone, $tanggal_pesan, $waktu_pelaksanaan, $akomodasi, $transportasi, $service_makanan, $jumlah_peserta, $harga_paket, $total_tagihan);
        
        if ($stmt->execute()) {
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
    header("Location: homepage.php");
    exit();
}
?>
