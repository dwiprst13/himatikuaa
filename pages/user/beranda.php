<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Mengklik tombol kirim keluhan 
    if (isset($_POST['kirim_keluhan'])) {
        $_SESSION['judul'] = $_POST["judul"];
        $_SESSION['keluhan'] = $_POST["keluhan"]; // Menyimpan sesi keluhan & judul untuk dikirim ke lapor.php
        echo "<script>window.location.href = '?page=lapor'</script>";
        exit();
    } elseif (isset($_POST["masuk"])) {
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'"); //Memanggil data user dari db untuk sesi aktif
        $row = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) > 0) {
            if ($password == $row['password']) {
                if ($row['role'] == 'admin') {
                    $_SESSION['id_user_admin'] = $row['id_user'];
                    $_SESSION['login_admin'] = 'login';
                    echo "<script>window.location.href = 'dashboard/admin/index.php'</script>";
                    exit();
                } else {
                    $_SESSION['id_user'] = $row['id_user'];
                    $_SESSION['login'] = 'login';
                    echo "<script>window.location.href = '?page=beranda'</script>";
                }
            } else {
                echo "<script>document.getElementById('errorPassword').classList.remove('hidden')</script>";
            }
        } else {
            echo "<script>document.getElementById('errorEmail').classList.remove('hidden')</script>";
        }
    }
}
?>

<head>
    <style>
        .hide-scroll-bar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .hide-scroll-bar::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body chrome-hide-address-bar class="min-h-screen">
<section class="banner"></section>
<section class="tentang-kami"></section>
<section class="kepengurusan"></section>
<section class="summary-galeri"></section>
<section class="summary-artikel"></section>
<section class=""></section>
<!-- Footer -->
<script>
</script>