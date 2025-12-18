@include('website.header')
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 md:pt-10 text-xs md:text-sm " aria-label="Breadcrumb">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="#" class="text-gray-500 hover:text-red-600">Home</a>
                <span class="mx-2 text-gray-400">/</span>
            </li>
            <li class="text-red-600 font-medium" aria-current="page">Artikel</li>
        </ol>
    </nav>
    <section id="katalog" class="py-5 md:pb-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-2xl md:text-4xl font-serif font-bold mb-4 md:mb-8 text-center">🌶️ Semua Artikel Terbaru</h1>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                <div class="lg:col-span-2 space-y-8">
                    <article class="bg-white rounded-xl shadow-lg overflow-hidden transition duration-300 card-shadow">
                        <a href="#" class="block md:flex">
                            <div class="md:w-1/3">
                                <img src="images/hero-6.png" alt="Tips Memilih Cabai Segar" class="w-full h-48 md:h-full object-cover">
                            </div>
                            <div class="p-6 md:w-2/3">
                                <span class="text-xs font-semibold uppercase tracking-wide text-red-600">Tips & Trik</span>
                                <h2 class="text-base md:text-lh lg:text-xl font-bold text-gray-900 mt-1 mb-2 group-hover:text-red-700">5 Tips Jitu Memilih Cabai Merah yang Super Segar di Pasar</h2>
                                <p class="text-sm md:text-base text-gray-600 mb-4">
                                    Jangan sampai salah pilih! Cabai yang segar adalah kunci masakan lezat dan tahan lama. Simak rahasia para ahli dalam memilih cabai bebas busuk.
                                </p>
                                <div class="flex items-center text-sm text-gray-500">
                                    <span class="text-xs md:text-sm mr-3">Oleh: Admin PutraCabe</span>
                                    <span class="text-xs md:text-sm"><i class="fa fa-calendar"></i> 15 November 2025</span>
                                </div>
                            </div>
                        </a>
                    </article>

                    <div class="mt-10 flex justify-center items-center space-x-1">
                        <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 transition duration-150">
                            <span aria-hidden="true">&laquo;</span> Sebelumnya
                        </a>
                        <a href="#" class="px-4 py-2 text-sm font-medium text-white bg-red-600 border border-red-600 rounded-lg">1</a>
                        <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-100">2</a>
                        <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-100">3</a>
                        <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 transition duration-150">
                            Selanjutnya <span aria-hidden="true">&raquo;</span>
                        </a>
                    </div>

                </div>
                
                <div class="space-y-8">
                    
                    <div class="bg-white p-4 md:p-6 rounded-xl shadow-lg border-t-4 border-red-600">
                        <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-2 md:mb-4">Cari Artikel</h3>
                        <div class="relative">
                            <input type="search" placeholder="Cari tips atau resep..." class="text-sm md:text-base w-full py-2 pl-4 pr-10 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 text-gray-700">
                            <button class="absolute right-0 top-0 mt-2 mr-3 text-gray-500 hover:text-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-red-600">
                        <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-2 md:mb-4">Kategori</h3>
                        <ul class="space-y-1 md:space-y-2">
                            <li>
                                <a href="#" class="flex justify-between items-center text-gray-700 hover:text-red-600 font-medium">
                                    <span class="text-sm md:text-base">Tips & Trik Memasak</span>
                                    <span class="text-xs bg-gray-200 text-gray-600 px-2 py-0.5 rounded-full">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex justify-between items-center text-gray-700 hover:text-red-600 font-medium">
                                    <span class="text-sm md:text-base">Info Pasar & Harga</span>
                                    <span class="text-xs bg-gray-200 text-gray-600 px-2 py-0.5 rounded-full">8</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex justify-between items-center text-gray-700 hover:text-red-600 font-medium">
                                    <span class="text-sm md:text-base">Kesehatan & Nutrisi</span>
                                    <span class="text-xs bg-gray-200 text-gray-600 px-2 py-0.5 rounded-full">5</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex justify-between items-center text-gray-700 hover:text-red-600 font-medium">
                                    <span class="text-sm md:text-base">Petani & Budidaya</span>
                                    <span class="text-xs bg-gray-200 text-gray-600 px-2 py-0.5 rounded-full">15</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-red-600">
                        <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-2 md:mb-4">Populer Minggu Ini</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start group">
                                <span class="text-xl md:text-2xl font-bold text-red-600 mr-3">1</span>
                                <a href="#" class="block">
                                    <p class="text-sm md:text-base font-semibold text-gray-900 group-hover:text-red-700 transition duration-150">Cara Ampuh Mengusir Kutu Putih pada Tanaman Cabai</p>
                                    <span class="text-xs text-gray-500">2 Hari lalu - 500x dilihat</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </section>
@include('website.footer')