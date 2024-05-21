<?php
include 'config.php';

$userInfo = @$_SESSION['id_user'];
$q_data_user = mysqli_query($conn, "SELECT * FROM user WHERE id_user='$userInfo'");
$data_user_login = mysqli_fetch_array($q_data_user);

function tampilkanNavbar($userInfo, $data_user_login)
{
    if (!empty($userInfo)) { ?> <!-- Jika Ada -->
        <button id="akunBtn">
            <img src='asset/img/user/login-default.jpg' alt='foto' class='w-8 h-8 p-1 rounded-full border border-1'>
        </button>
    <?php
    } else {
    ?> <!-- Jika Tidak -->
        <button id="loginBtn">
            <img src='asset/img/user/nonlogin.jpg' alt='foto' class='w-8 h-8 p-1 rounded-full border border-1'>
        </button>
<?php }
}
?>

<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <!-- My Asset -->
    <link rel="stylesheet" href="main.css">
    <!-- Gambar Tab -->
    <!-- <link rel="icon" type="image/x-icon" href="asset/"> -->
    <title>HIMATIK UAA</title>
    <style>
        .active {
            color: red;
        }
    </style>
</head>

<body chrome-hide-address-bar class="font-[Poppins] bg-white">
    <!-- Navbar -->
    <?php 
    include"component/header.php";
    ?>

    <!-- Body -->
    <div class="body-content bg-gray-900 z-10 min-h-screen">
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'beranda';
        switch ($page) {
            case 'artikel':
                include 'pages/user/artikel.php';
                break;
            case 'detail_artikel':
                include 'pages/detail_artikel.php';
                break;
            case 'galeri':
                include 'pages/user/galeri.php';
                break;
            default:
                include 'pages/user/beranda.php';
                break;
        }
        ?>
    </div>
    <?php
    include'component/footer.php';
    ?>
    </body>
    <script>
        const navLinks = document.querySelector('.nav-links')

        function onToggleMenu(e) {
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }

        document.addEventListener("DOMContentLoaded", function() {
            const currentPage = "<?php echo isset($_GET['page']) ? $_GET['page'] : 'beranda'; ?>";
            const menuItems = document.querySelectorAll('#menu a');

            menuItems.forEach(item => {
                if (item.getAttribute('href').includes(currentPage)) {
                    item.classList.add('active');
                }
            });
        });
    </script>
    <script src="main.js"></script>
</body>

</html>