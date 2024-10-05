<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamenController;

Route::get('/', function () {
    return view('welcome');
});

//Examen
Route::resource('examen', ExamenController::class);