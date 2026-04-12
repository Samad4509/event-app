<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\frontend\PageController;

use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TeskController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/events', [PageController::class, 'event'])->name('event');
Route::get('/events-details', [PageController::class, 'eventdetail'])->name('event.detail');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');
Route::get('/news', [PageController::class, 'news'])->name('news');




Auth::routes();


Route::prefix('admin')->name('admin.')->middleware(['auth','role:admin'])->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('users', UserController::class);
        Route::resource('roles', RoleController::class);
        Route::resource('blogs', BlogsController::class);
        

});
//search
Route::get('/search', [SearchController::class, 'search'])->name('search');



