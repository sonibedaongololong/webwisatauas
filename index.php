<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login dan Register - Pulesari Tours</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.0/font/bootstrap-icons.min.css" rel="stylesheet">
  <style>
    :root {
      --primary-blue: #1e3a8a;
      --light-blue: #3b82f6;
      --sky-blue: #0ea5e9;
      --blue-gradient: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 50%, #0ea5e9 100%);
      --white: #ffffff;
      --light-gray: #f8fafc;
      --shadow: rgba(59, 130, 246, 0.15);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: var(--blue-gradient);
      min-height: 100vh;
      position: relative;
      overflow-x: hidden;
    }

    /* Animated Background Elements */
    body::before {
      content: '';
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: 
        radial-gradient(circle at 20% 20%, rgba(59, 130, 246, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(14, 165, 233, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 40% 60%, rgba(30, 58, 138, 0.05) 0%, transparent 50%);
      animation: backgroundFloat 20s ease-in-out infinite;
      z-index: 1;
    }

    @keyframes backgroundFloat {
      0%, 100% { transform: translateY(0px) rotate(0deg); }
      50% { transform: translateY(-20px) rotate(180deg); }
    }

    /* Floating Particles */
    .floating-particles {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: 1;
    }

    .particle {
      position: absolute;
      width: 4px;
      height: 4px;
      background: rgba(255, 255, 255, 0.6);
      border-radius: 50%;
      animation: float 15s infinite linear;
    }

    @keyframes float {
      0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
      10% { opacity: 1; }
      90% { opacity: 1; }
      100% { transform: translateY(-100px) rotate(360deg); opacity: 0; }
    }

    /* Header Styling */
    .header-image {
      background: linear-gradient(135deg, rgba(30, 58, 138, 0.9), rgba(59, 130, 246, 0.8));
      padding: 80px 0;
      position: relative;
      z-index: 2;
      overflow: hidden;
    }

    .header-image::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: 
        radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
      animation: headerGlow 8s ease-in-out infinite;
    }

    @keyframes headerGlow {
      0%, 100% { transform: scale(1) rotate(0deg); }
      50% { transform: scale(1.1) rotate(180deg); }
    }

    .header-image h1 {
      color: var(--white);
      text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
      font-weight: 700;
      margin-bottom: 20px;
      animation: slideInDown 1s ease-out;
    }

    .header-image p {
      color: rgba(255, 255, 255, 0.9);
      font-size: 1.2rem;
      font-weight: 300;
      animation: slideInUp 1s ease-out 0.3s both;
    }

    @keyframes slideInDown {
      from { transform: translateY(-50px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    @keyframes slideInUp {
      from { transform: translateY(50px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    /* Navbar Styling */
    .navbar {
      background: rgba(255, 255, 255, 0.1) !important;
      backdrop-filter: blur(10px);
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
      z-index: 1000;
    }

    .navbar-brand {
      font-weight: 700;
      color: var(--white) !important;
      font-size: 1.5rem;
    }

    .nav-link {
      color: rgba(255, 255, 255, 0.9) !important;
      font-weight: 500;
      transition: all 0.3s ease;
      position: relative;
    }

    .nav-link:hover {
      color: var(--white) !important;
      transform: translateY(-2px);
    }

    .nav-link.active::after {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 50%;
      transform: translateX(-50%);
      width: 30px;
      height: 2px;
      background: var(--white);
      border-radius: 2px;
    }

    /* Main Container */
    .main-container {
      position: relative;
      z-index: 2;
      margin-top: 50px;
      margin-bottom: 50px;
    }

    /* Card Styling */
    .glass-card {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(20px);
      border-radius: 20px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 
        0 8px 32px rgba(0, 0, 0, 0.1),
        0 0 0 1px rgba(255, 255, 255, 0.05);
      transition: all 0.3s ease;
      overflow: hidden;
      position: relative;
    }

    .glass-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
      transition: left 0.5s ease;
    }

    .glass-card:hover::before {
      left: 100%;
    }

    .glass-card:hover {
      transform: translateY(-5px);
      box-shadow: 
        0 20px 40px rgba(0, 0, 0, 0.15),
        0 0 0 1px rgba(255, 255, 255, 0.1);
    }

    .card-body {
      padding: 40px;
      position: relative;
      z-index: 2;
    }

    .card-title {
      color: var(--white);
      font-weight: 700;
      font-size: 2rem;
      margin-bottom: 30px;
      text-align: center;
      position: relative;
    }

    .card-title::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 50px;
      height: 3px;
      background: linear-gradient(90deg, var(--sky-blue), var(--light-blue));
      border-radius: 2px;
    }

    /* Form Styling */
    .form-label {
      color: rgba(255, 255, 255, 0.9);
      font-weight: 600;
      margin-bottom: 8px;
    }

    .form-control {
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 12px;
      padding: 15px 20px;
      color: var(--white);
      font-size: 16px;
      transition: all 0.3s ease;
      backdrop-filter: blur(10px);
    }

    .form-control:focus {
      background: rgba(255, 255, 255, 0.15);
      border-color: var(--sky-blue);
      box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.2);
      color: var(--white);
      transform: translateY(-2px);
    }

    .form-control::placeholder {
      color: rgba(255, 255, 255, 0.6);
    }

    /* Button Styling */
    .btn-primary {
      background: linear-gradient(135deg, var(--light-blue), var(--sky-blue));
      border: none;
      border-radius: 12px;
      padding: 15px 30px;
      font-weight: 600;
      font-size: 16px;
      color: var(--white);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .btn-primary::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: left 0.5s ease;
    }

    .btn-primary:hover::before {
      left: 100%;
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(59, 130, 246, 0.4);
    }

    .btn-success {
      background: linear-gradient(135deg, #059669, #10b981);
      border: none;
      border-radius: 12px;
      padding: 15px 30px;
      font-weight: 600;
      font-size: 16px;
      color: var(--white);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .btn-success::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: left 0.5s ease;
    }

    .btn-success:hover::before {
      left: 100%;
    }

    .btn-success:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(5, 150, 105, 0.4);
    }

    /* Error Message */
    .error-message {
      background: rgba(239, 68, 68, 0.1);
      border: 1px solid rgba(239, 68, 68, 0.3);
      border-radius: 8px;
      padding: 10px;
      margin-top: 10px;
      color: #fca5a5;
      text-align: center;
      backdrop-filter: blur(10px);
    }

    /* Toggle Switch */
    .form-switch {
      margin-top: 20px;
    }

    .form-switch .form-check-input {
      background-color: rgba(255, 255, 255, 0.2);
      border-color: rgba(255, 255, 255, 0.3);
    }

    .form-switch .form-check-input:checked {
      background-color: var(--sky-blue);
      border-color: var(--sky-blue);
    }

    .form-check-label {
      color: rgba(255, 255, 255, 0.9);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .header-image {
        padding: 60px 0;
      }

      .header-image h1 {
        font-size: 2.5rem;
      }

      .card-body {
        padding: 30px 25px;
      }

      .main-container {
        margin-top: 30px;
      }
    }

    /* Animation Classes */
    .fade-in {
      animation: fadeIn 0.8s ease-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Input Icons */
    .input-group-text {
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-right: none;
      color: rgba(255, 255, 255, 0.7);
      backdrop-filter: blur(10px);
    }

    .input-group .form-control {
      border-left: none;
    }

    .input-group .form-control:focus {
      border-left: none;
    }
  </style>
</head>
<body>
  <!-- Floating Particles -->
  <div class="floating-particles">
    <div class="particle" style="left: 10%; animation-delay: 0s;"></div>
    <div class="particle" style="left: 20%; animation-delay: 2s;"></div>
    <div class="particle" style="left: 30%; animation-delay: 4s;"></div>
    <div class="particle" style="left: 40%; animation-delay: 6s;"></div>
    <div class="particle" style="left: 50%; animation-delay: 8s;"></div>
    <div class="particle" style="left: 60%; animation-delay: 10s;"></div>
    <div class="particle" style="left: 70%; animation-delay: 12s;"></div>
    <div class="particle" style="left: 80%; animation-delay: 14s;"></div>
    <div class="particle" style="left: 90%; animation-delay: 16s;"></div>
  </div>

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

  <!-- Main Container -->
  <div class="container main-container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        
        <!-- Login Form -->
        <div class="glass-card fade-in mb-4" id="loginCard">
          <div class="card-body">
            <h3 class="card-title">
              <i class="bi bi-box-arrow-in-right me-2"></i>Login
            </h3>
            <form method="POST" action="" id="loginForm">
              <div class="mb-3">
                <label for="username" class="form-label">
                  <i class="bi bi-person me-2"></i>Username
                </label>
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="bi bi-person"></i>
                  </span>
                  <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username" required>
                </div>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">
                  <i class="bi bi-envelope me-2"></i>Email
                </label>
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="bi bi-envelope"></i>
                  </span>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email" required>
                </div>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="rememberMe">
                <label class="form-check-label" for="rememberMe">
                  Ingat saya
                </label>
              </div>
              <div class="d-grid mt-4">
                <button type="submit" class="btn btn-primary">
                  <i class="bi bi-box-arrow-in-right me-2"></i>Masuk
                </button>
              </div>
            </form>
            <div class="text-center mt-3">
              <small class="text-white-50">
                Belum punya akun? 
                <a href="#" class="text-white" onclick="showRegister()">Daftar di sini</a>
              </small>
            </div>
          </div>
        </div>

        <!-- Register Form -->
        <div class="glass-card fade-in" id="registerCard" style="display: none;">
          <div class="card-body">
            <h4 class="card-title">
              <i class="bi bi-person-plus me-2"></i>Register
            </h4>
            <form id="registerForm">
              <div class="mb-3">
                <label class="form-label">
                  <i class="bi bi-person-badge me-2"></i>Nama Lengkap
                </label>
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="bi bi-person-badge"></i>
                  </span>
                  <input type="text" class="form-control" placeholder="Masukkan nama lengkap" required>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label">
                  <i class="bi bi-person me-2"></i>Username
                </label>
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="bi bi-person"></i>
                  </span>
                  <input type="text" class="form-control" placeholder="Masukkan username" required>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label">
                  <i class="bi bi-envelope me-2"></i>Email
                </label>
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="bi bi-envelope"></i>
                  </span>
                  <input type="email" class="form-control" placeholder="Masukkan email" required>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label">
                  <i class="bi bi-lock me-2"></i>Password
                </label>
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="bi bi-lock"></i>
                  </span>
                  <input type="password" class="form-control" placeholder="Masukkan password" required>
                </div>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                <label class="form-check-label" for="agreeTerms">
                  Saya setuju dengan syarat dan ketentuan
                </label>
              </div>
              <div class="d-grid mt-4">
                <button type="submit" class="btn btn-success">
                  <i class="bi bi-person-plus me-2"></i>Daftar
                </button>
              </div>
            </form>
            <div class="text-center mt-3">
              <small class="text-white-50">
                Sudah punya akun? 
                <a href="#" class="text-white" onclick="showLogin()">Login di sini</a>
              </small>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Form Toggle Functions
    function showLogin() {
      document.getElementById('loginCard').style.display = 'block';
      document.getElementById('registerCard').style.display = 'none';
    }

    function showRegister() {
      document.getElementById('loginCard').style.display = 'none';
      document.getElementById('registerCard').style.display = 'block';
    }

    // Form Submit Handlers
    document.getElementById('loginForm').addEventListener('submit', function(e) {
      e.preventDefault();
      
      const username = document.getElementById('username').value;
      const email = document.getElementById('email').value;
      
      if (username && email) {
        // Add success animation
        const button = this.querySelector('button[type="submit"]');
        const originalContent = button.innerHTML;
        button.innerHTML = '<i class="bi bi-check-circle me-2"></i>Berhasil!';
        button.style.background = 'linear-gradient(135deg, #059669, #10b981)';
        button.disabled = true;
        
        // Create success notification
        const successNotification = document.createElement('div');
        successNotification.className = 'alert alert-success mt-3';
        successNotification.style.background = 'rgba(34, 197, 94, 0.1)';
        successNotification.style.border = '1px solid rgba(34, 197, 94, 0.3)';
        successNotification.style.color = '#86efac';
        successNotification.style.borderRadius = '8px';
        successNotification.style.backdropFilter = 'blur(10px)';
        successNotification.innerHTML = '<i class="bi bi-check-circle me-2"></i>Login berhasil! Mengarahkan ke halaman utama...';
        this.appendChild(successNotification);
        
        setTimeout(() => {
          // Redirect to homepage
          window.location.href = 'homepage.php';
        }, 2000);
      } else {
        // Show error message
        let errorDiv = document.querySelector('.error-message');
        if (!errorDiv) {
          errorDiv = document.createElement('div');
          errorDiv.className = 'error-message';
          this.appendChild(errorDiv);
        }
        errorDiv.innerHTML = '<i class="bi bi-exclamation-circle me-2"></i>Username dan Email harus diisi.';
        
        setTimeout(() => {
          errorDiv.remove();
        }, 3000);
      }
    });

    document.getElementById('registerForm').addEventListener('submit', function(e) {
      e.preventDefault();
      
      const inputs = this.querySelectorAll('input[required]');
      let allFilled = true;
      
      inputs.forEach(input => {
        if (!input.value.trim()) {
          allFilled = false;
          input.style.borderColor = '#ef4444';
          input.style.boxShadow = '0 0 0 3px rgba(239, 68, 68, 0.2)';
        } else {
          input.style.borderColor = 'rgba(255, 255, 255, 0.2)';
          input.style.boxShadow = 'none';
        }
      });
      
      if (allFilled) {
        const button = this.querySelector('button[type="submit"]');
        button.innerHTML = '<i class="bi bi-check-circle me-2"></i>Berhasil!';
        button.style.background = 'linear-gradient(135deg, #059669, #10b981)';
        button.disabled = true;
        
        // Create success notification
        const successNotification = document.createElement('div');
        successNotification.className = 'alert alert-success mt-3';
        successNotification.style.background = 'rgba(34, 197, 94, 0.1)';
        successNotification.style.border = '1px solid rgba(34, 197, 94, 0.3)';
        successNotification.style.color = '#86efac';
        successNotification.style.borderRadius = '8px';
        successNotification.style.backdropFilter = 'blur(10px)';
        successNotification.innerHTML = '<i class="bi bi-check-circle me-2"></i>Registrasi berhasil! Silakan login.';
        this.appendChild(successNotification);
        
        setTimeout(() => {
          // Reset form
          this.reset();
          // Switch to login form
          showLogin();
          // Reset button
          button.innerHTML = '<i class="bi bi-person-plus me-2"></i>Daftar';
          button.style.background = 'linear-gradient(135deg, #059669, #10b981)';
          button.disabled = false;
        }, 2000);
      } else {
        // Show error message
        let errorDiv = document.querySelector('.error-message');
        if (!errorDiv) {
          errorDiv = document.createElement('div');
          errorDiv.className = 'error-message';
          this.appendChild(errorDiv);
        }
        errorDiv.innerHTML = '<i class="bi bi-exclamation-circle me-2"></i>Semua field harus diisi dengan benar.';
        
        setTimeout(() => {
          errorDiv.remove();
        }, 3000);
      }
    });

    // Add smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth'
          });
        }
      });
    });

    // Add input focus animations
    document.querySelectorAll('.form-control').forEach(input => {
      input.addEventListener('focus', function() {
        this.parentElement.style.transform = 'translateY(-2px)';
      });
      
      input.addEventListener('blur', function() {
        this.parentElement.style.transform = 'translateY(0)';
      });
    });
  </script>
</body>
</html>