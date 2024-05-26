<?php
include("./controller/view.php");
$allGaleri = viewAllGaleri($conn);
?>
<section class="w-[100%] mx-auto py-10 bg-gray-900">
    <div class="text-white">
        <h2 class="">Galeri</h2>
        <p class="">Beberapa dokumentasi berbagai kegiatan yang telah kami adakan.</p>
        <div class="">
            <?php if ($allGaleri->num_rows > 0) : ?>
                <?php foreach ($allGaleri as $galeri) : ?>
                    <div action="galeri/editgaleri/<?= $galeri->id_galeri ?>" class="">
                        <div class="">
                            <h1 class=""><b><?= $galeri->judul ?></b></h1>
                            <div class="">
                                <img src="/<?= $galeri->img ?>" alt="" class="">
                            </div>
                            <p class="line-clamp-1"><?= $galeri->deskripsi ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p class="text-gray-500 text-2xl font-bold">Galeri tidak tersedia</p>
            <?php endif; ?>
        </div>
    </div>
</section>