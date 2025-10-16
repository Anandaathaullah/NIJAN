<?php
// login.php
session_start();
require_once 'db_config.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        $error = 'Isi username dan password.';
    } else {
        $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows === 1) {
            $stmt->bind_result($id, $hashed_password);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                // sukses login
                $_SESSION['user_id'] = $id;
                $_SESSION['username'] = $username;
                header('Location: dashboard.php');
                exit;
            } else {
                $error = 'Username atau password salah.';
            }
        } else {
            $error = 'Username atau password salah.';
        }
        $stmt->close();
    }
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Login Nijan</title>
  <link rel="stylesheet" href="login.css"> <!-- pakai css milikmu -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    /* fallback style jika login.css belum ada */
    .login-container{max-width:360px;margin:6vh auto;background:#222;padding:24px;border-radius:8px;color:#fff}
    input{width:100%;padding:10px;margin-top:8px;border-radius:6px;border:1px solid #ccc}
    button{width:100%;padding:10px;margin-top:16px;background:#e2df06;border:none;border-radius:6px;cursor:pointer}
    .error{background:#b22222;padding:10px;border-radius:6px;margin-bottom:12px;text-align:center}
  </style>
</head>
<body>
  <div class="login-container">
    <h2 style="text-align:center;color:#ffcc00">Login Nijan</h2>

    <?php if ($error): ?>
      <div class="error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="post" action="login.php">
      <label for="username">Username</label>
      <input id="username" name="username" type="text" required autofocus>

      <label for="password">Password</label>
      <input id="password" name="password" type="password" required>

      <button type="submit">LOGIN</button>
    </form>

    <p style="text-align:center;margin-top:12px"><a href="index.php" style="color:#ccc">Kembali ke Beranda</a></p>
  </div>
</body>
</html>
