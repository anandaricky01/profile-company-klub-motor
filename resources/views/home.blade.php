@extends('layouts.layout')
@section('container')
<style>
    .custom-img {
        background-image: url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg');
    }
</style>

{{-- <section id="jumbotron" class="bg-center bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply"> --}}
<section id="jumbotron" class="flex items-center justify-center h-screen mb-12 bg-gray-700 bg-blend-multiply bg-fixed bg-center bg-cover custom-img">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
            Unleashing motorcycle enthusiasts' potential worldwide</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">
            Di klub motor hobi kami, kami berfokus pada pasar di mana semangat, inovasi, dan dedikasi dapat memunculkan
            nilai jangka panjang dan mendorong pertumbuhan komunitas.</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
            <a href="#"
                class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                Tentang Kami
                <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="#"
                class="inline-flex justify-center hover:text-white items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-red-700 hover:border-white hover:bg-red-500/75 focus:ring-4 focus:ring-red-400">
                Learn more
            </a>
        </div>
    </div>
</section>

<section id="kata-pengantar" class="px-10 pt-10 pb-20">
    <div class="grid grid-cols-2 gap-4">
        <figure
            class="md:col-span-1 sm:col-span-2 max-[639px]:col-span-2 place-self-center w-3/4 transition-all duration-300 hover:-translate-y-1 hover:scale-110 filter grayscale hover:grayscale-0 drop-shadow-lg">
                <img loading="lazy" class="rounded-lg" src="{{ asset('img/pengantar-photo-1.jpg') }}" alt="Pengantar">
                {{-- <a href="https://www.freepik.com/free-photo/stylish-sexy-woman-biker-clothing-is-posing-photographer-her-bike-graffiti-wall_26398286.htm#query=motorcycle%20club&position=0&from_view=search&track=ais">Image by fxquadro</a> on Freepik --}}
        </figure>
        <div class="md:col-span-1 sm:col-span-2 max-[639px]:col-span-2 md:self-center">
            <div class="max-[639px]:text-center">
                <h3 class="font-black text-5xl mb-3">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-red-700 to-red-500">
                        Selamat datang di klub motor kami!
                    </span>
                </h3>
                <p class="text-lg font-semibold text-gray-800">
                    Kami dengan bangga mempersembahkan dunia yang penuh gairah bagi pecinta motor dari segala penjuru.
                    Di sini, Anda akan menemukan komunitas yang bersemangat, petualangan yang menantang, dan koneksi
                    yang mendalam
                </p>
            </div>
        </div>
    </div>

    <div class="mt-10 w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="sm:hidden">
            <label for="tabs" class="sr-only">Select tab</label>
            <select id="tabs" class="bg-gray-50 border-0 border-b border-gray-200 text-red-900 text-sm rounded-t-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option class="accent-red-500">Statistics</option>
            </select>
        </div>
        <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
            <li class="w-full">
                <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab" aria-controls="stats" aria-selected="true" class="text-red-700 hover:text-red-800 inline-block w-full p-4 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Statistics</button>
            </li>
        </ul>
        <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
            <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel" aria-labelledby="stats-tab">
                <dl class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8">
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">16+</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Provinsi</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">38+</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Kota</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">530+</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Anggota</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">53+</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Kegiatan</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">10+</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Cabang Pelatihan</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">200+</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Tenaga Ahli</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

</section>

