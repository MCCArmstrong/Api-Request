<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\MediaController;

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

// Route::get('index', function () {
//     return view('admin.index');
// });

Route::resource('user', UserController::class);


// Dashboard
Route::get('/', 'dashboardController@index');

// Route to Pixabay
Route::get('/pixabay-api', 'ApiController@getApi')->name('search');
Route::post('/upload-image-urls', 'ApiController@uploadURL')->name('upload.url');

// Media 
Route::resource('/product-media', 'MediaController');
// Route::get('/pixabay-test', 'MediaController@getPixabay')->name('check');

