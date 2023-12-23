<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}"> <!-- Tambahkan link ke file CSS atau CDN jika diperlukan -->
    <title>Welcome</title>
</head>
<body>
    <div class="container">
        <div class="panel-img">
            <img class="panel-img" src="{{ asset('images/panel1.png') }}" alt="Panel Image" />
        </div>
        <img class="logo-img" src="{{ asset('images/logo umm.jpg') }}" alt="Logo UMM" />
        <div class="welcome-text">Halo, Selamat Datang !</div>
        <div class="subtitle-text">Prestasi Terbaik Adalah Prestasi Anda. <br/>Catat dan Banggakan dengan PrestasiPlus</div>
        <div class="main-text">Catat dan Raih Prestasi Hebatmu Bersama PrestasiPlus!</div>

        <div class="login-btn-container">
            <div class="login-btn-background"></div>
            <a href="{{ route('login') }}" class="login-btn">Login</a>
        </div>

        <img class="logo-prestasi" src="{{ asset('images/Logo prestasi.png') }}" alt="Logo Prestasi" />
    </div>
    <!-- Tambahkan script JavaScript atau CDN jika diperlukan -->
</body>
</html>
