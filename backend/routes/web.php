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
Route::get('dashboard', [App\Http\Controllers\AdminDashboardController::class, 'index']);

Route::get('pets-cron-job', [App\Http\Controllers\PetController::class, 'checkPetsCronJob']);

// pet images
Route::get('pet-images', [App\Http\Controllers\PetImagesController::class, 'index'])->name('pet-images');
Route::get('pet-images-refresh/{id}', [App\Http\Controllers\PetImagesController::class, 'refresh'])->name('pet-images.refresh');
Route::get('truncate-images', [App\Http\Controllers\PetImagesController::class, 'truncateImages']);
Route::get('get-images',[App\Http\Controllers\PetController::class,'get_image'])->name('get-images');
// settings
Route::post('update-settings',[App\Http\Controllers\SettingsController::class,'update'])->name('update-settings');
Route::get('script-settings',[App\Http\Controllers\ScriptSettingController::class,'edit'])->name('script-settings-views');
Route::any('update_script_setting',[App\Http\Controllers\ScriptSettingController::class,'update'])->name('update_script_setting');

Route::get('settings/instagram-feed',[App\Http\Controllers\SettingsController::class,'getInstagramFeedSetting'])->name('getInstagramFeedSetting');
    

Route::post('settings/update-instagram-feed',[App\Http\Controllers\SettingsController::class,'updateInstagramFeedSetting'])->name('updateInstagramFeedSetting');

Route::resource('settings', 'App\Http\Controllers\ChangePasswordController');
Route::resource('pinogy-settings', 'App\Http\Controllers\PinogyAppController');

// manage pages
Route::resource('manage-pages', 'App\Http\Controllers\ManagePagesController');
Route::post('change-status',[App\Http\Controllers\ManagePagesController::class,'changeStatus'])->name('change-status');

// manage testimonials
Route::resource('manage-testimonials', 'App\Http\Controllers\TestimonialController');

Route::resource('manage-menu', 'App\Http\Controllers\MenuController');

