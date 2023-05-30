@extends('layouts.layout')
@section('container')
    <section class="p-10 mt-16">
        <div class="text-center self-center mb-10">
            <h3 class="font-black text-3xl md:text-5xl mb-3">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-red-700 to-red-500">
                    White Cap Original
                </span>
            </h3>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <figure class="col-span-2 md:col-span-1 max-w-lg mx-auto">
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/product-1.png') }}" alt="image description">
                {{-- <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Berkendara di musim kemarau</figcaption> --}}
                <button class="bg-red-700 px-4 py-2 rounded-md text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>
                </button>
            </figure>
            <div class="col-span-2 md:col-span-1 relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" colspan="2" class="px-6 py-3">
                                Produk
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Nama Produk
                            </th>
                            <td class="px-6 py-4">
                                White Cap Original
                            </td>
                        </tr>
                        <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Harga
                            </th>
                            <td class="px-6 py-4">
                                Rp. 30.000,-
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Berat
                            </th>
                            <td class="px-6 py-4">
                                < 1 Kilogram
                            </td>
                        </tr>
                        <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Keterangan Produk
                            </th>
                            <td class="px-6 py-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quo sit deserunt dolorem placeat consequuntur, distinctio magnam repudiandae non quae.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    {{-- tombol share social media --}}
    <div class="text-center">
        <div id="share-buttons">

            <!-- facebook -->
            <a class="facebook" target="blank"><i class="fab fa-facebook"></i></a>

            <!-- twitter -->
            <a class="twitter" target="blank"><i class="fab fa-twitter"></i></a>

            <!-- linkedin -->
            <a class="linkedin" target="blank"><i class="fab fa-linkedin"></i></a>

            <!-- reddit -->
            <a class="reddit" target="blank"><i class="fab fa-reddit"></i></a>

            <!-- whatsapp-->
            <a class="whatsapp" target="blank"><i class="fab fa-whatsapp"></i></a>

            <!-- telegram-->
            <a class="telegram" target="blank"><i class="fab fa-telegram"></i></a>

        </div>
    </div>

    {{-- script share social media --}}
    <script>
        const link = encodeURI(window.location.href);
        const msg = encodeURIComponent('Hey, I found this article');
        const title = encodeURIComponent('Article or Post Title Here');

        const fb = document.querySelector('.facebook');
        fb.href = `https://www.facebook.com/share.php?u=${link}`;

        const twitter = document.querySelector('.twitter');
        twitter.href = `http://twitter.com/share?&url=${link}&text=${msg}&hashtags=javascript,programming`;

        const linkedIn = document.querySelector('.linkedin');
        linkedIn.href = `https://www.linkedin.com/sharing/share-offsite/?url=${link}`;

        const reddit = document.querySelector('.reddit');
        reddit.href = `http://www.reddit.com/submit?url=${link}&title=${title}`;

        const whatsapp = document.querySelector('.whatsapp');
        whatsapp.href = `https://api.whatsapp.com/send?text=${msg}: ${link}`;

        const telegram = document.querySelector('.telegram');
        telegram.href = `https://telegram.me/share/url?url=${link}&text=${msg}`;
    </script>
@endsection
