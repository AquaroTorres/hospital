<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PatientController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('patient')->name('patient.')->group(function(){
    Route::get('/', [PatientController::class, 'index'])->name('index');
    Route::post('/', [PatientController::class, 'store'])->name('store');
    Route::get('/create', [PatientController::class, 'create'])->name('create');
    Route::get('/{patient}', [PatientController::class, 'show'])->name('show');
    Route::put('/{patient}', [PatientController::class, 'update'])->name('update');
    Route::delete('/{patient}', [PatientController::class, 'destroy'])->name('destroy');
    Route::get('/{patient}/edit', [PatientController::class, 'edit'])->name('edit');
});



// Route::get('patient', [PatientController::class, 'index'])->name('patient.index');
// Route::post('patient', [PatientController::class, 'store'])->name('patient.store');
// Route::get('patient/create', [PatientController::class, 'create'])->name('patient.create');
// Route::get('patient/{patient}', [PatientController::class, 'show'])->name('patient.show');
// Route::put('patient/{patient}', [PatientController::class, 'update'])->name('patient.update');
// Route::delete('patient/{patient}', [PatientController::class, 'destroy'])->name('patient.destroy');
// Route::get('patient/{patient}/edit', [PatientController::class, 'edit'])->name('patient.edit');

//Route::resource('patient', PatientController::class);
