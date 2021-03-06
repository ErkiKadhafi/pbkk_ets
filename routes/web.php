<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatientController;
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

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [LoginController::class, "authenticate"])->name('login');
Route::get('/', [PatientController::class, "index"])->name('index');
Route::get('/patients/create', [PatientController::class, "create"])->name('patient.create');
Route::post('/patients', [PatientController::class, "store"])->name('patient.store');
Route::get('/patients/{patient}', [PatientController::class, "show"])->name('patient.show');
