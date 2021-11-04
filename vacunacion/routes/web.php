<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\SanitaryRegionController;
use App\Http\Controllers\VaccinationController;
use App\Http\Controllers\userRegistrationController;
use App\Http\Controllers\Vaccine_lotController;
use App\Http\Controllers\Report_solicitationController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\manageReportController;
use App\Http\Controllers\ReportController;



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
Route::resource('vaccine_lots',Vaccine_lotController::class)->middleware('can:vaccine_lots')->names('vaccine_lots');
Route::resource('report_solicitations',Report_solicitationController::class)->middleware('can:report_solicitations')->names('report_solicitations');

Route::get('/findSanitary_regionName',[DropdownController::class, 'findSanitary_regionName']);

Route::resource('manage_reports',manageReportController::class)->middleware('can:manage_reports')->names('manage_reports');

Route::put('/accept_report',[ReportController::class, 'accept_report'])->name('accept_report');
Route::put('/reject_report',[ReportController::class, 'reject_report'])->name('reject_report');


