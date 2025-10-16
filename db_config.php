<?php
// db_config.php
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';      // Jika kamu pakai password MySQL ubah di sini
$DB_NAME = 'nijan_db';

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($conn->connect_error) {
    die("Koneksi DB gagal: " . $conn->connect_error);
}
?>
