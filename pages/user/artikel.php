<?php
$queryArtikel = mysqli_query($conn, "SELECT * FROM artikel WHERE status = 'publish'");
?>

<body chrome-hide-address-bar class="min-h-[100%]">
    <section class="pt-5 w-[100%] md:w-[85%] lg:w-[80%] mx-auto ">
        <div class="container grid mx-auto text-center ">
            <h1 class="text-2xl text-black font-bold ">ARTIKEL</h1>
        </div>
        <div class="container grid text-gray-600 mx-auto px-4 py-16 w-[90%] md:grid-cols-8 lg:grid-cols-12 gap-5">
            
        </div>
    </section>
</body>

</html>