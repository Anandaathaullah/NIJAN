<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Nijan</title>
    <link rel="stylesheet" href="landing.css" />
</head>
<body>
    <header class="header">
        <nav class="nav">
            <a href="#home">Beranda</a>
            <a href="#about">Tentang</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Kontak</a>
        </nav>
    </header>

    <header>
        <img src="logo.png" alt="Logo smk merdeka" class="logo" />
    </header>

    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Nikmati Makanan Favoritmu dengan ginjal</h1>
            <p>Antar makanan dari restoran terbaik langsung ke pintu rumahmu</p>

            <!-- Tombol LOGIN yang mengarah ke login.php -->
            <a href="login.php" class="btn-login">LOGIN</a>
        </div>
    </section>

    <section class="about" id="about">
        <h2>Tentang GoFood</h2>
        <p>
            MDK.GFOOD adalah layanan pesan-antar makanan dari nijan. Dengan ribuan mitra restoran, kamu bisa memilih makanan favorit kapan saja dan di mana saja.
        </p>
    </section>

    <section class="contact" id="contact">
        <h2>Hubungi Kami</h2>
        <p>📞 0899221 | ✉️ smkmerdekasuuport.com</p>
    </section>

    <footer class="footer">
        <p>&copy; <?= date("Y"); ?> Nijan. All rights reserved.</p>
    </footer>
</body>
</html>
