<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Mail;

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

Route::get('/', [HomeController::class, 'home']);
Route::get('/work', [HomeController::class, 'work']);

Route::get('/contact', [ContactController::class, 'contact']);
Route::post('/contact', [ContactController::Class, 'contactsubmit'])->name('contact.submit');

Route::get('/game', [HomeController::class, 'game']);

Route::get('/github', static function() {
   return redirect('https://github.com/xdarkyne');
});
Route::get('/discord', static function() {
   return redirect('https://discord.gg/2JjnKs5sqP');
});
Route::get('/twitter', static function() {
   return redirect('https://twitter.com/xDarkyne');
});