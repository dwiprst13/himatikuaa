<section class="w-[100%] mx-auto py-10 bg-gray-900">
    <div data-aos="fade-up" data-aos-duration="1500" class="w-[95%] mx-auto md:w-[90%] p-3 md:p-5">
        <h2 class="font-bold text-[1.6rem] md:text-[2rem] lg:text-[2.5rem] text-blue-700 py-5">Artikel</h2>
        <h3 class="text-white">Himatik sekarang punya wadah untuk menyalurkan bakat bakat kalian dalam bidang menulis loh, jika ada karya kalian yang bisa kita unggah, silahkan kirimkan kepada kita</h3>
        <div class="container flex flex-wrap mx-auto space-y-3 md:space-y-0 md:px-4 my-5 text-white">
            <?php foreach ($latestArtikel as $artikel) : ?>
                <a href="/artikel/<?= $artikel->id_artikel ?>" class="w-[100%] md:w-[50%] mx-auto h-40 md:h-40 flex items-center md:p-2">
                    <div class="flex gap-3 border border-gray-600 h-full w-full p-2 rounded-xl bg-gray-800/50 hover:border-gray-500 hover:bg-gray-800 hover:shadow-white hover:shadow-md">
                        <div class="flex items-center">
                            <div>
                                <h4 class="font-semibold text-[1rem] md:text-[1.1rem] lg:text-[1.2rem] text-white"><?= $artikel->judul ?></h4>
                                <div class="flex gap-3">
                                    <p class="text-[0.8rem] text-gray-500"><?= date('d F Y', strtotime($artikel->date)) ?></p>
                                    <p class="text-[0.8rem] text-gray-500">Oleh <?= $artikel->author ?></p>
                                </div>
                                <div class="md:flex hidden">
                                    <p class="text-[0.8rem] text-red-600"><?= substr($artikel->content, 0, 100) . '...' ?></p>
                                </div>
                                <div class="flex md:hidden">
                                    <p class="text-[0.8rem] text-red-600"><?= substr($artikel->content, 0, 80) . '...' ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
        <div class="flex justify-center items-center my-3">
            <button onclick="window.location.href = '/artikel';" class="bg-blue-700 text-white font-bold py-2 px-5 rounded-lg">Lihat Artikel</button>
        </div>
    </div>
</section>