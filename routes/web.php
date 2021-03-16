<?php

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

// use  App\Http\Controllers\web\HomeController;


Route::middleware(\App\Http\Middleware\LangMiddleware::class)->group(function () {
    Auth::routes();

    Route::get('/', 'web\HomeController@index');
    Route::get('/donate', 'web\HomeController@donate');
    Route::get('/contact', 'web\HomeController@contact');
    Route::post('/contact/message/send', 'web\HomeController@send');
    Route::get('/about', 'web\HomeController@about');
    // Route::get('/lang/{lang}', 'FrontendController@changeLang');

    Route::get('/posts/index', 'web\PostController@index'); // Show all Post categories for all posts
    Route::get('/post/show/{id}', 'web\PostController@show');
    Route::get('/catposts/show/{id}', 'web\CatpostController@show');

    Route::get('/vposts/index', 'web\VpostController@index');
    Route::get('/vpost/show/{id}', 'web\VpostController@show');
    Route::get('/vcatposts/show/{id}', 'web\VcatpostController@show');

});

Route::get('/lang/{lang}', 'web\HomeController@changeLang');



// Route::get('/', 'web\FrontendController@index');
//
// Route::get('/logout', 'web\HomeController@logout');
//
// Route::get('/pcat/{id}', 'FrontendController@pcat');
