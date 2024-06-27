<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('info',InfoController::class);





// تعريف المسار للمسار index
// Route::get('/', [InfoController::class, 'index'])->name('info.index');

// Route::get('info', [InfoController::class, 'index']);
// Route::get('/info/{info}', [InfoController::class, 'show']);


