<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
// use App\Http\Controllers\ProductController;
// use App\Http\Controllers\NewsController;
// use App\Http\Controllers\ProgramController;
// use App\Http\Controllers\AboutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('product')->group(function () {
    Route::get('/marbel-edu-games', [App\Http\Controllers\ProductController::class, 'marbelEdu'])->name('marbelEdu');
    Route::get('/marbel-and-friends-kids-games', [App\Http\Controllers\ProductController::class, 'marbelFriend'])->name('marbelFriend');
    Route::get('/riri-story-book', [App\Http\Controllers\ProductController::class, 'riri'])->name('riri');
    Route::get('/kolak-kids-songs', [App\Http\Controllers\ProductController::class, 'kolak'])->name('kolak');
});

Route::get('/news/{id?}', [App\Http\Controllers\NewsController::class, 'news'])->name('news');

Route::prefix('program')->group(function () {
    Route::get('/karir', [App\Http\Controllers\ProgramController::class, 'karir'])->name('karir');
    Route::get('/magang', [App\Http\Controllers\ProgramController::class, 'magang'])->name('magang');
    Route::get('/kunjungan', [App\Http\Controllers\ProgramController::class, 'kunjungan'])->name('kunjungan');
});

Route::get('/about-us', [App\Http\Controllers\AboutController::class, 'about'])->name('about');

Route::resource('contact-us', ContactController::class);
