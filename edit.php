<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pemesanan - Desa Wisata Pulesari</title>
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
            --warning-color: #ffc107;
            --warning-dark: #e0a800;
        }

        body {
            background-color: #f8f9fa;
        }

        .header-image {
            height: 250px;
            background-image: linear-gradient(rgba(0, 123, 255, 0.3), rgba(0, 123, 255, 0.3)), url('https://images.unsplash.com/photo-1506905925346-21bda4d2df4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1200&q=80');
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

        .btn-warning {
            background-color: var(--warning-color);
            border-color: var(--warning-color);
            color: #212529;
        }

        .btn-warning:hover {
            background-color: var(--warning-dark);
            border-color: var(--warning-dark);
            color: #212529;
        }

        .bg-primary {
            background-color: var(--primary-color) !important;
        }

        .text-primary {
            color: var(--primary-color) !important;
        }

        .form-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 0 30px rgba(0,0,0,0.1);
            padding: 2rem;
            margin-top: -50px;
            position: relative;
            z-index: 10;
        }

        .form-section {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            border-left: 4px solid var(--primary-color);
        }

        .form-section h5 {
            color: var(--primary-color);
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .form-label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 0.5rem;
        }

        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .form-check-input {
            width: 1.5em;
            height: 1.5em;
            margin-top: 0.125em;
        }

        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .form-check-label {
            font-weight: 500;
            margin-left: 0.5rem;
        }

        .price-display {
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
            padding: 1rem;
            border-radius: 10px;
            text-align: center;
            margin-top: 1rem;
        }

        .price-display h6 {
            margin: 0;
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .price-display .price {
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0;
        }

        .action-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 2rem;
        }

        .btn-calculate {
            background: linear-gradient(135deg, var(--warning-color), var(--warning-dark));
            border: none;
            color: #212529;
            font-weight: 600;
        }

        .btn-calculate:hover {
            background: linear-gradient(135deg, var(--warning-dark), #d39e00);
            color: #212529;
        }

        .stats-card {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 2rem;
        }

        .checkbox-group {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
            margin-top: 1rem;
        }

        .checkbox-item {
            background: white;
            padding: 1rem;
            border-radius: 8px;
            border: 2px solid #e9ecef;
            transition: all 0.3s ease;
        }

        .checkbox-item:hover {
            border-color: var(--primary-color);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .checkbox-item.checked {
            border-color: var(--primary-color);
            background: #f8f9fa;
        }

        .service-price {
            font-size: 0.9rem;
            color: var(--success-color);
            font-weight: bold;
        }

        footer {
            background-color: #343a40;
            color: white;
            margin-top: 50px;
        }

        @media (max-width: 768px) {
            .form-container {
                margin: 0 15px;
                margin-top: -30px;
                padding: 1.5rem;
            }
            
            .action-buttons {
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .checkbox-group {
                grid-template-columns: 1fr;
            }
        }

        .form-animation {
            opacity: 0;
            transform: translateY(20px);
            animation: slideUp 0.5s ease forwards;
        }

        @keyframes slideUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header-image">
        <div class="container text-center">
            <h1 class="display-5 fw-bold">Edit Pemesanan</h1>
            <p class="lead">Ubah Data Pemesanan Wisata</p>
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
                        <a class="nav-link" href="homepage.php">
                            <i class="bi bi-house-door-fill me-1"></i>Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="homepage.php">
                            <i class="bi bi-list-ul me-1"></i>Daftar Paket Wisata
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="modifikasi.php">
                            <i class="bi bi-pencil-square me-1"></i>Modifikasi Pesanan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="bi bi-box-arrow-in-right me-1"></i>Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-5">
        <div class="form-container">
            <?php
            include 'db_connection.php';
            $id = $_GET['id'];
            $sql = "SELECT * FROM pemesanan WHERE id = $id";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            ?>
            
            <form action="update_order.php" method="POST" id="editForm">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                
                <!-- Header Section -->
                <div class="text-center mb-4">
                    <h2 class="text-primary">
                        <i class="bi bi-pencil-square me-2"></i>Edit Pemesanan
                    </h2>
                    <p class="text-muted">Ubah data pemesanan sesuai kebutuhan</p>
                </div>

                <!-- Personal Information Section -->
                <div class="form-section form-animation">
                    <h5><i class="bi bi-person-fill me-2"></i>Informasi Pemesan</h5>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nama_pemesan" class="form-label">
                                <i class="bi bi-person me-1"></i>Nama Pemesan
                            </label>
                            <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" 
                                   value="<?php echo htmlspecialchars($row['nama_pemesan']); ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">
                                <i class="bi bi-telephone me-1"></i>Nomor HP/Telp
                            </label>
                            <input type="text" class="form-control" id="phone" name="phone" 
                                   value="<?php echo htmlspecialchars($row['phone']); ?>" required>
                        </div>
                    </div>
                </div>

                <!-- Booking Details Section -->
                <div class="form-section form-animation">
                    <h5><i class="bi bi-calendar-event me-2"></i>Detail Pemesanan</h5>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="tanggal_pesan" class="form-label">
                                <i class="bi bi-calendar-date me-1"></i>Tanggal Pesan
                            </label>
                            <input type="date" class="form-control" id="tanggal_pesan" name="tanggal_pesan" 
                                   value="<?php echo $row['tanggal_pesan']; ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="waktu_pelaksanaan" class="form-label">
                                <i class="bi bi-clock me-1"></i>Waktu Pelaksanaan
                            </label>
                            <input type="text" class="form-control" id="waktu_pelaksanaan" name="waktu_pelaksanaan" 
                                   value="<?php echo htmlspecialchars($row['waktu_pelaksanaan']); ?>" 
                                   placeholder="Contoh: 3 hari 2 malam" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="jumlah_peserta" class="form-label">
                                <i class="bi bi-people me-1"></i>Jumlah Peserta
                            </label>
                            <input type="number" class="form-control" id="jumlah_peserta" name="jumlah_peserta" 
                                   value="<?php echo $row['jumlah_peserta']; ?>" min="1" required>
                        </div>
                    </div>
                </div>

                <!-- Service Selection Section -->
                <div class="form-section form-animation">
                    <h5><i class="bi bi-gear-fill me-2"></i>Pilihan Layanan</h5>
                    <div class="checkbox-group">
                        <div class="checkbox-item <?php echo $row['akomodasi'] ? 'checked' : ''; ?>">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="akomodasi" name="akomodasi" 
                                       <?php echo $row['akomodasi'] ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="akomodasi">
                                    <i class="bi bi-house-door me-1"></i>Akomodasi
                                </label>
                            </div>
                            <div class="service-price mt-2">Rp 1.000.000</div>
                        </div>
                        
                        <div class="checkbox-item <?php echo $row['transportasi'] ? 'checked' : ''; ?>">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="transportasi" name="transportasi" 
                                       <?php echo $row['transportasi'] ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="transportasi">
                                    <i class="bi bi-bus-front me-1"></i>Transportasi
                                </label>
                            </div>
                            <div class="service-price mt-2">Rp 1.200.000</div>
                        </div>
                        
                        <div class="checkbox-item <?php echo $row['service_makanan'] ? 'checked' : ''; ?>">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="service_makanan" name="service_makanan" 
                                       <?php echo $row['service_makanan'] ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="service_makanan">
                                    <i class="bi bi-cup-hot me-1"></i>Service/Makanan
                                </label>
                            </div>
                            <div class="service-price mt-2">Rp 500.000</div>
                        </div>
                    </div>
                </div>

                <!-- Price Summary Section -->
                <div class="form-section form-animation">
                    <h5><i class="bi bi-calculator me-2"></i>Ringkasan Harga</h5>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="harga_paket" class="form-label">
                                <i class="bi bi-tag me-1"></i>Harga Paket Perjalanan
                            </label>
                            <input type="number" class="form-control" id="harga_paket" name="harga_paket" 
                                   value="<?php echo $row['harga_paket']; ?>" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="total_tagihan" class="form-label">
                                <i class="bi bi-cash-stack me-1"></i>Total Tagihan
                            </label>
                            <input type="number" class="form-control" id="total_tagihan" name="total_tagihan" 
                                   value="<?php echo $row['total_tagihan']; ?>" readonly>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="price-display">
                                <h6>Harga Per Paket</h6>
                                <div class="price" id="displayHargaPaket">Rp <?php echo number_format($row['harga_paket'], 0, ',', '.'); ?></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="price-display">
                                <h6>Total Keseluruhan</h6>
                                <div class="price" id="displayTotal">Rp <?php echo number_format($row['total_tagihan'], 0, ',', '.'); ?></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="action-buttons">
                    <button type="button" class="btn btn-calculate btn-lg" onclick="calculateTotal()">
                        <i class="bi bi-calculator me-2"></i>Hitung Ulang
                    </button>
                    <button type="submit" class="btn btn-success btn-lg">
                        <i class="bi bi-check-circle me-2"></i>Update Pesanan
                    </button>
                    <button type="button" class="btn btn-warning btn-lg" onclick="resetForm()">
                        <i class="bi bi-arrow-clockwise me-2"></i>Reset
                    </button>
                    <a href="modifikasi.php" class="btn btn-secondary btn-lg">
                        <i class="bi bi-arrow-left me-2"></i>Kembali
                    </a>
                </div>
            </form>
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
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function calculateTotal() {
            let akomodasi = document.getElementById('akomodasi').checked ? 1000000 : 0;
            let transportasi = document.getElementById('transportasi').checked ? 1200000 : 0;
            let service_makanan = document.getElementById('service_makanan').checked ? 500000 : 0;
            let jumlah_peserta = parseInt(document.getElementById('jumlah_peserta').value) || 0;
            
            let harga_paket = akomodasi + transportasi + service_makanan;
            let total_tagihan = harga_paket * jumlah_peserta;

            document.getElementById('harga_paket').value = harga_paket;
            document.getElementById('total_tagihan').value = total_tagihan;
            
            // Update display
            document.getElementById('displayHargaPaket').textContent = 'Rp ' + harga_paket.toLocaleString('id-ID');
            document.getElementById('displayTotal').textContent = 'Rp ' + total_tagihan.toLocaleString('id-ID');
            
            // Add animation effect
            const priceDisplays = document.querySelectorAll('.price-display');
            priceDisplays.forEach(display => {
                display.style.transform = 'scale(1.05)';
                setTimeout(() => {
                    display.style.transform = 'scale(1)';
                }, 200);
            });
        }

        function resetForm() {
            if (confirm('Apakah Anda yakin ingin mereset form? Semua perubahan akan hilang.')) {
                document.getElementById('editForm').reset();
                calculateTotal();
            }
        }

        // Auto-calculate when checkboxes or participant count changes
        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            const participantInput = document.getElementById('jumlah_peserta');
            
            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    calculateTotal();
                    updateCheckboxStyles();
                });
            });
            
            participantInput.addEventListener('input', calculateTotal);
            
            // Initialize
            updateCheckboxStyles();
            
            // Add animation to form sections
            const sections = document.querySelectorAll('.form-animation');
            sections.forEach((section, index) => {
                section.style.animationDelay = `${index * 0.1}s`;
            });
        });

        function updateCheckboxStyles() {
            const checkboxItems = document.querySelectorAll('.checkbox-item');
            checkboxItems.forEach(item => {
                const checkbox = item.querySelector('input[type="checkbox"]');
                if (checkbox.checked) {
                    item.classList.add('checked');
                } else {
                    item.classList.remove('checked');
                }
            });
        }

        // Add smooth scroll to top when form is submitted
        document.getElementById('editForm').addEventListener('submit', function(e) {
            const submitBtn = document.querySelector('button[type="submit"]');
            submitBtn.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Memproses...';
            submitBtn.disabled = true;
        });
    </script>
</body>
</html>