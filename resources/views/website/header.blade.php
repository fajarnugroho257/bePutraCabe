<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Navbar Putra Cabe - Clip-Path Transition</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        {{-- @vite('resources/css/app.css') --}}
        <link rel="stylesheet" href="{{ asset('dist/css/build.css') }}">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        {{-- fancy --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    </head>
    <body class="font-poppins">
        <nav id="main-navbar" class="sticky top-0 z-50 bg-white shadow-sm border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-20 items-center">
                    <div class="flex items-center">
                        <img src="{{ asset('/images/putraCabe.png') }}" alt="PutraCabe" class="w-20 md:w-28">
                        {{-- <h1 class="font-bold">Putra Cabe</h1> --}}
                    </div>
                    
                    {{-- <a href="#" class="text-2xl font-serif font-bold text-sage">
                        🌿 Putra Cabe
                    </a> --}}
                    <div class="hidden md:flex space-x-6 text-lg font-medium items-center">
                        <a href="{{ route('home') }}" class="text-gray-600 hover:text-sage transition @if ($title == 'home') font-bold @endif">Home</a>
                        <a href="{{ route('katalog') }}" class="text-gray-600 hover:text-sage transition @if ($title == 'katalog') font-bold @endif">Katalog Produk</a>
                        <a href="{{ route('about') }}" class="text-gray-600 hover:text-sage transition @if ($title == 'about') font-bold @endif">Tentang Kami</a>
                        <a href="{{ route('order') }}" class="text-gray-600 hover:text-sage transition @if ($title == 'order') font-bold @endif">Cara Order</a>
                        <a href="{{ route('kontak') }}" class="text-gray-600 hover:text-sage transition @if ($title == 'kontak') font-bold @endif">Kontak</a>
                        <a href="{{ route('artikel') }}" class="text-gray-600 hover:text-sage transition @if ($title == 'artikel') font-bold @endif">Artikel</a>
                        {{-- <a href="#cta" class="flex gap-1 bg-red-600 text-white px-5 py-2 ml-4 rounded-lg font-semibold text-sm hover:bg-opacity-90 transition">Pesan Sekarang <img class="w-5 h-5" src="{{ asset('images/wa.png') }}" alt=""></a> --}}
                    </div>
                    <div class="flex md:hidden items-center">
                        <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-sage" aria-controls="mobile-menu-dropdown" aria-expanded="false">
                            <span class="sr-only">Buka menu utama</span>
                            <svg id="icon-open" class="h-6 w-6 block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <svg id="icon-close" class="h-6 w-6 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-dropdown" class="md:hidden hidden absolute top-20 left-0 w-full bg-white z-40 origin-top transform opacity-0 clip-path-initial transition-all duration-500 ease-in-out border-b-gray-300">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 border-t border-gray-100">
                    <a href="{{ route('home') }}" class="mobile-nav-item block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-sage">Home</a>
                    <a href="{{ route('katalog') }}" class="mobile-nav-item block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-sage">Katalog Produk</a>
                    <a href="{{ route('about') }}" class="mobile-nav-item block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-sage">Tentang Kami</a>
                    <a href="{{ route('order') }}" class="mobile-nav-item block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-sage">Cara Order</a>
                    <a href="{{ route('kontak') }}" class="mobile-nav-item block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-sage">Kontak</a>
                    <a href="{{ route('artikel') }}" class="mobile-nav-item block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-sage">Artikel</a>
                    <a href="#cta" class="mobile-nav-item block w-full text-center mt-3 bg-red-600 text-white px-3 py-2 rounded-lg font-semibold text-base hover:bg-opacity-90 transition">
                        Pesan Sekarang
                    </a>
                </div>
            </div>
        </nav>