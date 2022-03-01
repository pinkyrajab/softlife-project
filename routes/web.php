<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


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
Auth::routes();

Route::get('/', [PagesController::class,'home'])->name('home');
Route::get('/restaurants', [PagesController::class, 'restaurants'])->name('restaurants');
Route::get('/hotels', [PagesController::class, 'hotels'])->name('hotels');
// Route::get('/signIn', [PagesController::class,'signIn'])->name('signIn');
// Route::get('/logIn',[PagesController::class,'logIn'])->name('logIn');
Route::get('/resetPass', [PagesController::class,'reset'])->name('reset');
Route::get('/adventures',[PagesController::class,'adventures'])->name('adventures');
Route::get('/tours',[PagesController::class,'tours'])->name('tours');
Route::get('/about',[PagesController::class,'about'])->name('about');
Route::get('/admin',[PagesController::class,'admin'])->name('admin');
Route::get('/myprofile', [PagesController::class,'myprofile'])->name('myprofile');
Route::post('profile', 'PagesController@index');




