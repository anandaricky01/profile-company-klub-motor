@extends('layouts.layout')
@section('container')
    <section class="p-10 mt-16">
        <div class="text-center self-center mb-10">
            <h3 class="font-black text-3xl md:text-5xl mb-3">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-red-700 to-red-500">
                    Berkendara di Musim Kemarau!
                </span>
            </h3>
        </div>
        <figure class="max-w-lg mx-auto">
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/gallery-1.jpg') }}" alt="image description">
            <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Berkendara di musim kemarau</figcaption>
        </figure>
        <blockquote class="mt-10">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum molestiae cum illo minima in deserunt consequuntur molestias, unde repellat facere voluptates blanditiis necessitatibus soluta minus iste quas asperiores? Vel mollitia ipsam reprehenderit quidem adipisci unde nostrum praesentium iusto. Vero ducimus iusto odio odit voluptatem explicabo, ipsa reiciendis quo omnis sint cum cumque amet a ut, voluptatibus sequi doloribus animi autem cupiditate? Dolorum neque soluta cum numquam debitis esse itaque cupiditate perspiciatis impedit doloribus nam est, magnam hic, doloremque rem quaerat unde! Distinctio dolorum doloribus autem, voluptatum quo voluptatem hic ea nam incidunt rem quibusdam optio architecto.
        </blockquote>
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
