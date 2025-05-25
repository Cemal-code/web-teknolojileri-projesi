<?php
session_start();
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap | Cemal Koparan</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --light-gray: #f8f9fa;
            --dark-gray: #6c757d;
        }

        body {
            padding-top: 70px;
            font-family: 'Roboto', sans-serif;
            background-color: var(--light-gray);
            color: #212529;
        }

        .login-container {
            max-width: 450px;
            margin: 60px auto;
            padding: 0 15px;
        }

        .login-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.08);
            padding: 40px;
            transition: transform 0.3s ease;
        }

        .login-card:hover {
            transform: translateY(-5px);
        }

        .login-title {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 30px;
            text-align: center;
            position: relative;
            padding-bottom: 15px;
        }

        .login-title:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--primary-color);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark-gray);
            font-size: 0.95rem;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.15);
            outline: none;
        }

        .btn {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            transform: translateY(-2px);
        }

        .error-message {
            background: #f8d7da;
            color: #721c24;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid #f5c6cb;
        }

        .success-message {
            background: #d1edff;
            color: #0c5460;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid #bee5eb;
        }

        @media (max-width: 576px) {
            .login-card {
                padding: 25px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Cemal Koparan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Hakkımda</a></li>
                    <li class="nav-item"><a class="nav-link" href="cv.html">Özgeçmiş</a></li>
                    <li class="nav-item"><a class="nav-link" href="sehrim.html">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link" href="mirasimiz.html">Mirasımız</a></li>
                    <li class="nav-item"><a class="nav-link" href="ilgi-alanlarim.html">İlgi Alanlarım</a></li>
                    <li class="nav-item"><a class="nav-link active" href="login.php">Giriş Yap</a></li>
                    <li class="nav-item"><a class="nav-link" href="iletisim.html">İletişim</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="login-container">
        <div class="login-card">
            <h2 class="login-title">Giriş Yap</h2>

            <?php if (isset($_GET['error'])): ?>
            <div class="error-message">
                <strong>Hata:</strong> E-posta veya şifre hatalı!
            </div>
            <?php endif; ?>

            <?php if (isset($_GET['success'])): ?>
            <div class="success-message">
                <strong>Başarılı:</strong> Giriş işlemi tamamlandı, yönlendiriliyorsunuz...
            </div>
            <?php endif; ?>

            <?php if (isset($_GET['logout'])): ?>
            <div class="success-message">
                <strong>Bilgi:</strong> Başarıyla çıkış yaptınız.
            </div>
            <?php endif; ?>

            <form method="POST" action="login-check.php">
                <div class="form-group">
                    <label for="email" class="form-label">E-posta Adresi</label>
                    <input type="email" class="form-control" id="email" name="email" required 
                           placeholder="cemal.koparan@sakarya.edu.tr" 
                           value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Şifre</label>
                    <input type="password" class="form-control" id="password" name="password" required 
                           placeholder="Öğrenci numaranız">
                </div>

                <button type="submit" class="btn btn-primary">Giriş Yap</button>
            </form>

            <div class="text-center mt-3">
                <small class="text-muted">
                    Demo için: cemal.koparan@sakarya.edu.tr / cemal123
                </small>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-4 mt-5">
        <div class="container">
            <p class="mb-0">© Cemal Koparan Kişisel Web Sitesi</p>
        </div>
    </footer>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>