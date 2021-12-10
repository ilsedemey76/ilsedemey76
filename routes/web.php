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


Route::get(
    '/testing',
    array(
        'as' => 'site.testing',
        'uses' => 'TestController@getTest'
    )
);
Route::get(
    '/',
    array(
        'as' => 'site.home',
        'uses' => 'HomeController@index'
    )
);


Route::get(
    '/product/{product?}',
    array(
        'as' => 'site.product',
        'uses' => 'ProductController@getProduct'
    )
);

Route::post(
    '/contact',
    array(
        'as' => 'site.contact',
        'uses' => 'ProductController@contactMe'
    )
);



Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


// resize images
Route::get('resizeImage', 'ImageController@resizeImage');
Route::post('resizeImagePost', 'ImageController@resizeImagePost')->name('resizeImagePost');



// '/path/image.jpg?width=200&height=100
Route::get('thumbnails/{image}', 'ImageController@resizeImageGet');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
