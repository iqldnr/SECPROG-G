<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\TransakdetailController;
use App\Http\Controllers\TransaksiController;
use App\Models\cart;
use App\Models\items;
use App\Models\transaksi;
use App\Models\transakdetail;
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
    return view('produk',[
        "produk" => items::All()
    ]);
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

Route::get('/cart', function (){
    return view('cart',[
        "cart" => cart::All()
    ]);
});
Route::get('/transaksi', function (){
    return view('transaksi',[
        "transaksi" => transaksi::All(),
        "transaksidetail" => transakdetail::All()
    ]);
});

Route::post('/transak', [TransaksiController::class, 'store']);
Route::post('/transakk', [TransakdetailController::class, 'store']);
Route::post('/upload-produk', [ItemsController::class, 'store']);

Route::post('/addcart', [CartController::class, 'store']);


require __DIR__.'/auth.php';
