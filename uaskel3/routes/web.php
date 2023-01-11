<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [\App\Http\Controllers\HomepageController::class, 'index']);
Route::get('/category', [\App\Http\Controllers\HomepageController::class, 'category']);
Route::get('/produk', [\App\Http\Controllers\HomepageController::class, 'produk']);
Route::get('/client', [\App\Http\Controllers\HomepageController::class, 'client']);
Route::get('/contact', [\App\Http\Controllers\HomepageController::class, 'contact']);

Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function() {
    Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('admin');

    Route::resource('/kategori', \App\Http\Controllers\KategoriController::class);

    Route::resource('/produk', \App\Http\Controllers\ProdukController::class);

    Route::resource('/customer', \App\Http\Controllers\CustomerController::class);

    Route::resource('/transaksi', \App\Http\Controllers\TransaksiController::class);
    
    Route::get('/profil', [\App\Http\Controllers\UserController::class, 'index']);
    Route::get('/setting', [\App\Http\Controllers\UserController::class, 'setting']);

    Route::get('/laporan', [\App\Http\Controllers\LaporanController::class, 'index']);
    Route::get('/proseslaporan', [\App\Http\Controllers\LaporanController::class, 'proses']);

      Route::get('image', [\App\Http\Controllers\ImageController::class, 'index'])->name('image.index');
      Route::post('image', [\App\Http\Controllers\ImageController::class, 'store'])->name('image.store');
      Route::delete('image/{id}', [\App\Http\Controllers\ImageController::class, 'destroy'])->name('image.destroy');

      Route::post('imagekategori', [\App\Http\Controllers\KategoriController::class, 'uploadimage']);
      Route::delete('imagekategori/{id}', [\App\Http\Controllers\KategoriController::class, 'deleteimage']);

      Route::post('produkimage', [\App\Http\Controllers\ProdukController::class, 'uploadimage']);
      Route::delete('produkimage/{id}', [\App\Http\Controllers\ProdukController::class, 'deleteimage']);

      Route::resource('promo', \App\Http\Controllers\ProdukPromoController::class);
      Route::get('loadprodukasync/{id}', [\App\Http\Controllers\ProdukController::class, 'loadasync']);

   
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
