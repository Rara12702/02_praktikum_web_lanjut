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


Route::get('/', function () {
    echo "Selamat Datang";
});

Route::get('/about', function () {
    echo nl2br ("Nim: 2041720110 \n Nama: Rara Deninda Hurianto \n Kelas: TI 2C");
});

Route::get('/artikel/{id}', function ($id) {
    echo 'Halaman article dengan ID ' .$id;
});
