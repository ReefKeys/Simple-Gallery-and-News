<?php

use App\Http\Controllers\berita_controller;
use App\Http\Controllers\home_controller;
use App\Http\Controllers\User_Controller;
use App\Http\Controllers\gallery_controller;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[home_controller::class,'index']);

Route::get('berita',[berita_controller::class,'berita']);
Route::get('tambah_berita',[berita_controller::class,'tambah_berita']);
Route::post('tambah_berita',[berita_controller::class,'tambah_berita_proses']);
Route::get('hapus_berita/{id}',[berita_controller::class,'hapus_berita']);
Route::get('edit_berita/{id}',[berita_controller::class,'edit_berita']);
Route::post('edit_berita/{id}',[berita_controller::class,'edit_berita_proses']);

Route::get('gallery',[gallery_controller::class,'gallery']);
Route::get('tambah_gallery',[gallery_controller::class,'tambah_gallery']);
Route::post('tambah_gallery',[gallery_controller::class,'tambah_gallery_proses']);
Route::get('hapus_gallery/{id}',[gallery_controller::class,'hapus_gallery']);
Route::get('edit_gallery/{id}',[gallery_controller::class,'edit_gallery']);
Route::post('edit_gallery/{id}',[gallery_controller::class,'edit_gallery_proses']);


Route::get('berita_lengkap/{id}',[berita_controller::class,'berita_lengkap']);

Route::get('register',[User_Controller::class,'register']);
Route::post('register',[User_Controller::class,'register_proses']);

Route::get('login',[User_Controller::class,'login']);
Route::post('login',[User_Controller::class,'login_proses']);

Route::get('logout',[User_Controller::class,'logout']);
