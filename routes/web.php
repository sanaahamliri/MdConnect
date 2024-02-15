<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SpecialityController;

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
    return view('welcome');
});

Route::get('/doctorDetails', function () {
    return view('doctorDetails');
});

Route::get('/appoin', function () {
    return view('appointment');
});

Route::get('/admin', function () {
    return view('adminDash');
});

Route::get('/doctorDash', function () {
    return view('doctorDash');
});

Route::get('/dashboard', [SpecialityController::class, 'specialities']);
Route::get('/doctorDash', [SpecialityController::class, 'specialitiesDoctor']);
Route::get('/doctorDash', [SpecialityController::class, 'specialitiesAdmin']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

