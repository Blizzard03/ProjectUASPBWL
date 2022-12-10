<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
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

/*
Route::get('/', function () {
    return view('welcome');
}); 
*/

//Route Homepage
Route::get('/',[HomepageController::class,'index']);

//Route About Us
Route::get('/About',[HomepageController::class,'about']);

//Route Contact
Route::get('/Contact',[HomepageController::class,'contact']);

//Route Category
Route::get('/Kategori',[HomepageController::class,'kategori']);

//Route Dasboard
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', [DashboardController::class,'index']);
  });

//Route Kategori
Route::resource('kategori', 'KategoriController');

// route produk
Route::resource('laptop', 'ProdukController');

// route customer
Route::resource('customer', 'CustomerController');

//Route Transaksi
Route::resource('transaksi', 'TransaksiController');

// setting profil
Route::get('setting', 'UserController@setting');
?>
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
