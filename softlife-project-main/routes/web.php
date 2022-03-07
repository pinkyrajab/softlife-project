<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Livewire\Admin\DashboardComponent;
use App\Http\Livewire\Admin\LocationComponent;
use App\Http\Livewire\Admin\TourComponent;
use App\Http\Livewire\Admin\UserComponent;

Route::middleware(['middleware'=>'preventBackHistory'])->group(function () {
    Auth::routes();
});

// Web Routes
Route::get('/', [PagesController::class,'home'])->name('home');
Route::get('who-we-are',[PagesController::class,'about'])->name('about');
Route::get('/restaurants', [PagesController::class, 'restaurants'])->name('restaurants');
Route::get('/hotels', [PagesController::class, 'hotels'])->name('hotels');
Route::get('/resetPass', [PagesController::class,'reset'])->name('reset');
Route::get('/adventures',[PagesController::class,'adventures'])->name('adventures');
Route::get('/tours',[PagesController::class,'tours'])->name('tours');


// Admin Routes
Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function() {
    // Route::get('dashboard',[PagesController::class,'admin'])->name('admin.dashboard');
    Route::get('dashboard', DashboardComponent::class)->name('admin.dashboard');
    Route::get('all-users', UserComponent::class)->name('admin.users');
    Route::get('all-locations', LocationComponent::class)->name('admin.locations');
    Route::get('tours', TourComponent::class)->name('admin.tours');
    Route::get('myprofile', [PagesController::class,'myprofile'])->name('myprofile');
    Route::post('profile', 'PagesController@index');
});

Route::get('dashboard',[PagesController::class,'user'])->name('user.dashboard');





