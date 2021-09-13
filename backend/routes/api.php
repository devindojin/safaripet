<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;
use App\Http\Controllers\Api\ManagePagesController;
use App\Http\Controllers\ZohoController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\TestimonialController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




Route::get('pets', [PetController::class, 'index']);
Route::get("petbylocation",[PetController::class, 'petByLocation']);
Route::get('pet_details/{pet_id}', [PetController::class, 'petDetails']);

Route::get('getaboutpage', [ManagePagesController::class, 'aboutPage']);
Route::get('getventerinarin', [ManagePagesController::class, 'venterinarinPage']);
Route::get('getbreeders', [ManagePagesController::class, 'breedersPage']);
Route::get('getcommunity', [ManagePagesController::class, 'communityPage']);
Route::get('getfinancing', [ManagePagesController::class, 'financingPage']);
Route::get('page-status',[ManagePagesController::class, 'pageStatus']);

Route::get('testimonials', [TestimonialController::class, 'index']);


Route::post('send_inquiry', [ZohoController::class, 'insertPetProfile']);
Route::post('send_contact_info', [ContactController::class, 'store']);
