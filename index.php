
<?php
if (!isset($_SESSION)) {
    session_start();
}


    $title = "HIMATIK - UAA";
    include("templates/head.php");
    // include("views/session.php");
    include("routes/pages.php");
?>