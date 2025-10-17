<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbilityController;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('ability', AbilityController::class);