<section id="about-us" class="p-10 bg-gray-100">
    <div class="text-center pb-3">
        <h3 class="font-black text-5xl md:text-7xl mb-3">
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-red-700 to-red-500">
                Tentang Kami
            </span>
        </h3>
        <p class="text-lg font-semibold text-gray-800">
            Kenali kami lebih dekat
        </p>
    </div>
    <div class="grid grid-cols-2 gap-4">
        <div class="md:col-span-1 sm:col-span-2 max-[639px]:col-span-2 md:self-center">
            <div class="text-center">
                <h3 class="font-black text-3xl md:text-5xl mb-3">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-red-700 to-red-500">
                        Sejarah Singkat
                    </span>
                </h3>
                <p class="text-lg font-semibold text-gray-800 mb-3 md:mb-5">
                    Kisah kami dimulai pada <span class="text-red-700 font-bold">tahun 1995</span>.
                    Sebuah kelompok kecil penggemar motor yang memiliki semangat dan dedikasi yang sama untuk menjelajahi dunia di atas roda memutuskan untuk membentuk sebuah klub.
                </p>
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                    Read more
                    <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
        <figure
            class="md:col-span-1 sm:col-span-2 max-[639px]:col-span-2 place-self-center w-3/4 transition-all duration-300 hover:-translate-y-1 hover:scale-110 drop-shadow-lg">
                <img loading="lazy" class="rounded-lg" src="{{ asset('img/about-us.png') }}" alt="Pengantar">
        </figure>
    </div>

    <div class="grid grid-cols-2 gap-4 py-10">
        <figure
        class="md:col-span-1 sm:col-span-2 max-[639px]:col-span-2 place-self-center w-3/4 transition-all duration-300 hover:origin-bottom-right hover:rotate-2 hover:-translate-y-6 hover:scale-y-110 drop-shadow-lg">
            <img loading="lazy" class="rounded-lg" src="{{ asset('img/about-us-2.jpg') }}" alt="Pengantar">
            {{-- <a href="https://www.freepik.com/free-photo/headlight-lamp_3822324.htm#query=motorcycle%20club&position=5&from_view=search&track=location_fest_v1">Image by lifeforstock</a> on Freepik --}}
        </figure>
        <div class="md:col-span-1 sm:col-span-2 max-[639px]:col-span-2 md:self-center">
            <div class="text-center">
                <h3 class="font-black text-3xl md:text-5xl mb-3">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-red-700 to-red-500">
                        Bidang kami..
                    </span>
                </h3>
                <p class="text-lg font-semibold text-gray-800">
                    Klub Motor Vortex merupakan sebuah komunitas yang fokus pada pengembangan dan peningkatan keterampilan mengendarai motor.
                </p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-3 gap-10 py-10">
        <div class="col-span-3 justify-self-center text-center">
            <h3 class="font-black text-3xl md:text-5xl mb-3">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-red-700 to-red-500">
                    Kegiatan yang kami lakukan
                </span>
            </h3>
            <p class="text-lg font-semibold text-gray-800">Kami menawarkan berbagai kegiatan dan program yang bertujuan untuk..</p>
        </div>
        <div class="lg:col-span-1 md:col-span-1 sm:col-span-3 max-[639px]:col-span-3">
            <a href="#"
                class="transition ease-in-out duration-300 block max-w-sm p-6 bg-white border hover:scale-110 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <div class="mb-1">
                    <svg class="w-12 bg-gradient-to-r from-red-500 to-red-400 justify-self-center p-2 rounded-full stroke-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                      </svg>
                </div>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Meningkatkan kemampuan teknis
                </h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">
                    Kemampuan teknis dalam dunia permotoran, seperti bagaimana cara merawat motor agar tetap awet
                </p>
            </a>
        </div>
        <div class="lg:col-span-1 md:col-span-1 sm:col-span-3 max-[639px]:col-span-3">
            <a href="#"
                class="transition ease-in-out duration-300 block max-w-sm p-6 bg-white border hover:scale-110 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <div class="mb-1">
                    <svg class="w-12 bg-gradient-to-r from-red-500 to-red-400 justify-self-center p-2 rounded-full stroke-white"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                    </svg>
                </div>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Keterampilan berkendara
                </h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">
                    Semua anggota mempunyai hak untuk belajar dan mengajar, terutama dalam mengendarai motor
                </p>
            </a>
        </div>
        <div class="lg:col-span-1 md:col-span-1 sm:col-span-3 max-[639px]:col-span-3">
            <a href="#"
                class="transition ease-in-out duration-300 block max-w-sm p-6 bg-white border hover:scale-110 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <div class="mb-1">
                    <svg class="w-12 bg-gradient-to-r from-red-500 to-red-400 justify-self-center p-2 rounded-full stroke-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                      </svg>
                </div>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Pengetahuan tentang dunia motor
                </h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">
                    Semakin luas pengetahuan tentang dunia motor, semakin banyak topik yang bisa dibicarakan
                </p>
            </a>
        </div>
    </div>
    <br>
</section>

