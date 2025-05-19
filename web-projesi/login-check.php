<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Beklenen kullanıcı bilgileri 
    $expected_email = "cemal.koparan@sakarya.edu.tr"; // EMAILINIZ
    $expected_password = "b241210047"; // SIFRENIZ (öğrenci numaranız)
    
    if ($email === $expected_email && $password === $expected_password) {
        // Giriş başarılı ise hoşgeldin mesajı göster
        echo '
        <!DOCTYPE html>
        <html lang="tr">
        <head>
            <meta charset="UTF-8">
            <title>Giriş Başarılı</title>
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        </head>
        <body>
            <div class="container mt-5">
                <div class="alert alert-success text-center">
                    <h4>Hoşgeldiniz b241210047</h4>
                    <p>Giriş işlemi başarılı!</p>
                    <a href="index.html" class="btn btn-primary">Ana Sayfaya Dön</a>
                </div>
            </div>
        </body>
        </html>';
    } else {
        // Giriş başarısız ise login sayfasına geri dön
        header("Location: login.php?error=1");
        exit();
    }
} else {
    // Doğrudan erişimi engelle
    header("Location: login.php");
    exit();
}
?>