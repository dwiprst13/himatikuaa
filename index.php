
<?php
session_start();

if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
    $title = "HIMATIK - UAA - Admin Page";
    include("templates/head.php");
    include("routes/admin_page.php");
} else {
    $title = "HIMATIK - UAA";
    include("templates/head.php");
    include("routes/user_page.php");
}
?>