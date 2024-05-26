<section class="w-[100%] mx-auto py-10 bg-gray-900">
    <div data-aos="fade-up" data-aos-duration="1500" class="w-[95%] mx-auto md:w-[90%] rounded-2xl p-3 md:p-5">
        <div>
            <h2 class="font-bold text-[1.6rem] md:text-[2rem] lg:text-[2.5rem] text-blue-700 my-5">Informasi</h2>
        </div>
        <div class="container-card flex overflow-x-auto no-scrollbar px-4 <?= count($latestInfo) < 3 ? 'center-cards' : '' ?>" id="galleryContainer">
            <?php foreach ($latestInfo as $info) : ?>
                <div class="flex-shrink-0 w-[100%] md:w-[70%] xl:w-[40%] aspect-w-5 aspect-h-4 mb-5 md:mb-0" onclick="openModal('/<?= $info->img ?>')">
                    <div class="w-full flex flex-col space-y-1.5 p-2 justify-center items-center">
                        <div class="bg-black h-72 aspect-w-5 aspect-h-4 md:h-96 flex justify-center items-center overflow-hidden">
                            <img src="/<?= $info->img ?>" alt="" class="object-fill w-full h-full">
                        </div>
                        <p class="line-clamp-1 text-center font-bold text-white"><?= $info->detail ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div id="modal" class="hidden mt-20 p-5 fixed inset-0 bg-black/50 flex justify-center items-center">
        <div class="bg-white p-5 rounded-lg relative">
            <button onclick="closeModal()" class="absolute top-2 right-2 text-lg focus:outline-none font-bold">&times;</button>
            <img id="modalImage" src="" alt="Image Detail" class="max-w-full max-h-[80vh] object-contain">
        </div>
    </div>
</section>
<script>
    function scrollGallery(scrollOffset) {
        const galleryContainer = document.getElementById('galleryContainer');
        galleryContainer.scrollBy({
            left: scrollOffset,
            behavior: 'smooth'
        });
    }

    function autoScroll() {
        const galleryContainer = document.getElementById('galleryContainer');
        const cardWidth = galleryContainer.querySelector('.flex-shrink-0').clientWidth; // Ambil lebar card
        scrollGallery(cardWidth + 20);
        if (galleryContainer.scrollLeft + galleryContainer.clientWidth >= galleryContainer.scrollWidth) {
            galleryContainer.scrollLeft = 0;
        }
    }
    setInterval(autoScroll, 5000);

    document.getElementById('galleryContainer').addEventListener('click', function(event) {
        var target = event.target.closest('.flex-shrink-0');
        if (target) {
            var detail = target.getAttribute('onclick').split("'")[1];
            openModal(detail);
            console.log('Card clicked:', detail);
        }
    });

    function openModal(imageUrl) {
        document.getElementById('modalImage').src = imageUrl;
        document.getElementById('modal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('modal').classList.add('hidden');
    }
</script>