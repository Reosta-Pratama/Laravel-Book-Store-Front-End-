<?php

use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Route;

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
    return view('frontend.master');
})->name('frontend');

Route::get('/books', function () {
    return view('frontend.nav.book');
})->name('frontend.books');

Route::get('/search', function () {
    return view('frontend.detail.search');
})->name('frontend.search');

Route::get('/authors', function () {
    return view('frontend.nav.author');
})->name('frontend.authors');

Route::get('/favorites', function () {
    return view('frontend.nav.favorite');
})->name('frontend.favorites');

Route::get('/blog', function () {
    return view('frontend.nav.blog');
})->name('frontend.blog');

Route::get('/about-us', function () {
    return view('frontend.nav.about');
})->name('frontend.about');

Route::get('/detailbook', function () {
    return view('frontend.detail.detailbook');
})->name('frontend.detailbook');

Route::get('/detailblog', function () {
    return view('frontend.detail.detailblog');
})->name('frontend.detailblog');

Route::get('/detailauthor', function () {
    return view('frontend.detail.detailauthor');
})->name('frontend.detailauthor');

Route::get('/login', function () {
    return view('frontend.auth.login');
})->name('login');

Route::get('/register', function () {
    return view('frontend.auth.register');
})->name('register');

Route::get('/forgot-password', function () {
    return view('frontend.auth.forgot');
})->name('forgot');

Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'handlerGoogleCallBack'])->name('google.callback');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
