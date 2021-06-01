<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Mail;


Auth::routes(['verify' => true]);
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
    return redirect(app()->getLocale());
});

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/work', [HomeController::class, 'work'])->name('work');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::Class, 'contactsubmit'])->name('contact.submit');


/*
|--------------------------------------------------------------------------
| Verified Group
|--------------------------------------------------------------------------
|
| Routes that require the user to be logged in and
| have verified their email address.
|
*/

Route::group(['middleware' => 'verified'], function () {
   Route::get('/game', [HomeController::class, 'game'])->name('game');
});

/*
|--------------------------------------------------------------------------
| Auth Group
|--------------------------------------------------------------------------
|
| Routes that require the user to be logged in.
|
*/

Route::group(['middleware' => 'auth'], function() {

});

/*
|--------------------------------------------------------------------------
| External Routes
|--------------------------------------------------------------------------
|
| Here are routes that redirect away from this site.
|
*/

Route::get('/github', static function() { return redirect('https://github.com/xdarkyne'); })->name('ext.github');
Route::get('/discord', static function() { return redirect('https://discord.gg/2JjnKs5sqP'); })->name('ext.discord');
Route::get('/twitter', static function() { return redirect('https://twitter.com/xDarkyne'); })->name('ext.twitter');
