<?php
include("./controller/view.php");
$latestArtikel = viewLatestArtikel($conn);
?>
<section class="w-[100%] mx-auto py-10 bg-gray-900 text-white">
    <div data-aos="fade-up" data-aos-duration="1500" class="">
        <h2 class="">Artikel</h2>
        <h3 class="">Himatik sekarang punya wadah untuk menyalurkan bakat bakat kalian dalam bidang menulis loh, jika ada karya kalian yang bisa kita unggah, silahkan kirimkan kepada kita</h3>
        <div class="">
            <?php if($latestArtikel->num_rows > 0): ?>
                <?php foreach ($latestArtikel as $artikel) : ?>
                    <a href="/artikel/<?= $artikel->id_artikel ?>" class="w-[100%] md:w-[50%] mx-auto h-40 md:h-40 flex items-center md:p-2">
                        <div class="">
                            <div class="">
                                <div>
                                    <h4 class=""><?= $artikel->judul ?></h4>
                                    <div class="flex gap-3">
                                        <p class=""><?= date('d F Y', strtotime($artikel->date)) ?></p>
                                        <p class="">Oleh <?= $artikel->author ?></p>
                                    </div>
                                    <div class="">
                                        <p class=""><?= substr($artikel->content, 0, 100) . '...' ?></p>
                                    </div>
                                    <div class="">
                                        <p class=""><?= substr($artikel->content, 0, 80) . '...' ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-gray-500 text-2xl font-bold">Artikel tidak tersedia</p>
            <?php endif; ?>
        </div>
        <div class="">
            <button onclick="window.location.href = '/artikel';" class="">Lihat Artikel</button>
        </div>
    </div>
</section>