<?php
include("./views/users/header.php");

$page = isset($_GET['page']) ? $_GET['page'] : 'beranda'; 

switch ($page) {
    case 'beranda':
        include("./views/users/beranda.php");
        break;
    case 'artikel':
        include("./views/users/artikel.php");
        break;
    case 'galeri':
        include("./views/users/galeri.php");
        break;
    default:
        include("./views/users/beranda.php"); 
        break;
}
