<?php
$latestGaleri = viewLatestGaleri($conn);
?>
<section class="w-[100%] mx-auto py-10 bg-gray-900">
    <div data-aos="fade-up" data-aos-duration="1500" class="text-white">
        <h2 class="">Galeri</h2>
        <p class="">Beberapa dokumentasi berbagai kegiatan yang telah kami adakan.</p>
        <div class="">
            <?php if ($latestGaleri->num_rows > 0) : ?>
                <?php foreach ($latestGaleri as $galeri) : ?>
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
        <div class="">
            <button onclick="window.location.href = '/galeri';" class="">Lihat Galeri</button>
        </div>
    </div>
</section>