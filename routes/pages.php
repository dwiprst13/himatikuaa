<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'beranda';

$pages = [
    'login' => "./controller/login.php",
    'daftar' => "./controller/daftar.php",
    'beranda' => [
        "./views/users/header.php",
        "./views/users/beranda.php",
        "./views/users/footer.php"
    ],
    'artikel' => [
        "./views/users/header.php",
        "./views/users/artikel.php",
        "./views/users/footer.php"
    ],
    'detail_artikel' => [
        "./views/users/header.php",
        "./views/users/detail_artikel.php",
        "./views/users/footer.php"
    ],
    'galeri' => [
        "./views/users/header.php",
        "./views/users/galeri.php",
        "./views/users/footer.php"
    ],
    'admin' => [
        "./views/admins/homepage.php",
    ],
    'admin/galeri' => [
        "./views/admins/galeripage.php",
    ],
    'admin/artikel' => [
        "./views/admins/homepage.php",
    ],
    'default' => [
        "./views/users/header.php",
        "./views/users/beranda.php",
        "./views/users/footer.php"
    ],
];

if (array_key_exists($page, $pages)) {
    if (is_array($pages[$page])) {
        foreach ($pages[$page] as $include) {
            include($include);
        }
    } else {
        include($pages[$page]);
    }
} else {
    foreach ($pages['default'] as $include) {
        include($include);
    }
}
