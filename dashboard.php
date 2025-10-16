<?php
// dashboard.php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
$username = htmlspecialchars($_SESSION['username']);
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Dashboard - Nijan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body{font-family:Arial,Helvetica,sans-serif;background:#111;color:#fff;padding:40px}
    .box{max-width:800px;margin:0 auto;background:#222;padding:20px;border-radius:8px}
    a.logout{display:inline-block;margin-top:12px;background:#e24;border-radius:6px;padding:8px 12px;color:#fff;text-decoration:none}
  </style>
</head>
<body>
  <div class="box">
    <h1>Selamat datang, <?= $username ?></h1>
    <p>Ini halaman dashboard.</p>
    <a class="logout" href="logout.php">Logout</a>
  </div>
</body>
</html>
