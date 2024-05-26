<?php
include("./controller/config.php");
function postArtikel($judul, $isi, $kategori)
{
    global $conn;
    $query = "INSERT INTO artikel (judul, isi, kategori) VALUES ('$judul', '$isi', '$kategori')";
    mysqli_query($conn, $query);
}

function postUser($nama, $username, $email, $phone, $password)
{
    global $conn;
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO user (nama, username, email, phone, password) VALUES ('$nama', '$username', '$email', '$phone', '$password_hashed')";
    mysqli_query($conn, $query);
}

if (isset($_POST['submit_artikel'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $kategori = $_POST['kategori'];

    postArtikel($judul, $isi, $kategori); 
}
if (isset($_POST['submit_user'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    postUser($nama, $username, $email, $phone, $password);
}