<section id="visi-misi" class="p-10">
    <div class="grid grid-cols-2 gap-4 py-10">
        <div class="md:col-span-1 sm:col-span-2 max-[639px]:col-span-2 md:self-start">
            <div class="text-center">
                <h3 class="font-black text-3xl md:text-5xl mb-3">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-red-700 to-red-500">
                        Visi
                    </span>
                </h3>
                <p class="font-normal text-lg md:text-2xl text-gray-700 dark:text-gray-400">
                    Menjadi pemimpin industri klub motor dengan inovasi terbaru dan memberikan pengalaman tak terlupakan bagi penggemar motor di seluruh dunia.
                </p>
            </div>
        </div>
        <div class="md:col-span-1 sm:col-span-2 max-[639px]:col-span-2 md:self-start md:place-self-start md:justify-self-center">
            <div class="text-center">
                <h3 class="font-black text-3xl md:text-5xl mb-3">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-red-700 to-red-500">
                        Misi
                    </span>
                </h3>
            </div>
            <ol class="max-w-md space-y-1 text-lg md:text-2xl text-gray-500 list-decimal list-inside dark:text-gray-400">
                <li>
                    membangun komunitas yang solid dan saling mendukung
                </li>
                <li>
                    menginspirasi penggemar motor untuk menjalani petualangan dan penjelajahan
                </li>
                <li>
                    sadar akan tanggung jawab kami terhadap lingkungan
                </li>
            </ol>
        </div>
    </div>
</section>

<section id="produk-kami" class="p-10 bg-gray-100">
    <div class="justify-self-center text-center py-4">
        <h3 class="font-black text-3xl md:text-5xl mb-3">
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-red-700 to-red-500">
                Produk Kami
            </span>
        </h3>
        <p class="text-lg font-semibold text-gray-800"></p>
    </div>
    <div class="grid grid-cols-4 gap-4">
        <div class="col-span-4 md:col-span-1 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="p-8 rounded-t-lg" src="{{ asset('img/product-1.png') }}" alt="product image" />
            </a>
            <div class="px-5 pb-5">
                <a href="#">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">White Cap Original</h5>
                </a>
                <div class="flex items-center mt-2.5 mb-5">
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Second star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Third star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-3xl font-bold text-gray-900 dark:text-white">Rp.30K</span>
                    <a href="#" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                </div>
            </div>
        </div>
        <div class="col-span-4 md:col-span-1 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="p-8 rounded-t-lg" src="{{ asset('img/product-2.png') }}" alt="product image" />
            </a>
            <div class="px-5 pb-5">
                <a href="#">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Blue Bomber Kekinian</h5>
                </a>
                <div class="flex items-center mt-2.5 mb-5">
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Second star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Third star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-3xl font-bold text-gray-900 dark:text-white">Rp.200K</span>
                    <a href="#" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                </div>
            </div>
        </div>
        <div class="col-span-4 md:col-span-1 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="p-8 rounded-t-lg" src="{{ asset('img/product-3.png') }}" alt="product image" />
            </a>
            <div class="px-5 pb-5">
                <a href="#">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Black Cap Original</h5>
                </a>
                <div class="flex items-center mt-2.5 mb-5">
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Second star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Third star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-3xl font-bold text-gray-900 dark:text-white">Rp.30K</span>
                    <a href="#" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                </div>
            </div>
        </div>
        <div class="relative col-span-4 md:col-span-1 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="p-8 rounded-t-lg blur-sm" src="{{ asset('img/product-1.png') }}" alt="product image" />
            </a>
            <div class="px-5 pb-5">
                <a href="#">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white blur-sm">Temukan Produk Lainnya!</h5>
                </a>
                <div class="flex items-center mt-2.5 mb-5 blur-sm">
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Second star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Third star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-3xl font-bold text-gray-900 dark:text-white blur-sm">$599</span>
                </div>
            </div>
            <a href="#" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 absolute top-1/2 start-20">Lihat produk lain</a>
        </div>
    </div>
</section>

