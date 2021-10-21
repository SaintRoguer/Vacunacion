<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\SanitaryRegionController;
use App\Http\Controllers\VaccinationController;
use App\Http\Controllers\userRegistrationController;



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
    return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('users',userRegistrationController::class)->middleware('can:users')->names('users');
Route::resource('vaccines',VaccineController::class)->middleware('can:vaccines')->names('vaccines');
Route::resource('sanitary_regions',SanitaryRegionController::class)->middleware('can:sanitary_regions')->names('sanitary_regions');
Route::resource('vaccinations',VaccinationController::class)->middleware('can:vaccinations')->names('vaccinations');


