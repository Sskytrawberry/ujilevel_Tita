<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/', function () {
    return view('layout');
});

// Home
Route::get('/', [PageController::class, 'home'])->name('home');

// about
Route::get('/about', [PageController::class, 'about'])->name('about');

// menu
Route::get('/menu', [PageController::class, 'menu'])->name('menu');

// order
Route::get('/order', [PageController::class, 'order'])->name('order');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');

Route::resource('posts', PostController::class);

// Route::post('/order/add', [PageController::class, 'addToOrder'])->name('order.add');

// Route::post('/order/checkout', [PageController::class, 'checkout'])->name('order.checkout');

// Route::get('/menu', [PageController::class, 'showMenu'])->name('menu');
// Route::get('/menu', [PageController::class, 'showMenu']);

// Route::post('/menu/store', [PageController::class, 'store'])->name('menu.store');