<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContohController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\YantiController;
use App\Http\Controllers\barangController;
use App\Http\Controllers\mahasiswaController;

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

Route::get('/tampil/{nama}', function ($nama) {
    return ("hai nama saya adalah".$nama );
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::group(['middleware' => ['logincheck:admin']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['logincheck:editor']], function () {
        Route::resource('editor', EditorController::class);
    });
});

Route ::resource ('mahasiswa', mahasiswaController::class);

Route ::get ('/pesan',[ContohController::class,'index']);
Route ::get ('/barang',[ProdukController::class,'index']);
//Route ::get ('/show',[YantiController::class,'show']);
Route::get('/show',[ProdukController::class,'showeloquent']);
Route::get('/insert',[barangController::class,'insert_eloquent']);


Route::get('/home', function() {
    return view('index');
});


Route::get('/about', function() {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
