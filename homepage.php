<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Wisata Pulesari</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #007bff;
            --primary-dark: #0056b3;
            --success-color: #28a745;
            --success-dark: #218838;
            --danger-color: #dc3545;
            --danger-dark: #c82333;
        }

        body {
            background-color: #f8f9fa;
        }

        .header-image {
            height: 400px;
            background-image: linear-gradient(rgba(0, 123, 255, 0.3), rgba(0, 123, 255, 0.3)), url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&h=400');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .navbar-brand {
            font-weight: bold;
        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .video-card .card-img-top {
            height: 150px;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
        }

        .btn-success {
            background-color: var(--success-color);
            border-color: var(--success-color);
        }

        .btn-success:hover {
            background-color: var(--success-dark);
            border-color: var(--success-dark);
        }

        .btn-danger {
            background-color: var(--danger-color);
            border-color: var(--danger-color);
        }

        .btn-danger:hover {
            background-color: var(--danger-dark);
            border-color: var(--danger-dark);
        }

        .bg-primary {
            background-color: var(--primary-color) !important;
        }

        .modal-header {
            background-color: var(--primary-color);
            color: white;
        }

        .modal-header .btn-close {
            filter: brightness(0) invert(1);
        }

        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        footer {
            background-color: #343a40;
            color: white;
            margin-top: 50px;
        }

        .checkbox-price {
            font-weight: bold;
            color: var(--primary-color);
        }

        .video-thumbnail {
            position: relative;
            overflow: hidden;
        }

        .video-thumbnail::after {
            content: '\f144';
            font-family: 'bootstrap-icons';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 3rem;
            color: rgba(255,255,255,0.8);
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .calculated-result {
            background-color: #e7f3ff;
            border: 2px solid var(--primary-color);
            border-radius: 5px;
            padding: 0.5rem;
            font-weight: bold;
            color: var(--primary-color);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header-image">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">Selamat Datang Di Desa Wisata Pulesari</h1>
            <p class="lead">Jelajahi Keindahan Nusa Tenggara Timur</p>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="bi bi-geo-alt-fill me-2"></i>Pulesari Tours
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="bi bi-house-door-fill me-1"></i>Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#paketwisata">
                            <i class="bi bi-list-ul me-1"></i>Daftar Paket Wisata
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="modifikasi.php">
                            <i class="bi bi-pencil-square me-1"></i>Modifikasi Pesanan
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="bi bi-pencil-square me-1"></i>Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="bi bi-pencil-square me-1"></i>Sign In
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-5">
        <div class="row">
            <!-- Tour Packages Column -->
            <div class="col-lg-8">
                <h2 id="paketwisata" class="mb-4 text-primary">
                    <i class="bi bi-camera-fill me-2"></i>Paket Wisata Unggulan
                </h2>
                <div class="row g-4">
                    <!-- Tour Package Cards -->
                    <div class="col-md-6">
                        <div class="card h-100">
                            <img src="./img/labuanbajo.jpg" 
                                 class="card-img-top" alt="Pulau Padar">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-primary">Pulau Padar</h5>
                                <p class="text-muted mb-2">
                                    <i class="bi bi-geo-alt me-1"></i>Labuhan Bajo NTT
                                </p>
                                <p class="card-text flex-grow-1">
                                    Berada di Kabupaten Manggarai Barat NTT Indonesia, memiliki bukit indah dengan tiga teluk dan pasir berwarna-warni.
                                </p>
                                <button class="btn btn-primary" onclick="showModal()">
                                    <i class="bi bi-cart-plus me-1"></i>Pesan Sekarang
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100">
                            <img src="./img/waerebo.jpg" 
                                 class="card-img-top" alt="Kampung Adat Waerebo">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-primary">Kampung Adat Waerebo</h5>
                                <p class="text-muted mb-2">
                                    <i class="bi bi-geo-alt me-1"></i>Ngada NTT
                                </p>
                                <p class="card-text flex-grow-1">
                                    Terletak di Kabupaten Manggarai, NTT, Indonesia, memiliki rumah adat berbentuk kerucut yang disebut "Mbaru Niang".
                                </p>
                                <button class="btn btn-primary" onclick="showModal()">
                                    <i class="bi bi-cart-plus me-1"></i>Pesan Sekarang
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100">
                            <img src="http://3.bp.blogspot.com/-1sbZcHo8Jqk/Vb-B5h6jwyI/AAAAAAAAGFE/rrEz4oSIsHY/s1600/kelimutu%2Blake%2Bindonesia%2B5.jpg" 
                                 class="card-img-top" alt="Danau Kelimutu">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-primary">Danau Kelimutu</h5>
                                <p class="text-muted mb-2">
                                    <i class="bi bi-geo-alt me-1"></i>Ende NTT
                                </p>
                                <p class="card-text flex-grow-1">
                                    Terletak di Kabupaten Ende, NTT, Indonesia. memiliki 3 warna yang berbeda di setiap danau.
                                </p>
                                <button class="btn btn-primary" onclick="showModal()">
                                    <i class="bi bi-cart-plus me-1"></i>Pesan Sekarang
                                </button>                                                                                                                                                                      
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100">
                            <img src="https://cdn.idntimes.com/content-images/post/20170717/komodo3-d83292ce882c318acd3969d2b6b9769d.jpg                                                                                                                                                                                                                                                                                                 " 
                                 class="card-img-top" alt="Pulau Komodo">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-primary">Pulau Komodo</h5>
                                <p class="text-muted mb-2">
                                    <i class="bi bi-geo-alt me-1"></i>Manggarai Barat NTT
                                </p>
                                <p class="card-text flex-grow-1">
                                    Pulau ini terkenal sebagai habitat asli hewan komodo, reptil terbesar di dunia.
                                </p>
                                <button class="btn btn-primary" onclick="showModal()">
                                    <i class="bi bi-cart-plus me-1"></i>Pesan Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Video Links Column -->
            <div class="col-lg-4">
                <h2 class="mb-4 text-primary">
                    <i class="bi bi-play-circle-fill me-2"></i>Video Wisata
                </h2>
                <div class="row g-3">
                    <div class="col-12">
                        <div class="card video-card">
                            <div class="video-thumbnail">
                                <img src="https://img.youtube.com/vi/2Rc4vautOcg/hqdefault.jpg" 
                                     class="card-img-top" alt="Pulau Padar Video">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title text-primary">Paket Wisata 1</h6>
                                <a href="https://youtu.be/2Rc4vautOcg?si=cZtkJx1pwkrmCjVU" 
                                   target="_blank" class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-play-fill me-1"></i>Tonton Video
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card video-card">
                            <div class="video-thumbnail">
                                <img src="https://img.youtube.com/vi/7XRHZ4g9z3A/hqdefault.jpg" 
                                     class="card-img-top" alt="Wae Rebo Video">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title text-primary">Paket Wisata 2</h6>
                                <a href="https://youtu.be/7XRHZ4g9z3A?si=OZ1TAny4eUOkx5B4" 
                                   target="_blank" class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-play-fill me-1"></i>Tonton Video
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Booking Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="bi bi-clipboard-check me-2"></i>Form Pemesanan Paket Wisata
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="bookingForm" action="simpan_order.php" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="nama_pemesan" class="form-label">
                                    <i class="bi bi-person-fill me-1"></i>Nama Pemesan
                                </label>
                                <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">
                                    <i class="bi bi-telephone-fill me-1"></i>Nomor HP/Telp
                                </label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="col-md-6">
                                <label for="tanggal_pesan" class="form-label">
                                    <i class="bi bi-calendar-date me-1"></i>Tanggal Pesan
                                </label>
                                <input type="date" class="form-control" id="tanggal_pesan" name="tanggal_pesan" required>
                            </div>
                            <div class="col-md-6">
                                <label for="waktu_pelaksanaan" class="form-label">
                                    <i class="bi bi-clock-fill me-1"></i>Waktu Pelaksanaan
                                </label>
                                <input type="text" class="form-control" id="waktu_pelaksanaan" name="waktu_pelaksanaan" 
                                       placeholder="Contoh: 3 Hari 2 Malam" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-bold text-primary">
                                    <i class="bi bi-check2-square me-1"></i>Pilihan Layanan
                                </label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="akomodasi" name="akomodasi" value="1000000">
                                    <label class="form-check-label" for="akomodasi">
                                        <i class="bi bi-house-door me-1"></i>Akomodasi
                                        <br><small class="checkbox-price">Rp 1.000.000</small>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="transportasi" name="transportasi" value="1200000">
                                    <label class="form-check-label" for="transportasi">
                                        <i class="bi bi-bus-front me-1"></i>Transportasi
                                        <br><small class="checkbox-price">Rp 1.200.000</small>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="service_makanan" name="service_makanan" value="500000">
                                    <label class="form-check-label" for="service_makanan">
                                        <i class="bi bi-cup-hot me-1"></i>Service/Makanan
                                        <br><small class="checkbox-price">Rp 500.000</small>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="jumlah_peserta" class="form-label">
                                    <i class="bi bi-people-fill me-1"></i>Jumlah Peserta
                                </label>
                                <input type="number" class="form-control" id="jumlah_peserta" name="jumlah_peserta" min="1" required>
                            </div>
                            <div class="col-md-4">
                                <label for="harga_paket" class="form-label">
                                    <i class="bi bi-tag-fill me-1"></i>Harga Paket
                                </label>
                                <input type="text" class="form-control calculated-result" id="harga_paket_display" readonly placeholder="Rp 0">
                                <input type="hidden" id="harga_paket" name="harga_paket" value="0">
                            </div>
                            <div class="col-md-4">
                                <label for="total_tagihan" class="form-label">
                                    <i class="bi bi-calculator me-1"></i>Total Tagihan
                                </label>
                                <input type="text" class="form-control calculated-result" id="total_tagihan_display" readonly placeholder="Rp 0">
                                <input type="hidden" id="total_tagihan" name="total_tagihan" value="0">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="calculateTotal()">
                        <i class="bi bi-calculator me-1"></i>Hitung Total
                    </button>
                    <button type="button" class="btn btn-primary" onclick="submitForm()">
                        <i class="bi bi-save me-1"></i>Simpan Pesanan
                    </button>
                    <button type="button" class="btn btn-danger" onclick="resetForm()">
                        <i class="bi bi-arrow-clockwise me-1"></i>Reset
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h5 class="mb-0">
                        <i class="bi bi-geo-alt-fill me-2"></i>FOLKNTT WISATA NTT
                    </h5>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0 text-muted">© 2024 Desa Wisata Pulesari. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function showModal() {
            const modal = new bootstrap.Modal(document.getElementById('bookingModal'));
            modal.show();
        }

        function calculateTotal() {
            // Ambil nilai checkbox
            let akomodasi = document.getElementById('akomodasi').checked ? 1000000 : 0;
            let transportasi = document.getElementById('transportasi').checked ? 1200000 : 0;
            let service_makanan = document.getElementById('service_makanan').checked ? 500000 : 0;
            let jumlah_peserta = parseInt(document.getElementById('jumlah_peserta').value) || 0;
            
            // Validasi jumlah peserta
            if (jumlah_peserta <= 0) {
                alert('Masukkan jumlah peserta terlebih dahulu!');
                return;
            }
            
            // Hitung harga paket dan total tagihan
            let harga_paket = akomodasi + transportasi + service_makanan;
            let total_tagihan = harga_paket * jumlah_peserta;

            // Update nilai hidden input untuk dikirim ke server
            document.getElementById('harga_paket').value = harga_paket;
            document.getElementById('total_tagihan').value = total_tagihan;

            // Update tampilan dengan format rupiah
            document.getElementById('harga_paket_display').value = formatRupiah(harga_paket);
            document.getElementById('total_tagihan_display').value = formatRupiah(total_tagihan);

            // Berikan feedback visual
            document.getElementById('harga_paket_display').style.backgroundColor = '#d4edda';
            document.getElementById('total_tagihan_display').style.backgroundColor = '#d4edda';
            
            setTimeout(() => {
                document.getElementById('harga_paket_display').style.backgroundColor = '#e7f3ff';
                document.getElementById('total_tagihan_display').style.backgroundColor = '#e7f3ff';
            }, 1000);
        }

        function formatRupiah(angka) {
            return 'Rp ' + angka.toLocaleString('id-ID');
        }

        function submitForm() {
            // Validasi form sebelum submit
            const form = document.getElementById('bookingForm');
            const requiredFields = ['nama_pemesan', 'phone', 'tanggal_pesan', 'waktu_pelaksanaan', 'jumlah_peserta'];
            
            for (let field of requiredFields) {
                if (!document.getElementById(field).value.trim()) {
                    alert('Harap lengkapi semua field yang diperlukan!');
                    document.getElementById(field).focus();
                    return;
                }
            }

            // Pastikan harga sudah dihitung
            if (document.getElementById('harga_paket').value == '0') {
                alert('Silakan hitung total terlebih dahulu!');
                return;
            }

            // Submit form
            form.submit();
        }

        function resetForm() {
            document.getElementById('bookingForm').reset();
            document.getElementById('harga_paket').value = '0';
            document.getElementById('total_tagihan').value = '0';
            document.getElementById('harga_paket_display').value = '';
            document.getElementById('total_tagihan_display').value = '';
            document.getElementById('harga_paket_display').placeholder = 'Rp 0';
            document.getElementById('total_tagihan_display').placeholder = 'Rp 0';
        }

        // Auto calculate when checkboxes or participant count changes
        document.addEventListener('DOMContentLoaded', function() {
            const autoCalculateElements = document.querySelectorAll('input[type="checkbox"], #jumlah_peserta');
            autoCalculateElements.forEach(element => {
                element.addEventListener('change', function() {
                    if (document.getElementById('jumlah_peserta').value > 0) {
                        calculateTotal();
                    }
                });
            });

            // Set current date as default
            document.getElementById('tanggal_pesan').value = new Date().toISOString().split('T')[0];
        });
    </script>
</body>
</html>