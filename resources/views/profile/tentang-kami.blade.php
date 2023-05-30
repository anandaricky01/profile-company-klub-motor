@extends('layouts.layout')
@section('container')
<section id="about-us" class="p-10 bg-gray-100 mt-16">
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
@endsection
