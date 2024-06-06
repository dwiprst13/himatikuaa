<?php
$url = $_SERVER['REQUEST_URI'];
$parsed_url = parse_url($url);
if (isset($parsed_url['path'])) {
    $path = $parsed_url['path'];
    if (strpos($path, '/himatikuaa/artikel/') === 0) {
        $new_path = '/himatikuaa/artikel';
        $_SERVER['REQUEST_URI'] = $new_path;
    }
    if (strpos($path, '/himatikuaa/galeri/') === 0) {
        $new_path = '/himatikuaa/galeri';
        $_SERVER['REQUEST_URI'] = $new_path;
    }
}
?>

<header class="bg-gray-900 sticky top-0 z-50">
    <div class="flex justify-between items-center h-20 w-[95%] md:w-[90%] lg:w-[85%] z-50 mx-auto">
        <div>
            <h1><a class="text-white text-2xl font-bold" href="#">HIMATIK UAA</a></h1>
        </div>
        <div class="flex gap-10">
            <nav class="duration-500 bg-gray-900 lg:static absolute lg:min-h-fit min-h-[60vh] left-0 top-[-800%] lg:w-auto text-white w-full flex items-center px-5">
                <ul id="menu" class="flex bg-gray-900 text-sm md:text-base lg:flex-row flex-col lg:items-center lg:gap-[4vw] gap-8">
                    <li>
                        <a class="<?= $_SERVER['REQUEST_URI'] == '/himatikuaa/' ? 'text-orange-600' : 'text-white hover:text-gray-500 ' ?>" href="/himatikuaa">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a class="<?= $_SERVER['REQUEST_URI'] == '/himatikuaa/artikel' ? 'text-orange-600' : 'text-white hover:text-gray-500 ' ?>" href="artikel">
                            Artikel
                        </a>
                    </li>
                    <li>
                        <a class="<?= $_SERVER['REQUEST_URI'] == '/himatikuaa/galeri' ? 'text-orange-600' : 'text-white hover:text-gray-500 ' ?>" href="galeri">
                            Galeri
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="text-white gap-5">
                <button class="p-2 rounded-lg border border-orange-600" onclick="window.location.href = 'login';">Masuk</button>
                <button class="p-2 rounded-lg bg-orange-600" onclick="window.location.href = 'daftar';">Daftar</button>
            </div>
        </div>
    </div>
</header>