<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
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
//
//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', [MainController::class, 'dashboard'])->middleware(['check_role'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/',function (){
        return view('dashboard');
    })->middleware(['check_role'])->name('dashboard');

    Route::post('applications', [ApplicationController::class, 'store'])->name('applicationStore');
//    Route::post('applications', [ApplicationController::class, 'store'])->name('applicationStore');

    Route::get('/manager', [MainController::class, 'dashboard'])->middleware(['check_manager'])->name('manager');

    Route::get('/client', function () {
        return view('client');
    })->middleware(['check_client'])->name('client');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
