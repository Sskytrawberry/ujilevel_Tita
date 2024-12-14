@extends('layout')
@section('content')

<section class="background-image">
<!-- <img class="bg-center bg-no-repeat" src="{{ asset('images/bgcafe.jpg')}}"> -->
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-lora tracking-tight leading-none text-white md:text-5xl lg:text-6xl">WELCOME TO LHA IKI CAFE</h1>
        <p class="mb-8 text-lg font-cinzel text-white lg:text-xl sm:px-16 lg:px-48">LHA IKI CAFE menyajikan perpaduan modernitas dan sentuhan budaya Jawa. Dengan dekorasi khas, alunan musik gamelan, dan menu tradisional berkonsep modern, kafe ini menawarkan suasana hangat dan unik untuk bersantai. Ngopi di sini, rasakan nuansa beda!</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Get started
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
            <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                Learn more
            </a>  
        </div>
    </div>
</section>


<h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-white text-center md:text-5xl lg:text-6xl dark:text-white">We have features <span class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">pleasant variety</span></h1>
<p class="text-lg font-normal text-yellow-300 text-center lg:text-xl dark:text-gray-400">Your satisfaction is our happiness</p>


<div class="container mx-auto ">
    <div class="grid grid-cols-3 gap-4">
    <!-- Card 1 -->
    <div class="card card-1">
        <a href="#">
            <img src="images/outdoorcafe.jpg" alt="Outdoor Cafe">
            <div class="content">
                <h5>Outdoor Cafe Experience</h5>
                <p>Nikmati suasana outdoor dengan pemandangan indah dan kopi spesial kami.</p>
            </div>
        </a>
    </div>

    <!-- Card 2 -->
    <div class="card card-2">
        <a href="#">
            <img src="images/camilan.jpg" alt="Camilan Cafe">
            <div class="content">
                <h5>Camilan Cafe</h5>
                <p>Pesan dan nikmati beragam rasa hidangan kami dengan ditemani alunan musik dan interior yang hangat.</p>
            </div>
        </a>
    </div>

    <!-- Card 3 -->
    <div class="card card-3">
        <a href="#">
            <img src="images/bndcafe.jpg" alt="Band Cafe">
            <div class="content">
                <h5>Band & Music Cafe</h5>
                <p>Nikmati pertunjukan musik live dengan teman dan keluarga.</p>
            </div>
        </a>
    </div>

    <!-- Card 4 -->
    <div class="card card-4">
        <a href="#">
            <img src="images/art.jpg" alt="Coffee Art">
            <div class="content">
                <h5>Coffee Art Corner</h5>
                <p>Rasakan seni dalam secangkir kopi dengan latte art yang unik.</p>
            </div>
        </a>
    </div>

    <!-- Card 5 -->
    <div class="card card-5">
        <a href="#">
            <img src="images/perpuscafe.jpg" alt="Book Cafe">
            <div class="content">
                <h5>Book & Reading Nook</h5>
                <p>Suasana tenang untuk membaca buku favorit di sudut nyaman kami.</p>
            </div>
        </a>
    </div>

    <!-- Card 6 -->
    <div class="card card-6">
        <a href="#">
            <img src="images/fftime.jpg" alt="Family Cafe">
            <div class="content">
                <h5>Family Cafe</h5>
                <p>Tempat yang ideal untuk menghabiskan waktu berkualitas dengan keluarga.</p>
            </div>
        </a>
    </div>
</div>


<h1 class="mb-4 text-4xl text-center font-extrabold leading-none tracking-tight text-yellow-100 md:text-5xl lg:text-6xl dark:text-yellow-100">Ayo segera mampir ke <span class="text-blue-600 dark:text-green-500">cafe kekinian tradisional</span><span class="text-yellow-400 dark:text-yellow-400"> LHA IKI CAFE' </h1>
<p class="text-lg font-normal text-white lg:text-xl dark:text-gray-400">Temukan keunikan disetiap sudut Lha Iki Cafe</p>

@endsection