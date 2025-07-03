<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modifikasi Pesanan</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <!-- Selamat Datang -->
    <header>
        <div class="header-text">
            <h1>Selamat Datang Di Desa Wisata Pulesari</h1>
        </div>
        <!-- Pembungkus Gambar -->
        <div class="header-image"></div>
    </header>

    <!-- Header Navigasi -->
    <nav class="navbar">
        <ul>
            <li><a href="homepage.php">Beranda</a></li>
            <li><a href="#">Daftar Paket Wisata</a></li>
            <li><a href="#">Modifikasi Pesanan</a></li>
        </ul>
    </nav>

    <!-- Modifikasi Pesanan -->
    <section id="modifikasi" class="container booking-form">
        <h2>Daftar Pesanan</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Phone</th>
                    <th>Jumlah Peserta</th>
                    <th>Jumlah Hari</th>
                    <th>Akomodasi</th>
                    <th>Transportasi</th>
                    <th>Service/Makanan</th>
                    <th>Harga Paket</th>
                    <th>Total Tagihan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="orderList">
                <?php
                // Koneksi ke database
                include 'db_connection.php';

                // Mengambil data pesanan dari database
                $sql = "SELECT * FROM pemesanan";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Menampilkan data pesanan
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['nama_pemesan']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['jumlah_peserta']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['waktu_pelaksanaan']) . "</td>";
                        echo "<td>" . ($row['akomodasi'] ? 'Y' : 'N') . "</td>";
                        echo "<td>" . ($row['transportasi'] ? 'Y' : 'N') . "</td>";
                        echo "<td>" . ($row['service_makanan'] ? 'Y' : 'N') . "</td>";
                        echo "<td>Rp " . number_format($row['harga_paket'], 0, ',', '.') . "</td>";
                        echo "<td>Rp " . number_format($row['total_tagihan'], 0, ',', '.') . "</td>";
                        echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete.php?id=" . $row['id'] . "' class='delete'>Delete</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='10'>Tidak ada pesanan</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </section>

    

    <script>
        // Handle delete actions
        document.getElementById("orderList").addEventListener("click", function (e) {
            if (e.target.classList.contains("delete")) {
                if (confirm("Apakah Anda yakin ingin menghapus pesanan ini?")) {
                    window.location.href = e.target.href; // Redirect to delete script
                }
            }
        });
    </script>
</body>
</html>
