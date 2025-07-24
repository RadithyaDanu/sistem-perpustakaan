<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password - Digital Library</title>
    
    <link rel="stylesheet" href="style.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

    <div class="login-container">
        <div class="login-box">
            <!-- PERBAIKAN: Action form harus sesuai dengan nama file -->
            <form action="auth_forgot.php" method="post">
                <h2>Lupa Password</h2>
                <p class="subtitle">Silakan masukan username dan password baru</p>

                <?php
                // Tampilkan pesan error atau sukses
                if (isset($_GET['error'])) {
                    $message = '';
                    if ($_GET['error'] == 'empty') {
                        $message = 'Username dan password tidak boleh kosong!';
                    } elseif ($_GET['error'] == 'message') {
                        $message = 'Username tidak ditemukan!';
                    } else {
                        $message = 'Terjadi kesalahan, silakan coba lagi!';
                    }
                    echo '<div class="error-message">' . htmlspecialchars($message) . '</div>';
                }
                
                // Tampilkan pesan sukses jika ada
                if (isset($_GET['message']) && $_GET['message'] == 'forgot') {
                    echo '<div class="success-message">Password berhasil diubah! Silakan login dengan password baru.</div>';
                }
                ?>

                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="user" placeholder="Username Kamu" required>
                </div>
                
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password Baru" required>
                </div>

                <div class="options">
                    <label style="visibility:hidden">
                        Ingat saya
                    </label>
                    <a href="login.php">Kembali ke Login</a>
                </div>

                <button type="submit" name="submit" class="login-btn">Ubah Password</button>

                <div class="register-link">
                    <p>Belum punya akun? <a href="register.php">Daftar sekarang</a></p>
                </div>
            </form>
        </div>
    </div>

    <style>
        /* Tambahan CSS untuk pesan sukses */
        .success-message {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .error-message {
            background-color: #f8d7da;
            border: 1px solid #f1aeb5;
            color: #721c24;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>

</body>
</html>