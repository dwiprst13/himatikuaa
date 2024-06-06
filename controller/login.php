<?php
if (!isset($_SESSION)) {
    session_start();
}
var_dump($_SESSION);
require 'config.php';
$title = "Masuk";
include("./templates/head.php");
// require "./views/masuk.html";

$errors = [];

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
                $_SESSION['nama'] = $row['nama'];
                $_SESSION['login_admin'] = 'login';
                echo "<script>window.location.href='admin';</script>";
                exit();
            } else {
                $_SESSION['id_user'] = $row['id_user'];
                $_SESSION['role'] = $row['role'];
                $_SESSION['nama'] = $row['nama'];
                $_SESSION['login'] = 'login';
                echo "Login User Berhasil";
                header('Location: /himatikuaa/');
                exit();
            }
        } else {
            $errors[] = "Password yang anda masukkan salah";
        }
    } else {
        $errors[] = "Email tidak ditemukan";
    }

    // if (!empty($errors)) {
    //     ob_start();
    //     include("../views/masuk.html");
    //     $content = ob_get_clean();
    //     echo str_replace('{{ errors }}', implode("<br>", $errors), $content);
    // }
}
?>

<body class="bg-white">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="" method="post">
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 ">Email</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" placeholder="Email" autocomplete="off" required class="block w-full rounded-md border-0 py-1.5 text-gray-900  p-3 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <p id="errorEmail" class="hidden font-medium text-sm text-red-500 py-3">Alamat Email belum terdaftar</p>
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 ">Password</label>
                        <div class="text-sm">
                            <a href="error.html" class="font-semibold text-indigo-600 hover:text-indigo-500">Lupa Kata Sandi</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" placeholder="Kata Sandi" autocomplete="off" required class="block w-full rounded-md border-0 py-1.5 text-gray-900  p-3 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <p id="errorPassword" class="hidden font-medium text-sm text-red-500 py-3">Kata Sandi tidak sesuai</p>
                </div>
                <div>
                    <button type="submit" name="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6  shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 text-white">Sign in</button>
                </div>
            </form>
            <p class="mt-10 text-center text-sm ">
                Belum punya akun?
                <a href="daftar.php" class="font-semibold leading-6 text-blue-600 hover:text-indigo-500">Daftar Sekarang</a>
            </p>
        </div>
    </div>
</body>