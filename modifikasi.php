<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifikasi Pesanan - Desa Wisata Pulesari</title>
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
            height: 300px;
            background-image: linear-gradient(rgba(0, 123, 255, 0.3), rgba(0, 123, 255, 0.3)), url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&h=300');
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

        .table-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .table thead th {
            background-color: var(--primary-color);
            color: white;
            border: none;
            font-weight: 600;
            text-align: center;
            vertical-align: middle;
        }

        .table tbody td {
            vertical-align: middle;
            text-align: center;
        }

        .table tbody tr:hover {
            background-color: #f8f9fa;
        }

        .badge {
            font-size: 0.8em;
        }

        .action-buttons {
            display: flex;
            gap: 5px;
            justify-content: center;
        }

        .price-cell {
            font-weight: bold;
            color: var(--success-color);
        }

        .empty-state {
            text-align: center;
            padding: 3rem;
            color: #6c757d;
        }

        .empty-state i {
            font-size: 4rem;
            margin-bottom: 1rem;
            opacity: 0.5;
        }

        footer {
            background-color: #343a40;
            color: white;
            margin-top: 50px;
        }

        .stats-card {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 2rem;
        }

        .stats-card .stats-number {
            font-size: 2rem;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .table-responsive {
                font-size: 0.875rem;
            }
            
            .action-buttons {
                flex-direction: column;
            }
            
            .btn-sm {
                font-size: 0.75rem;
                padding: 0.25rem 0.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header-image">
        <div class="container text-center">
            <h1 class="display-5 fw-bold">Modifikasi Pesanan</h1>
            <p class="lead">Kelola Data Pemesanan Wisata</p>
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
                        <a class="nav-link" href="#">
                            <i class="bi bi-list-ul me-1"></i>Daftar Paket Wisata
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="bi bi-pencil-square me-1"></i>Modifikasi Pesanan
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-5">
        <!-- Stats Card -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="stats-card">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h3 class="mb-1">
                                <i class="bi bi-clipboard-data me-2"></i>Dashboard Pesanan
                            </h3>
                            <p class="mb-0">Kelola semua pesanan wisata dalam satu tempat</p>
                        </div>
                        <div class="col-md-4 text-md-end">
                            <div class="stats-number" id="totalOrders">0</div>
                            <small>Total Pesanan</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex flex-wrap gap-2">
                    <button class="btn btn-primary" onclick="refreshData()">
                        <i class="bi bi-arrow-clockwise me-1"></i>Refresh
                    </button>
                    <button class="btn btn-success" onclick="exportData()">
                        <i class="bi bi-download me-1"></i>Export
                    </button>
                    <button class="btn btn-warning" onclick="window.location.href='homepage.php'">
                        <i class="bi bi-plus-circle me-1"></i>Tambah Pesanan Baru
                    </button>
                </div>
            </div>
        </div>

        <!-- Orders Table -->
        <div class="table-container">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th><i class="bi bi-hash me-1"></i>No</th>
                            <th><i class="bi bi-person-fill me-1"></i>Nama</th>
                            <th><i class="bi bi-telephone-fill me-1"></i>Phone</th>
                            <th><i class="bi bi-people-fill me-1"></i>Peserta</th>
                            <th><i class="bi bi-calendar-date me-1"></i>Durasi</th>
                            <th><i class="bi bi-house-door me-1"></i>Akomodasi</th>
                            <th><i class="bi bi-bus-front me-1"></i>Transport</th>
                            <th><i class="bi bi-cup-hot me-1"></i>Makanan</th>
                            <th><i class="bi bi-tag-fill me-1"></i>Harga Paket</th>
                            <th><i class="bi bi-calculator me-1"></i>Total</th>
                            <th><i class="bi bi-gear-fill me-1"></i>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="orderList">
                        <?php
                        // Koneksi ke database
                        include 'db_connection.php';

                        // Mengambil data pesanan dari database
                        $sql = "SELECT * FROM pemesanan ORDER BY id DESC";
                        $result = $conn->query($sql);
                        $no = 1;

                        if ($result->num_rows > 0) {
                            // Menampilkan data pesanan
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td><span class='badge bg-secondary'>" . $no++ . "</span></td>";
                                echo "<td><strong>" . htmlspecialchars($row['nama_pemesan']) . "</strong></td>";
                                echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
                                echo "<td><span class='badge bg-info'>" . htmlspecialchars($row['jumlah_peserta']) . " orang</span></td>";
                                echo "<td>" . htmlspecialchars($row['waktu_pelaksanaan']) . "</td>";
                                echo "<td>" . ($row['akomodasi'] ? '<span class="badge bg-success">Ya</span>' : '<span class="badge bg-secondary">Tidak</span>') . "</td>";
                                echo "<td>" . ($row['transportasi'] ? '<span class="badge bg-success">Ya</span>' : '<span class="badge bg-secondary">Tidak</span>') . "</td>";
                                echo "<td>" . ($row['service_makanan'] ? '<span class="badge bg-success">Ya</span>' : '<span class="badge bg-secondary">Tidak</span>') . "</td>";
                                echo "<td class='price-cell'>Rp " . number_format($row['harga_paket'], 0, ',', '.') . "</td>";
                                echo "<td class='price-cell'><strong>Rp " . number_format($row['total_tagihan'], 0, ',', '.') . "</strong></td>";
                                echo "<td>";
                                echo "<div class='action-buttons'>";
                                echo "<a href='edit.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm' title='Edit'>";
                                echo "<i class='bi bi-pencil-fill'></i>";
                                echo "</a>";
                                echo "<a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm delete' title='Hapus'>";
                                echo "<i class='bi bi-trash-fill'></i>";
                                echo "</a>";
                                echo "</div>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='11'>";
                            echo "<div class='empty-state'>";
                            echo "<i class='bi bi-inbox'></i>";
                            echo "<h5>Belum Ada Pesanan</h5>";
                            echo "<p>Belum ada data pesanan yang tersedia. Mulai dengan membuat pesanan baru.</p>";
                            echo "<a href='homepage.php' class='btn btn-primary'>";
                            echo "<i class='bi bi-plus-circle me-1'></i>Buat Pesanan Baru";
                            echo "</a>";
                            echo "</div>";
                            echo "</td></tr>";
                        }

                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Summary Card -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-primary">
                            <i class="bi bi-info-circle-fill me-2"></i>Informasi
                        </h5>
                        <ul class="list-unstyled mb-0">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Data pesanan diurutkan berdasarkan yang terbaru</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Klik tombol edit untuk mengubah data pesanan</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i>Konfirmasi akan muncul sebelum menghapus data</li>
                        </ul>
                    </div>
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
        // Handle delete actions with confirmation
        document.getElementById("orderList").addEventListener("click", function (e) {
            if (e.target.closest('.delete')) {
                e.preventDefault();
                const deleteLink = e.target.closest('.delete');
                
                // Show custom confirmation modal
                if (confirm("⚠️ Peringatan!\n\nApakah Anda yakin ingin menghapus pesanan ini?\nData yang sudah dihapus tidak dapat dikembalikan.")) {
                    // Show loading state
                    const btn = deleteLink;
                    const originalContent = btn.innerHTML;
                    btn.innerHTML = '<i class="bi bi-hourglass-split"></i>';
                    btn.classList.add('disabled');
                    
                    // Simulate loading then redirect
                    setTimeout(() => {
                        window.location.href = deleteLink.href;
                    }, 500);
                }
            }
        });

        // Update total orders count
        function updateTotalOrders() {
            const rows = document.querySelectorAll('#orderList tr');
            const totalOrders = rows.length;
            const emptyState = document.querySelector('.empty-state');
            
            if (!emptyState) {
                document.getElementById('totalOrders').textContent = totalOrders;
            } else {
                document.getElementById('totalOrders').textContent = '0';
            }
        }

        // Refresh data function
        function refreshData() {
            const btn = event.target;
            const originalContent = btn.innerHTML;
            btn.innerHTML = '<i class="bi bi-hourglass-split me-1"></i>Memuat...';
            btn.classList.add('disabled');
            
            setTimeout(() => {
                location.reload();
            }, 1000);
        }

        // Export data function (placeholder)
        function exportData() {
            alert('Fitur export akan segera tersedia!');
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            updateTotalOrders();
            
            // Add animation to table rows
            const rows = document.querySelectorAll('#orderList tr');
            rows.forEach((row, index) => {
                row.style.opacity = '0';
                row.style.transform = 'translateY(20px)';
                
                setTimeout(() => {
                    row.style.transition = 'all 0.3s ease';
                    row.style.opacity = '1';
                    row.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });

        // Add hover effect to action buttons
        document.querySelectorAll('.action-buttons .btn').forEach(btn => {
            btn.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.1)';
            });
            
            btn.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        });
    </script>
</body>
</html>