<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/',[TestController::class,'index']);
Route::get('/all-user',[TestController::class,'user']);
