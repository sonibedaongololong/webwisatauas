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

</html>