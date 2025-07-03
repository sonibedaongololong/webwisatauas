<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom CSS</title>
    <link rel="stylesheet" href="styles.css">
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
            <li><a href="#">Beranda</a></li>
            <li><a href="#paketwisata">Daftar Paket Wisata</a></li>
            <li><a href="modifikasi.php">Modifikasi Pesanan</a></li>
        </ul>
    </nav>

    <!-- Section: Kontainer Gabungan -->
    <main class="container">
        <div class="content">
            <!-- Section: Daftar Paket Wisata -->
            <section id="hope" class="tour-packages">
                <!-- Modal Form Pemesanan -->
                <div id="bookingModal" class="modal">
                    <div class="modal-content">
                        <div class="modal-header">
                            <span class="close" onclick="hideModal()">&times;</span>
                            <h2 id="paketwisata">Form Pemesanan Paket Wisata</h2>
                        </div>
                        <div class="modal-body">
                            <form action="simpan_order.php" method="POST">
                                <div class="form-group">
                                    <label for="nama_pemesan">Nama Pemesan:</label>
                                    <input type="text" id="nama_pemesan" name="nama_pemesan" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Nomor HP/Telp:</label>
                                    <input type="text" id="phone" name="phone" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_pesan">Tanggal Pesan:</label>
                                    <input type="date" id="tanggal_pesan" name="tanggal_pesan" required>
                                </div>
                                <div class="form-group">
                                    <label for="waktu_pelaksanaan">Waktu Pelaksanaan Perjalanan:</label>
                                    <input type="text" id="waktu_pelaksanaan" name="waktu_pelaksanaan" required>
                                </div>
                                <div class="checkbox-group">
                                    <label for="akomodasi">Akomodasi</label>
                                    <input type="checkbox" id="akomodasi" name="akomodasi" value="1000000">
                                </div>
                                <div class="checkbox-group">
                                    <label for="transportasi">Transportasi</label>
                                    <input type="checkbox" id="transportasi" name="transportasi" value="1200000">
                                </div>
                                <div class="checkbox-group">
                                    <label for="service_makanan">Service/Makanan</label>
                                    <input type="checkbox" id="service_makanan" name="service_makanan" value="500000">
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_peserta">Jumlah Peserta:</label>
                                    <input type="number" id="jumlah_peserta" name="jumlah_peserta" required>
                                </div>
                                <div class="form-group">
                                    <label for="harga_paket">Harga Paket Perjalanan:</label>
                                    <input type="number" id="harga_paket" name="harga_paket" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="total_tagihan">Jumlah Tagihan:</label>
                                    <input type="number" id="total_tagihan" name="total_tagihan" readonly>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit">Simpan</button>
                                    <button type="button" onclick="calculateTotal()">Hitung</button>
                                    <button type="reset">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Menampilkan Kartu Paket Wisata -->
                <?php
                $tourPackages = [
                    [
                        'img' => './img/4632392.jpg',
                        'title' => 'Pulau Padar',
                        'location' => 'Labuhan Bajo NTT',
                        'description' => 'Berada di Kabupaten Manggarai Barat NTT Indonesia, memiliki bukit indah dengan tiga teluk dan pasir berwarna-warni.',
                    ],
                    [
                        'img' => './img/Wae-Rebo-Village-Travel-Guide-scaled.jpg',
                        'title' => 'Kampung Adat Waerebo',
                        'location' => 'Ngada NTT',
                        'description' => 'Terletak di Kabupaten Manggarai, NTT, Indonesia, memiliki rumah adat berbentuk kerucut yang disebut "Mbaru Niang".',
                    ],
                    [
                        'img' => './img/4632392.jpg',
                        'title' => 'Danau Kelimutu',
                        'location' => 'Ende NTT',
                        'description' => 'Terletak di Kabupaten Ende, NTT, Indonesia. memiliki 3 warna.',
                    ],
                    [
                        'img' => './img/Wae-Rebo-Village-Travel-Guide-scaled.jpg',
                        'title' => 'Pulau Komodo',
                        'location' => 'Manggarai Barat NTT',
                        'description' => 'Pulau ini terkenal sebagai habitat asli hewan komodo.',
                    ],
                ];

                foreach ($tourPackages as $package) {
                    echo '<div class="card">';
                    echo '<img src="' . $package['img'] . '" alt="' . $package['title'] . '" class="card-img" />';
                    echo '<div class="card-body">';
                    echo '<h1 class="card-title">' . $package['title'] . '</h1>';
                    echo '<p class="card-text">' . $package['location'] . '</p>';
                    echo '<p class="card-text">' . $package['description'] . '</p>';
                    echo '<a href="javascript:void(0);" class="btn" onclick="showModal()">Pesan Sekarang</a>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </section>

            <!-- Section: Link Video Wisata -->
            <section id="VideoLink" class="video-links">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Paket Wisata 1</h1>
                        <a href="https://youtu.be/2Rc4vautOcg?si=cZtkJx1pwkrmCjVU" target="_blank">
                            <img src="https://img.youtube.com/vi/2Rc4vautOcg/hqdefault.jpg" alt="Pulau Padar Video" class="card-img" />
                        </a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Paket Wisata 2</h1>
                        <a href="https://youtu.be/7XRHZ4g9z3A?si=OZ1TAny4eUOkx5B4" target="_blank">
                            <img src="https://img.youtube.com/vi/7XRHZ4g9z3A/hqdefault.jpg" alt="Wae Rebo Video" class="card-img" />
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p class="footer-left">FOLKNTT WISATA NTT</p>
            <p class="footer-right">© 2077 Untitled UI. All rights reserved.</p>
        </div>
    </footer>

    <script>
        function showModal() {
            document.getElementById("bookingModal").style.display = "block";
        }

        function hideModal() {
            document.getElementById("bookingModal").style.display = "none";
        }

        function calculateTotal() {
            let akomodasi = document.getElementById('akomodasi').checked ? 1000000 : 0;
            let transportasi = document.getElementById('transportasi').checked ? 1200000 : 0;
            let service_makanan = document.getElementById('service_makanan').checked ? 500000 : 0;
            let jumlah_peserta = parseInt(document.getElementById('jumlah_peserta').value) || 0;
            let harga_paket = akomodasi + transportasi + service_makanan;
            let total_tagihan = harga_paket * jumlah_peserta;

            document.getElementById('harga_paket').value = harga_paket;
            document.getElementById('total_tagihan').value = total_tagihan;
        }

        document.getElementById("bookingForm").addEventListener("submit", function (e) {
            calculateTotal();
        });
    </script>
</body>
</html>
