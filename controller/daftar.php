<?php
require 'config.php';
if (isset($_POST["submit"])) {
    $name = $_POST["name"]; //menyimpan value dari form "name" ke variabel name
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $nik = $_POST["nik"];
    $pedukuhan = $_POST["pedukuhan"];
    $password = md5($_POST["password"]); //md5 berfungsi untuk enkripsi password(simple encryption)
    $confirmpassword = $_POST["repassword"];
    $role = "user";

    $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE nik = '$nik' OR email = '$email'"); //Memastikan data masukan apakah ada di database
    if (mysqli_num_rows($duplicate) > 0) {
        echo
        "<script> showPopup('Email Sudah Digunakan'); </script>";
    } else {
        if ($password == md5($confirmpassword)) {
            $query = "INSERT INTO user (name, email, password, phone, nik, pedukuhan, role) VALUES ('$name','$email', '$password','$phone', '$nik','$pedukuhan', '$role')";
            mysqli_query($conn, $query);
            echo
            "<script> showPopup('Pendaftaran Sukses'); </script>";
        } else {
            echo
            "<script> showPopup('Pendaftaran Gagal'); </script>";
        }
    }
}
$title = "Daftar"; 
include("../templates/head.php");
require"../views/daftar.html";
?>

