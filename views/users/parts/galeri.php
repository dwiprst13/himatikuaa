<section class="w-[100%] mx-auto py-10 bg-gray-900">
    <div data-aos="fade-up" data-aos-duration="1500" class="w-[95%] mx-auto md:w-[90%] p-3 md:p-5">
        <h2 class="font-bold text-[1.6rem] md:text-[2rem] lg:text-[2.5rem] text-blue-700">Galeri</h2>
        <p class="text-white">Beberapa dokumentasi berbagai kegiatan yang telah kami adakan.</p>
        <div class="container flex flex-wrap mx-auto px-4">
            <?php foreach ($latestGaleri as $galeri) : ?>
                <div action="galeri/editgaleri/<?= $galeri->id_galeri ?>" class="w-[100%] sm:w-[50%] md:w-[33.3333%] xl:w-[25%] rounded-lg p-2">
                    <div class="w-full bg-white rounded-lg shadow-lg flex flex-col space-y-1.5 p-2 justify-center items-center">
                        <h1 class=""><b><?= $galeri->judul ?></b></h1>
                        <div class="bg-black w-full flex justify-center items-center overflow-hidden">
                            <img src="/<?= $galeri->img ?>" alt="" class="object-cover aspect-w-6 aspect-h-4 min-h-48">
                        </div>
                        <p class="line-clamp-1"><?= $galeri->deskripsi ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="flex justify-center items-center my-3">
            <button onclick="window.location.href = '/galeri';" class="bg-blue-700 text-white font-bold py-2 px-5 rounded-lg">Lihat Galeri</button>
        </div>
    </div>
</section>