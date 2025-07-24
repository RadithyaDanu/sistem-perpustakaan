<?php
// Selalu mulai sesi di awal
session_start();

// Sertakan koneksi database
include "koneksi.php";

// Pastikan form disubmit
if (isset($_POST['submit'])) {

    $user = trim($_POST['user']); // Tambahkan trim untuk menghilangkan spasi
    $pass = trim($_POST['password']);

    // Validasi dasar agar tidak kosong
    if (empty($user) || empty($pass)) {
        header("Location: forgot.php?error=empty");
        exit();
    }

    // Hash password baru
    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

    // KEAMANAN: Gunakan Prepared Statements untuk mencegah SQL Injection
    $sql = "UPDATE users SET password = ? WHERE username = ?";
    
    if ($stmt = mysqli_prepare($db, $sql)) {
        // Bind parameter: s = string
        mysqli_stmt_bind_param($stmt, "ss", $hashed_pass, $user);
        
        // Eksekusi statement
        if (mysqli_stmt_execute($stmt)) {
            // Cek apakah ada baris yang terpengaruh (username ditemukan)
            if (mysqli_stmt_affected_rows($stmt) > 0) {
                // Berhasil update password
                header("Location: login.php?message=forgot");
                exit();
            } else {
                // Username tidak ditemukan
                header("Location: forgot.php?error=message");
                exit();
            }
        } else {
            // Error saat eksekusi
            header("Location: forgot.php?error=database");
            exit();
        }
        
        // Tutup statement
        mysqli_stmt_close($stmt);
    } else {
        // Error saat prepare statement
        header("Location: forgot.php?error=database");
        exit();
    }
    
    // Tutup koneksi database
    mysqli_close($db);

} else {
    // Jika file diakses langsung tanpa submit, kembalikan ke halaman login
    header("Location: login.php");
    exit();
}
?>