<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\EventDetailController;
use App\Http\Controllers\Admin\EventTypeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\frontend\PageController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TeskController;
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


        // Event Type

        Route::get('/eventtype', [EventTypeController::class, 'index'])->name('eventtype.index');
        Route::get('/eventtype/create', [EventTypeController::class, 'create'])->name('eventtype.create');
        Route::post('/eventtype/store', [EventTypeController::class, 'store'])->name('eventtype.store');
        Route::get('/eventtype/edit/{id}', [EventTypeController::class, 'edit'])->name('eventtype.edit');
        Route::put('/eventtype/update/{id}', [EventTypeController::class, 'update'])->name('eventtype.update');
        Route::delete('/eventtype/delete/{id}', [EventTypeController::class, 'destroy'])->name('eventtype.destroy');
        Route::post('/eventtype/sort', [EventTypeController::class, 'sort'])->name('eventtype.sort');
        
        //Event
        Route::get('/events', [EventController::class, 'index'])->name('events.index');
        Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
        Route::post('/events/store', [EventController::class, 'store'])->name('events.store');
        Route::get('/events/edit/{id}', [EventController::class, 'edit'])->name('events.edit');
        Route::put('/events/update/{id}', [EventController::class, 'update'])->name('events.update');
        Route::get('/events/delete/{id}', [EventController::class, 'destroy'])->name('events.delete');

        Route::get('/events/status/{id}', [EventController::class, 'toggleStatus'])->name('events.status');

        Route::post('events/sort', [EventController::class, 'sort'])->name('events.sort');

        Route::get('events/{id}/details/create', [EventDetailController::class, 'create'])->name('events.details.create');

});
//search
Route::get('/search', [SearchController::class, 'search'])->name('search');



