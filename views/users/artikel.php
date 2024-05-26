<?php
include("./controller/view.php");

$allArtikel = viewAllArtikel($conn);
$searchArtikel = [];

$searchQuery = isset($_GET['searchPost']) ? $_GET['searchPost'] : '';
if (!empty($searchQuery)) {
    $searchArtikel = searchArtikel($conn, $searchQuery);
}

?>
<section class="w-[100%] mx-auto py-10 bg-gray-900 text-white">
    <div class="">
        <h2 class="">Artikel</h2>
        <h3 class="">Himatik sekarang punya wadah untuk menyalurkan bakat bakat kalian dalam bidang menulis loh, jika ada karya kalian yang bisa kita unggah, silahkan kirimkan kepada kita</h3>
        <div class="w-5/6 md:w-1/2 lg:w-1/3 mx-auto my-5">
            <form action="" method="get" class="flex">
                <input name="searchPost" type="text" autocomplete="off" placeholder="Cari Postingan..." class="bg-slate-200 text-gray-900 placeholder:text-gray-600 w-[80%] focus:outline-none rounded-l-lg" value="<?= htmlspecialchars($searchQuery) ?>">
                <button type="submit" class="w-[20%] bg-blue-500 text-white focus:outline-none rounded-r-lg">Cari</button>
            </form>
        </div>
        <div class="">
            <?php
            // Menentukan artikel yang akan ditampilkan
            $artikelList = !empty($searchQuery) ? $searchArtikel : $allArtikel;

            if (!empty($artikelList) && $artikelList->num_rows > 0) : ?>
                <?php foreach ($artikelList as $artikel) : ?>
                    <a href="/artikel/<?= $artikel['id_artikel'] ?>" class="w-[100%] md:w-[50%] mx-auto h-40 md:h-40 flex items-center md:p-2">
                        <div class="">
                            <div class="">
                                <div>
                                    <h4 class=""><?= htmlspecialchars($artikel['judul']) ?></h4>
                                    <div class="flex gap-3">
                                        <p class=""><?= date('d F Y', strtotime($artikel['date'])) ?></p>
                                        <p class="">Oleh <?= htmlspecialchars($artikel['author']) ?></p>
                                    </div>
                                    <div class="">
                                        <p class=""><?= htmlspecialchars(substr($artikel['content'], 0, 100)) . '...' ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php else : ?>
                <p class="text-gray-500 text-2xl font-bold">
                    <?php if (!empty($searchQuery)) : ?>
                        Tidak ada artikel yang ditemukan untuk pencarian "<?= htmlspecialchars($searchQuery) ?>"
                    <?php else : ?>
                        Artikel tidak tersedia
                    <?php endif; ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>