<section id="kata-mereka" class="p-10">
    <div class="text-center self-center">
        <h3 class="font-black text-3xl md:text-5xl mb-3">
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-red-700 to-red-500">
                Apa Kata Mereka?
            </span>
        </h3>
        <p class="text-lg font-semibold text-gray-800">
            Lihat pendapat klien tentang kami
        </p>
    </div>
    <div id="klien" class="grid grid-cols-2 gap-4 justify-items-center mt-10">
        <figure class="col-span-2 md:col-span-1 bg-gray-100 p-8 rounded-xl md:flex md:p-0 shadow-md">
            <img loading="lazy" src="{{ asset('img/cust-1.jpg') }}" alt="customer-1" class="md:w-48 md:h-auto md:rounded-none mx-auto w-24 h-24 rounded-full">
            <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                <blockquote>
                    <p class="text-lg font-medium">
                        "Saya sangat menyukai produk merchandisenya Klub Motor Vortex!"
                    </p>
                </blockquote>
                <figcaption class="font-medium">
                    <p class="text-red-700">
                        Dian Nugraha
                    </p>
                    <p class="text-slate-700">
                        Vortex'23
                    </p>
                </figcaption>
            </div>
        </figure>
        <figure class="col-span-2 md:col-span-1 bg-gray-100 p-8 rounded-xl md:flex md:p-0 shadow-md">
            <img loading="lazy" src="{{ asset('img/cust-2.jpg') }}" alt="customer-1" class="md:w-48 md:h-auto md:rounded-none mx-auto w-24 h-24 rounded-full">
            <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                <blockquote>
                    <p class="text-lg font-medium">
                        "Kaus yang saya beli dari Klub Motor Vortex benar-benar bagus!"
                    </p>
                </blockquote>
                <figcaption class="font-medium">
                    <p class="text-red-700">
                        Maya Fitriani
                    </p>
                    <p class="text-slate-700">
                        Vortex'19
                    </p>
                </figcaption>
            </div>
        </figure>
        <figure class="col-span-2 md:col-span-1 bg-gray-100 p-8 rounded-xl md:flex md:p-0 shadow-md">
            <img loading="lazy" src="{{ asset('img/cust-3.jpg') }}" alt="customer-1" class="md:w-48 md:h-auto md:rounded-none mx-auto w-24 h-24 rounded-full">
            <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                <blockquote>
                    <p class="text-lg font-medium">
                        Saya sangat menyukai produk merchandisenya Klub Motor Vortex!
                    </p>
                </blockquote>
                <figcaption class="font-medium">
                    <p class="text-red-700">
                        Dian Nugraha
                    </p>
                    <p class="text-slate-700">
                        Vortex'23
                    </p>
                </figcaption>
            </div>
        </figure>
    </div>
</section>

<section id="gallery" class="p-10 bg-gray-100">
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
        <figure class="max-w-lg col-span-2 md:col-span-1 transition-all duration-300 hover:-translate-y-2 hover:scale-110">
            <a href="">
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/pengantar-photo-1.jpg') }}" alt="image description">
                <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Kegiatan</figcaption>
            </a>
        </figure>
        <figure class="max-w-lg col-span-2 md:col-span-1 transition-all duration-300 hover:-translate-y-2 hover:scale-110">
            <a href="">
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/pengantar-photo-1.jpg') }}" alt="image description">
                <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Kegiatan</figcaption>
            </a>
        </figure>
        <figure class="max-w-lg col-span-2 md:col-span-1 transition-all duration-300 hover:-translate-y-2 hover:scale-110">
            <a href="">
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/pengantar-photo-1.jpg') }}" alt="image description">
                <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Kegiatan</figcaption>
            </a>
        </figure>
        <figure class="max-w-lg col-span-2 md:col-span-1 transition-all duration-300 hover:-translate-y-2 hover:scale-110">
            <a href="">
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/pengantar-photo-1.jpg') }}" alt="image description">
                <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Kegiatan</figcaption>
            </a>
        </figure>
    </div>
</section>

<section id="event" class="p-10">
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
    <div class="grid grid-cols-2 my-10">
        <div class="col-span-2 md:col-span-1 gap-8">
            <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset('img/gallery-3.jpg') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Blakra'an</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam, laudantium.</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">20-03-2023</p>
                </div>
            </a>
        </div>
        <div class="col-span-2 md:col-span-1">
            <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset('img/gallery-3.jpg') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Blakra'an</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam, laudantium.</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">20-03-2023</p>
                </div>
            </a>
        </div>
    </div>
    <div class="m-auto text-center">
        <a href="" class="p-2 bg-red-700 text-white rounded-md hover:bg-red-800">Telusuri Event lainnya</a>
    </div>
</section>

<section id="article" class="p-10 bg-gray-100">
    <div class="text-center self-center">
        <h3 class="font-black text-3xl md:text-5xl mb-3">
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-red-700 to-red-500">
                Artikel
            </span>
        </h3>
        <p class="text-lg font-semibold text-gray-800">
            Telusuri Artikel - Artikel Kami
        </p>
    </div>
    <div class="grid grid-cols-3 gap-4 my-10">

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('img/gallery-1.jpg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('img/gallery-2.jpg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('img/pengantar-photo-1.jpg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
    </div>
    <div class="m-auto text-center">
        <a href="" class="p-2 bg-red-700 text-white rounded-md hover:bg-red-800">Telusuri Artikel lainnya</a>
    </div>
</section>

@endsection
