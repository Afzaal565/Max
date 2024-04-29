<?php

use App\Http\Controllers\{ProfileController, CompanyController, EmployeeController};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bootstrap', function () {
    return view('layouts.admin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('companies', CompanyController::class)->except('show');
    Route::resource('employees', EmployeeController::class)->except('show');
    
});


require __DIR__.'/auth.php';
