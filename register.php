<?php
// register.php
session_start();
require_once 'db_config.php';

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    $password2 = $_POST['password2'] ?? '';

    if ($username === '' || $password === '' || $password2 === '') {
        $error = 'Semua field harus diisi.';
    } elseif ($password !== $password2) {
        $error = 'Password dan konfirmasi password tidak sama.';
    } else {
        // Cek username sudah dipakai belum
        $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $error = 'Username sudah dipakai, coba yang lain.';
        } else {
            $hashed = password_hash($password, PASSWORD_DEFAULT);
            $stmt->close();

            $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $username, $hashed);

            if ($stmt->execute()) {
                $success = "Registrasi berhasil! Silakan <a href='login.php'>login di sini</a>.";
            } else {
                $error = 'Gagal registrasi: ' . $stmt->error;
            }
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Register - Nijan</title>
    <link rel="stylesheet" href="login.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
      /* fallback style jika login.css belum ada */
      .form-container{max-width:360px;margin:6vh auto;background:#222;padding:24px;border-radius:8px;color:#fff}
      input{width:100%;padding:10px;margin-top:8px;border-radius:6px;border:1px solid #ccc}
      button{width:100%;padding:10px;margin-top:16px;background:#e2df06;border:none;border-radius:6px;cursor:pointer}
      .error{background:#b22222;padding:10px;border-radius:6px;margin-bottom:12px;text-align:center}
      .success{background:#228b22;padding:10px;border-radius:6px;margin-bottom:12px;text-al
