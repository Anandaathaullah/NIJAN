<?php
// create_user.php — jalankan sekali untuk menambahkan user contoh
require_once 'db_config.php';

$username = 'admin';      // ubah sesuai kebutuhan
$password_plain = 'admin123';

$hashed = password_hash($password_plain, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $hashed);

if ($stmt->execute()) {
    echo "User '$username' berhasil dibuat. Password asli: $password_plain";
} else {
    echo "Gagal membuat user: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
