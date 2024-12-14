@extends('layout')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gray-50 dark:bg-gray-900">
    <!-- Background Image -->
    <div class="relative h-screen">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/images/about.jpg');">
            <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        </div>
        <div class="relative z-10 flex flex-col items-start justify-center h-full px-8 max-w-screen-xl mx-auto">
            <h1 class="text-5xl font-extrabold text-white lg:text-7xl">
                Great Coffee For Some Joy
            </h1>
            <p class="mt-4 text-lg font-medium text-gray-300 max-w-lg">
                Discover the taste of freshly brewed coffee crafted with precision and love. Let us bring joy to your day with a cup of perfection.
            </p>
            <a href="#specialty" class="px-6 py-3 mt-6 text-lg font-bold text-white bg-yellow-600 rounded-lg hover:bg-yellow-500">
                See Menu
            </a>
        </div>
    </div>
</section>

<!-- Specialty Section -->
<section id="specialty" class="py-16 bg-white dark:bg-gray-800">
    <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                Our Specialty
            </h2>
            <p class="mt-4 text-lg leading-relaxed text-gray-600 dark:text-gray-400">
                A collection of premium coffees crafted to perfection, just for you.
            </p>
        </div>

        <div class="grid grid-cols-1 gap-8 mt-10 md:grid-cols-2 lg:grid-cols-3">
            <!-- Espresso Coffee -->
            <div class="p-6 bg-gray-100 dark:bg-gray-700 rounded-lg shadow-md">
                <img src="/images/about3.jpg" alt="Espresso Coffee" class="w-full h-48 rounded-lg object-cover">
                <h3 class="mt-4 text-xl font-bold text-gray-800 dark:text-white">Espresso Coffee</h3>
                <p class="mt-2 text-gray-600 dark:text-gray-300">
                    A rich and bold coffee that awakens your senses with its intense flavor.
                </p>
                <a href="#" class="inline-block px-4 py-2 mt-4 text-sm font-medium text-white bg-yellow-600 rounded-lg hover:bg-yellow-500">
                    See More
                </a>
            </div>

            <!-- American Coffee -->
            <div class="p-6 bg-gray-100 dark:bg-gray-700 rounded-lg shadow-md">
                <img src="/images/about1.jpg" alt="American Coffee" class="w-full h-48 rounded-lg object-cover">
                <h3 class="mt-4 text-xl font-bold text-gray-800 dark:text-white">American Coffee</h3>
                <p class="mt-2 text-gray-600 dark:text-gray-300">
                    Smooth and classic, our American coffee is perfect for your everyday moments.
                </p>
                <a href="#" class="inline-block px-4 py-2 mt-4 text-sm font-medium text-white bg-yellow-600 rounded-lg hover:bg-yellow-500">
                    See More
                </a>
            </div>

            <!-- Cappuccino Coffee -->
            <div class="p-6 bg-gray-100 dark:bg-gray-700 rounded-lg shadow-md">
                <img src="/images/about2.jpg" alt="Cappuccino Coffee" class="w-full h-48 rounded-lg object-cover">
                <h3 class="mt-4 text-xl font-bold text-gray-800 dark:text-white">Cappuccino Coffee</h3>
                <p class="mt-2 text-gray-600 dark:text-gray-300">
                    A perfect blend of espresso, steamed milk, and foam for a creamy delight.
                </p>
                <a href="#" class="inline-block px-4 py-2 mt-4 text-sm font-medium text-white bg-yellow-600 rounded-lg hover:bg-yellow-500">
                    See More
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
