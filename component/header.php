    <header class="bg-gray-900 sticky top-0 z-50 drop-shadow-lg">
        <div class="flex justify-between items-center h-20 w-[85%] md:w-[80%] lg:w-[75%] z-50 mx-auto">
            <div>
                <h1><a class="text-white text-2xl font-bold" href="#">HIMATIK UAA</a></h1>
            </div>
            <nav class="nav-links duration-500 bg-gray-900 lg:static absolute lg:min-h-fit min-h-[60vh] left-0 top-[-800%] lg:w-auto text-white w-full flex items-center px-5">
                <ul id="menu" class="flex bg-gray-900 text-sm md:text-base lg:flex-row flex-col lg:items-center lg:gap-[4vw] gap-8">
                    <li>
                        <a class="text-white hover:text-gray-500" href="/himatikuaa">Beranda</a>
                    </li>
                    <li>
                        <a class="text-white hover:text-gray-500" href="?page=artikel">Artikel</a>
                    </li>
                    <li>
                        <a class="text-white hover:text-gray-500" href="?page=galeri">Galeri</a>
                    </li>
                </ul>
            </nav>
            <div class="flex items-center gap-3">
                <?php tampilkanNavbar($userInfo, $data_user_login); ?>
                <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-xl  text-white cursor-pointer lg:hidden"></ion-icon>
            </div>
        </div>
    </header>