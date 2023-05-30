@extends('layouts.layout')
@section('container')
<section id="gallery" class="p-10 bg-gray-100 mt-16">
    <div class="text-center self-center">
        <h3 class="font-black text-3xl md:text-5xl mb-3">
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-red-700 to-red-500">
                Gallery Kegiatan Kami
            </span>
        </h3>
        <p class="text-lg font-semibold text-gray-800">
            Dokumentasi seluruh kegiatan kami
        </p>
    </div>
    <div class="grid grid-cols-4 gap-4 py-5">
        @for ($i = 0; $i < 4; $i++)
            <figure class="max-w-lg col-span-2 md:col-span-1 transition-all duration-300 hover:-translate-y-2 hover:scale-110">
                <a href="">
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/pengantar-photo-1.jpg') }}" alt="image description">
                    <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Kegiatan</figcaption>
                </a>
            </figure>
            <figure class="max-w-lg col-span-2 md:col-span-1 transition-all duration-300 hover:-translate-y-2 hover:scale-110">
                <a href="">
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/gallery-1.jpg') }}" alt="image description">
                    <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Kegiatan</figcaption>
                </a>
            </figure>
            <figure class="max-w-lg col-span-2 md:col-span-1 transition-all duration-300 hover:-translate-y-2 hover:scale-110">
                <a href="">
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/gallery-2.jpg') }}" alt="image description">
                    <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Kegiatan</figcaption>
                </a>
            </figure>
            <figure class="max-w-lg col-span-2 md:col-span-1 transition-all duration-300 hover:-translate-y-2 hover:scale-110">
                <a href="">
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/pengantar-photo-1.jpg') }}" alt="image description">
                    <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Kegiatan</figcaption>
                </a>
            </figure>
        @endfor
    </div>
</section>
@endsection
