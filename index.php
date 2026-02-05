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
        <img src="logo.png" alt="Logo Nijan" class="logo">

        <nav class="nav">
            <a href="#home">Beranda</a>
            <a href="#about">Tentang</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Kontak</a>
        </nav>
    </header>

    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Nikmati Makanan Favoritmu dengan Nijan</h1>
            <p>Antar makanan dari restoran terbaik langsung ke pintu rumahmu</p>
            <a href="login.php" class="btn-login">LOGIN</a>
        </div>
    </section>

    <section class="about" id="about">
        <h2>Tentang Nijan Food</h2>
        <p>
            Nijan Food adalah layanan pesan-antar makanan. Dengan ribuan mitra restoran,
            kamu bisa memilih makanan favorit kapan saja dan di mana saja.
        </p>
    </section>

    <section class="contact" id="contact">
        <h2>Hubungi Kami</h2>
        <p>📞 0899221 | ✉️ smkmerdekasupport.com</p>
    </section>

    <footer class="footer">
        <p>&copy; <?= date("Y"); ?> Nijan. All rights reserved.</p>
    </footer>

</body>
</html>


