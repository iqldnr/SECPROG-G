<?php

use App\Http\Controllers\ItemsController;
use App\Models\items;
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
    return view('index');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/produk', function () {
    return view('produk');
});
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/upload-produk', function () {
    return view('upload-produk');
});
Route::get('/masuk', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/upload-produk', [ItemsController::class, 'store']);


require __DIR__.'/auth.php';
