@extends('layouts.layout')
@section('container')
<section id="event" class="p-10 mt-16 bg-gray-100">
    <div class="text-center self-center">
        <h3 class="font-black text-3xl md:text-5xl mb-3">
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-red-700 to-red-500">
                Event yang kami adakan
            </span>
        </h3>
        <p class="text-lg font-semibold text-gray-800">
            Acara - acara yang dari komunitas kami
        </p>
    </div>
    <form class="py-5">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari" required>
            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
        </div>
    </form>
    <div class="grid grid-cols-2 gap-8 my-10">
        @for($i = 0; $i < 5; $i++)
            <div class="col-span-2 md:col-span-1">
                <a href="{{ route('event.show') }}" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset('img/gallery-3.jpg') }}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Blakra'an</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam, laudantium.</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">20-03-2023</p>
                    </div>
                </a>
            </div>
        @endfor
    </div>
</section>
@endsection
