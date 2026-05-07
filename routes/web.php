<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CicloFormativoController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('ciclos', CicloFormativoController::class);
