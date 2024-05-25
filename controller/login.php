<?php
require 'config.php';
$title = "Masuk";
include("../templates/head.php");
require "../views/masuk.html";
?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        <?php
        if (isset($_POST["submit"])) {
            $email = $_POST["email"];
            $password = md5($_POST["password"]);
            $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
            $row = mysqli_fetch_assoc($result);
            if (mysqli_num_rows($result) > 0) {
                if ($password == $row['password']) {
                    if ($row['role'] == 'admin') {
                        $_SESSION['id_user_admin'] = $row['id_user'];
                        $_SESSION['login_admin'] = 'login';
                        header('Location: dashboard/admin/index.php');
                        exit();
                    } else {
                        $_SESSION['id_user'] = $row['id_user'];
                        $_SESSION['login'] = 'login';
                        header('Location: index.php');
                        exit();
                    }
                } else {
                    echo "document.getElementById('errorPassword').classList.remove('hidden');";
                }
            } else {
                echo "document.getElementById('errorEmail').classList.remove('hidden');";
            }
        }
        ?>
    });
</script>