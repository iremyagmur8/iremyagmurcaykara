<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;




Route::get('/',[HomepageController::class,'index'])->name('index');
Route::post('/',[HomepageController::class,'mail']);

Route::get('/lang/{lang}',[HomepageController::class,'clocal'])->name('clocal');


Route::get('amazon',[HomepageController::class,'amazon']);

Route::post('/api',[HomepageController::class,'api'])->name('api');

require __DIR__.'/auth.php';
require __DIR__.'/solaris.php';
