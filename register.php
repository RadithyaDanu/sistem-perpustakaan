<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun | Perpustakaan</title>
    
    <!-- Link ke CSS eksternal -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- CSS inline untuk styling khusus halaman register -->
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: Arial, sans-serif;
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .login-box {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 90%;
        }
        .login-box h2 {
            text-align: center;
            margin-bottom: 10px;
            color: #333;
        }
        .subtitle {
            text-align: center;
            margin-bottom: 30px;
            color: #666;
        }
        .input-group {
            position: relative;
            margin-bottom: 20px;
        }
        .input-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
        }
        .input-group input {
            width: 100%;
            padding: 12px 15px 12px 45px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            box-sizing: border-box;
        }
        .input-group input:focus {
            outline: none;
            border-color: #667eea;
        }
        .login-btn {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 20px;
        }
        .login-btn:hover {
            opacity: 0.9;
        }
        .register-link {
            text-align: center;
        }
        .register-link a {
            color: #667eea;
            text-decoration: none;
        }
        .register-link a:hover {
            text-decoration: underline;
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
    
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <div class="login-container"> 
        <div class="login-box">
            <form action="auth_register.php" method="post"> 
                <h2>Daftar Akun Baru</h2>
                <p class="subtitle">Silakan isi data untuk mendaftar</p>

                <?php
                // Logika menampilkan pesan error dari auth_register.php
                if (isset($_GET['error'])) {
                    $message = '';
                    switch ($_GET['error']) {
                        case 'empty':
                            $message = 'Semua kolom harus diisi!';
                            break;
                        case 'passwordmismatch':
                            $message = 'Konfirmasi password tidak cocok!';
                            break;
                        case 'userexists':
                            $message = 'Username sudah terdaftar!';
                            break;
                        default:
                            $message = 'Terjadi kesalahan saat pendaftaran. Silakan coba lagi.';
                            break;
                    }
                    echo '<div class="error-message">' . htmlspecialchars($message) . '</div>';
                }
                ?>

                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="confirm_password" placeholder="Konfirmasi Password" required>
                </div>

                <div class="input-group">
                    <i class="fas fa-user-circle"></i>
                    <input type="text" name="firstname" placeholder="Nama Depan" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-user-circle"></i>
                    <input type="text" name="lastname" placeholder="Nama Belakang" required>
                </div>

                <button type="submit" name="register_submit" class="login-btn">Daftar</button>

                <div class="register-link">
                    <p>Sudah punya akun? <a href="login.php">Masuk sekarang</a></p>
                </div>
            </form>
        </div>
    </div>

</body>
</html>