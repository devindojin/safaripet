<?php


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
    return redirect('login');
});

Auth::routes();

//Admin Dashboard Controller
Route::get('admin/dashboard', [App\Http\Controllers\AdminDashboardController::class, 'index']);

// pet images
Route::get('admin/pet-images', [App\Http\Controllers\PetImagesController::class, 'index'])->name('pet-images');
Route::get('admin/truncate-images', [App\Http\Controllers\PetImagesController::class, 'truncateImages']);
Route::get('admin/get-images',[App\Http\Controllers\PetController::class,'get_image'])->name('get-images');
// settings
Route::post('admin/update-settings',[App\Http\Controllers\SettingsController::class,'update'])->name('update-settings');
Route::resource('admin/settings', 'App\Http\Controllers\ChangePasswordController');
Route::resource('admin/pinogy-settings', 'App\Http\Controllers\PinogyAppController');

// manage pages
Route::resource('admin/manage-pages', 'App\Http\Controllers\ManagePagesController');
Route::post('admin/change-status',[App\Http\Controllers\ManagePagesController::class,'changeStatus'])->name('change-status');

// manage testimonials
Route::resource('admin/manage-testimonials', 'App\Http\Controllers\TestimonialController');

