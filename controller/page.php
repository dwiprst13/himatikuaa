<?php
include("./views/users/header.php");

$page = isset($_GET['page']) ? $_GET['page'] : 'beranda'; 

switch ($page) {
    // User Page
    case 'beranda':
        include("./views/users/beranda.html");
        include("./views/session.php");
        break;
    case 'artikel':
        include("./views/users/artikel.html");
        break;
    case 'galeri':
        include("./views/users/galeri.html");
        break;
    default:
        include("./views/users/beranda.html"); 
        break;
        // Admin Page
    case 'admin':
        include("./controller/admin_page.php");
        include("./views/session.php");
        break;
}
