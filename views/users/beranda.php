<?php
include("./controller/view.php");
$pages = [
    'banner' => "parts/banner.php",
    'about' => "parts/about.php",
    'artikel' => "parts/artikel.php",
    'galeri' => "parts/galeri.php",
    'kontak' => "parts/kontak.php"
];

foreach ($pages as $page) {
    include($page);
}
