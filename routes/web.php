<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FBNotification;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PusherNotificationController;
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
    return view('pages.blog');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/category/{slug}', [ CategoryController::class, 'show' ]);

Route::get('/post/{id}', [ PostController::class, 'show' ]);

Route::post('/save-token', [ FBNotification::class, 'saveToken'])->name('save-token');

// Route::post('/send-notification', [ FBNotification::class, 'sendNotification'])->name('send.notification');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout',  function () {
    //logout user
    auth()->logout();
    // redirect to homepage
    return redirect('/');
});
