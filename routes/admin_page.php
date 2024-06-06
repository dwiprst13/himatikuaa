<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'beranda';

$pages = [
    'admin' => [
        "./views/admins/homepage.php",
    ],
    'admin/galeri' => [
        "./views/admins/galeripage.php",
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
