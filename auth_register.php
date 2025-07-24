<?php
session_start();
require_once 'koneksi.php'; 

if (isset($_POST['register_submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $firstname = $_POST['firstname']; 
    $lastname = $_POST['lastname'];   

    if (empty($username) || empty($password) || empty($confirm_password) || empty($firstname) || empty($lastname)) {
        header("Location: register.php?error=empty");
        exit();
    }

    if ($password !== $confirm_password) {
        header("Location: register.php?error=passwordmismatch");
        exit();
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = mysqli_prepare($db, "SELECT user_id FROM users WHERE username = ?");
    if ($stmt === false) {
        header("Location: register.php?error=dberror_prepare");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $username); 
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        header("Location: register.php?error=userexists");
        exit();
    }
    mysqli_stmt_close($stmt);

    $stmt_insert = mysqli_prepare($db, "INSERT INTO users (username, password, firstname, lastname) VALUES (?, ?, ?, ?)");

    if ($stmt_insert === false) {
        header("Location: register.php?error=dberror_prepare_insert");
        exit();
    }
    mysqli_stmt_bind_param($stmt_insert, "ssss", $username, $hashed_password, $firstname, $lastname); 

    if (mysqli_stmt_execute($stmt_insert)) {
        header("Location: login.php?registration=success");
        exit();
    } else {
        header("Location: register.php?error=dberror_execute");
        exit();
    }

    mysqli_stmt_close($stmt_insert);
    mysqli_close($db); 
} else {
    header("Location: register.php");
    exit();
}
?>