<?php
require 'config.php';
if (isset($_POST["submit"])) {
    $nama = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["repassword"];
    $status = "active";
    $rating = 0;

    if ($password === $confirmpassword) { 
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);

        $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' OR email = '$email'");
        if (mysqli_num_rows($duplicate) > 0) {
            echo "<script> showPopup('Username atau Email Sudah Digunakan'); </script>";
        } else {
            $query = "INSERT INTO user (nama, username, email, phone, password, status, rating) VALUES ('$nama', '$username', '$email', '$phone', '$password_hashed', '$status', '$rating')";
            mysqli_query($conn, $query);
            echo "<script> showPopup('Pendaftaran Sukses'); </script>";
            header('Location: login.php');
            exit();
        }
    } else {
        echo "<script> showPopup('Password dan Konfirmasi Password tidak cocok'); </script>";
    }
}
$title = "Daftar";
include("../templates/head.php");
require "../views/daftar.html";
