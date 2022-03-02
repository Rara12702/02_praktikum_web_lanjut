<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\ContuctUs;

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
//nomor 1
Route::get('/', [Home::class, 'home']);

//nomor 2
Route::prefix('/category')->group(function() {
    Route::get('/marbel-edu-games', function() {
        echo 'Ini adalah link Marbel Edu Games <br>
         <a href="https://www.educastudio.com/category/marbel-edu-games"> 
         https://www.educastudio.com/category/marbel-edu-games </a>';
    });
    Route::get('/marbel-and-friends-kids-games', function() {
        echo 'Ini adalah link Marbel and Friends Kids Games <br>
        <a href="https://www.educastudio.com/category/marbel-and-friends-kids-games"> 
        https://www.educastudio.com/category/marbel-and-friends-kids-games </a>';
    });
    Route::get('/riri-story-books', function() {
        echo 'Ini adalah link Riri Story Books <br>
        <a href="https://www.educastudio.com/category/riri-story-books"> 
        https://www.educastudio.com/category/riri-story-books </a>';
    });
    Route::get('/kolak-kids-songs', function() {
        echo 'Ini adalah link Kolak Kids Songs <br>
        <a href="https://www.educastudio.com/category/kolak-kids-songs"> 
        https://www.educastudio.com/category/kolak-kids-songs </a>';
    });
});

//NOMOR 3
Route::get('/news', function(){
         echo 'Ini adalah halaman news';
     });
     Route::get('/news/{title}', function(Request $request, $title){
         echo 'Ini adalah halaman news dengan judul '.$title;
     });

//NOMOR 4
    Route::prefix('program')->group(function(){
    Route::get('/karir', function() {
        echo 'Ini adalah daftar program karir <br>
                <a href="https://www.educastudio.com/program/karir"> 
                https://www.educastudio.com/program/karir </a>';
    });
         Route::get('/magang', function(){
            echo 'Ini adalah daftar program magang <br>
            <a href="https://www.educastudio.com/program/magang"> 
            https://www.educastudio.com/program/magang </a>';
         });
         Route::get('/kunjungan-industri', function(){
             echo 'Ini adalah daftar program kunjungan industri <br>
             <a href="https://www.educastudio.com/program/kunjungan-industri"> 
             https://www.educastudio.com/program/kunjungan-industri </a>';
         });
     });

//NOMOR 5
Route::get('/about-us', function(){
         return 'Ini adalah halaman About-Us';
     });

//NOMOR 6
Route::resource('/contact-us', ContactUs::class)->only('store');
