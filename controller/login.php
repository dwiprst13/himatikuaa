<?php
require 'config.php';
$title = "Masuk";
include("../templates/head.php");
require "../views/masuk.html";

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password_input = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        if (password_verify($password_input, $row['password'])) {
            if ($row['role'] == 'admin') {
                $_SESSION['id_user_admin'] = $row['id_user'];
                $_SESSION['role'] = $row['role'];
                $_SESSION['login_admin'] = 'login';
                header('Location: /himatikuaa/admin/');
                exit();
            } else {
                $_SESSION['id_user'] = $row['id_user'];
                $_SESSION['role'] = $row['role'];
                $_SESSION['login'] = 'login';
                header('Location: /himatikuaa/');
                exit();
            }
        } else {
            echo "error password";
        }
    } else {
        echo "error email";
    }
}
