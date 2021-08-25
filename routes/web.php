<?php

use App\Http\Controllers\BlogController;
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
    return view('welcome');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::prefix('divisi')->group(function () {
    Route::get('/', function () {
        return view('divisi');
    });
    Route::get('/ids', function () {
        return view('divisis.ids');
    });
    Route::get('/ijca', function () {
        return view('divisis.ijca');
    });
    Route::get('/ihmha', function () {
        return view('divisis.ihmha');
    });
    Route::get('/dc', function () {
        return view('divisis.dc');
    });
    Route::get('/ic', function () {
        return view('divisis.ic');
    });
});

Route::get('/prestasi', function () {
    return view('prestasi');
});
Route::get('/big-event', function () {
    return view('event');
});
Route::get('/contact-us', function() {
    return view('contact');
});

Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index']);
    Route::get('/{slug}', [BlogController::class, 'show']);
});
