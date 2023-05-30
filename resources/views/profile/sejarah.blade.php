@extends('layouts.layout')
@section('container')
<div class="grid grid-cols-2 gap-4 mt-16 p-10">
    <div class="md:col-span-1 sm:col-span-2 max-[639px]:col-span-2 md:self-center">
        <div class="text-center">
            <h3 class="font-black text-3xl md:text-5xl mb-3">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-red-700 to-red-500">
                    Sejarah Singkat
                </span>
            </h3>
            <blockquote class="text-lg font-semibold text-gray-800 mb-3 md:mb-5">
                Kisah kami dimulai pada <span class="text-red-700 font-bold">tahun 1995</span>.
                Sebuah kelompok kecil penggemar motor yang memiliki semangat dan dedikasi yang sama untuk menjelajahi dunia di atas roda memutuskan untuk membentuk sebuah klub.
                Visi kami adalah menciptakan lingkungan yang mempererat ikatan di antara sesama penggemar motor dan memperluas jaringan sosial serta pengetahuan tentang dunia motor.
            </blockquote>
        </div>
    </div>
    <figure
        class="md:col-span-1 sm:col-span-2 max-[639px]:col-span-2 place-self-center w-3/4 transition-all duration-300 hover:-translate-y-1 hover:scale-110 drop-shadow-lg">
            <img loading="lazy" class="rounded-lg" src="{{ asset('img/about-us.png') }}" alt="Pengantar">
    </figure>
    <blockquote class="col-span-2 place-self-center text-lg font-semibold text-gray-800 mb-3 md:mb-">
        Dalam perjalanan kami, klub motor kami tumbuh dengan pesat. Kami melihat semakin banyak individu yang bergabung dengan kami, membawa pengalaman dan keahlian mereka dalam dunia motor. Kami mengadakan berbagai acara dan kegiatan yang melibatkan pengendara motor dari segala usia dan latar belakang. Bersama-sama, kami berbagi kisah petualangan, memperluas pengetahuan teknis, dan saling memberikan dukungan dalam menjalani hobi yang kami cintai.
        <br>
        <br>
        Seiring berjalannya waktu, klub motor kami juga berkontribusi pada masyarakat sekitar. Kami melakukan kegiatan sosial dan penggalangan dana untuk amal guna membantu mereka yang membutuhkan. Kami percaya bahwa motor bukan hanya kendaraan, tetapi juga alat untuk membangun hubungan sosial yang positif dan memberikan dampak positif pada lingkungan sekitar.
        <br>
        <br>
        Hingga saat ini, klub motor kami terus tumbuh dan berkembang. Kami terbuka bagi siapa pun yang berbagi semangat dan cinta yang sama terhadap motor. Kami berkomitmen untuk menciptakan pengalaman yang tak terlupakan, menghubungkan penggemar motor, dan merayakan kebebasan dan petualangan di atas roda.
    </blockquote>
</div>
@endsection
