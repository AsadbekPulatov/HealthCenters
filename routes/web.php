<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HealthCenterController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/center', [PageController::class, 'center'])->name('center');
Route::get('/center-single/{id}', [PageController::class, 'center_single'])->name('center.single');
Route::get('/service-single/{id}', [PageController::class, 'service_single'])->name('service.single');

Route::get('/dashboard', function () {
    return view('adminpanel.master');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('adminpanel.master');
    })->middleware(['auth', 'verified'])->name('adminpanel');

    Route::resource('health_centers', HealthCenterController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('doctors', \App\Http\Controllers\DoctorController::class);
    Route::resource('features', \App\Http\Controllers\FeaturesController::class);
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/service/{id}/booking', [BookingController::class, 'booking'])->name('service.booking');
    Route::get('/booking/list', [BookingController::class, 'booking_list'])->name('booking_list');
    Route::get('/booking/status/{id}', [BookingController::class, 'status'])->name('booking.status');
    Route::get('/booking/delete/{id}', [BookingController::class, 'delete'])->name('booking.delete');

    Route::post('ratings/save', [RatingController::class, 'store'])->name('ratings.store');
});

Route::resource('messages', MessageController::class);

require __DIR__ . '/auth.php';
