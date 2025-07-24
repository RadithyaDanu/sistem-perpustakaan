<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Digital Library</title>

  <!-- Fonts & Icons -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="login-container">
    <div class="login-box">
      <form action="auth_login.php" method="post">
        <h2>Selamat Datang</h2>
        <p class="subtitle">Silakan masuk untuk melanjutkan</p>

        <!-- PHP Error Message -->
        <?php
        if (isset($_GET['error'])) {
          $message = 'Username atau password salah';
          if ($_GET['error'] === 'empty') {
            $message = 'Username dan password tidak boleh kosong';
          }
          echo '<div class="error-message">' . htmlspecialchars($message, ENT_QUOTES, 'UTF-8') . '</div>';
        }
        ?>

        <!-- Username Field -->
        <div class="input-group">
          <i class="fas fa-user"></i>
          <input type="text" name="username" placeholder="Username" required />
        </div>

        <!-- Password Field -->
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" placeholder="Password" required />
        </div>

        <!-- Options -->
        <div class="options">
          <label>
            <input type="checkbox" name="remember" /> Ingat Saya
          </label>
            <a href="forgot.php">Lupa Password?</a>
        </div>

        <!-- Submit Button -->
        <button type="submit" name="submit" class="login-btn">Login</button>

        <!-- Register Link -->
        <div class="register-link">
          <p>Belum punya akun? <a href="register.php">Daftar Sekarang</a></p>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
