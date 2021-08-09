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
|//
*/
//Back Route
//Login Route
Route::prefix('admin')->middleware('isLogin')->name('admin.')->group(function (){
    Route::get('/giris','App\Http\Controllers\Back\AuthController@login')->name('login');
    Route::post('/giris','App\Http\Controllers\Back\AuthController@loginPost')->name('login.post');
});
//Admin
Route::prefix('admin')->middleware('isAdmin')->name('admin.')->group(function (){
    Route::get('/panel','App\Http\Controllers\Back\Dashboard@index')->name('dashboard');
    //Products Route
    Route::resource('urunler','App\Http\Controllers\Back\ProductController');
    Route::get('/product/switch/{id}/','App\Http\Controllers\Back\ProductController@switch')->name('product.switch');
    Route::resource('referanslar','App\Http\Controllers\Back\ReferenceController');
    Route::get('/reference/switch/{id}/','App\Http\Controllers\Back\ReferenceController@switch')->name('reference.switch');
    Route::resource('kategoriler','App\Http\Controllers\Back\CategoryController');
    Route::post('/kategoriler/create','App\Http\Controllers\Back\CategoryController@created')->name('category.create');
    Route::get('/category/switch/{id}/','App\Http\Controllers\Back\CategoryController@switch')->name('category.switch');
    Route::get('urunler/filter/{category}','App\Http\Controllers\Back\ProductController@category')->name('urunler.filter');
    //Configs
    Route::get('config/banner','App\Http\Controllers\Back\ConfigController@indexBanner')->name('config.banner.index');
    Route::get('config/about','App\Http\Controllers\Back\ConfigController@indexAbout')->name('config.about.index');
    Route::get('config/contact','App\Http\Controllers\Back\ConfigController@indexContact')->name('config.contact.index');
    Route::post('config/contact','App\Http\Controllers\Back\ConfigController@updateContact')->name('config.contact.update');
    Route::post('config/about','App\Http\Controllers\Back\ConfigController@updateAbout')->name('config.about.update');
    Route::post('config/banner','App\Http\Controllers\Back\ConfigController@updateBanner')->name('config.banner.update');
    //Logout
    Route::get('/cikis','App\Http\Controllers\Back\AuthController@logout')->name('logout');
});
//Front Route
Route::get('/','App\Http\Controllers\Front\Homepage@index')->name('homepage');
Route::get('/kategori/filter/all','App\Http\Controllers\Front\Homepage@categoryall')->name('categoryall');
Route::get('/kategori/filter/{category}','App\Http\Controllers\Front\Homepage@category')->name('category');
Route::get('/kategori/filter/{category}/{price}','App\Http\Controllers\Front\Homepage@categoryfilter')->name('urunler.filter');
Route::get('/iletisim','App\Http\Controllers\Front\Homepage@contact')->name('contact');
Route::get('/referanslar','App\Http\Controllers\Front\Homepage@reference')->name('reference');
Route::get('/referansol','App\Http\Controllers\Front\Homepage@getreference')->name('getreference');
Route::post('/referansol','App\Http\Controllers\Front\Homepage@getreferencepost')->name('getreferencepost');
Route::get('/hakkımızda','App\Http\Controllers\Front\Homepage@about')->name('about');
Route::post('/iletisim','App\Http\Controllers\Front\Homepage@contactpost')->name('contact.post');
Route::get('/{category}/{slug}','App\Http\Controllers\Front\Homepage@single')->name('single');
