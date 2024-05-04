<?php

use App\Http\Controllers\HealthCenterController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('front.index');
})->name('index');

Route::get('/about', function () {
    return view('front.about');
})->name('about');

Route::get('/service', function () {
    return view('front.service');
})->name('service');

Route::get('/contact', function () {
    return view('front.contact');
})->name('contact');

Route::get('/center', function () {
    return view('front.centers');
})->name('center');

Route::get('/center-single', function (){
   return view('front.center_single');
})->name('center.single');

Route::get('/service-single', function (){
    return view('front.service_single');
})->name('service.single');




Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth'])->name('admin.index');
Route::middleware(['auth'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('adminpanel.master');
    })->middleware(['auth', 'verified'])->name('adminpanel');
Route::resource('health_centers',HealthCenterController::class);
Route::resource('services',ServiceController::class);
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
