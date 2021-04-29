<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Example;
use App\Http\Controllers\Web;
use App\Http\Controllers\Formislemleri;
use App\Http\Controllers\Crud;
use App\Http\Controllers\ModelCheck;
use App\Http\Controllers\Contact;
use App\Http\Controllers\UploadImage;
use App\Http\Controllers\Uyelik;

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

Route::get('merhaba', function (){
    return view('merhaba');
});


//Route::get('/php',[Example::class,'test']);
Route::get('/php/{slug}',[Example::class,'test']);

/*Route::get('index',function (){
    return view('web');
});
*/
Route::get('index',[Web::class,'site'])->name('index');

Route::get('form',[Formislemleri::class,'gorunum'])->name('form');

Route::middleware('arakontrol')->post('form-sonuc',[Formislemleri::class,'sonuc'])->name('sonuc');

Route::get('crud',[Crud::class,'view']);

Route::get('crud/update',[Crud::class,'update']);

Route::get('crud/delete',[Crud::class,'delete']);

Route::get('crud/insert',[Crud::class,'insert']);

Route::get('model',[ModelCheck::class,'list']);

Route::get('model/insert',[ModelCheck::class,'_insert']);

Route::get('model/update',[ModelCheck::class,'_update']);

Route::get('model/delete',[ModelCheck::class,'_delete']);

Route::get('contact',[Contact::class,'up']);

Route::post('contact/res',[Contact::class,'con_insert'])->name("contact-res");

Route::get('upload',function (){
   return view('upload');
});

Route::post('image',[UploadImage::class,'upload_image'])->name('upload_img');

Route::get('uye',function () {
    return view('uyelik');
});

Route::post('uye-kayit',[App\Http\Controllers\Uyelik::class,'register'])->name('uye-kayit');
